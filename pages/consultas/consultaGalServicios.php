<?php
require '../componentsAdmin/query.php';
if ($super == 1 or $verTablaGalServicios == 1) {
	$query = "SELECT G.id_galServicio, G.file, G.descripcion, G.mes_anio, G.modulo, G.fechaRegistro,
	U.nombres, U.aPaterno, U.aMaterno
	FROM galeriaservicios G
	INNER JOIN usuarios U ON G.id_capC = U.id_usuario
	ORDER BY G.id_galServicio DESC";
} else {
	$query = "SELECT id_usuario
	FROM usuarios WHERE id_usuario = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$id_galServicio = $row['id_galServicio'];
	$file = $row['file'];
	$modulo = $row['modulo'];
	$capturista = $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];


	// Eliminar Imagen Galeria de Servicios
	if ($super == 1 OR $eliminarGalServicios == 1) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $id_galServicio . "\",\"" . $file . "\", \"".$modulo."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminarGalServicios'><i class='fas fa-trash-alt'></i></a>";
	}


	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$id_galServicio}</span>",
		"2" => $row['modulo'],
		"3" => $row['descripcion'],
		"4" => $row['file'],
		"5" => $row['mes_anio'],
		"6" => $row['fechaRegistro'],
		"7" => $capturista,
		"8" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Comprobación de Placas'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='Eliminar Imagen Galeria de Servicios'>
										" . $outputBtns1 . "
									</span>
								</li>
							</ul>
						</div>
					</div>"

	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
