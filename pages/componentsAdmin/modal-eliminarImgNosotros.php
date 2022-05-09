<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade" id="eliminarImgNosotros<?php echo $row['id_recurso'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Realmente deseas eliminar imagen?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong>
                    Nombre: <?php echo $row['file'] ?>
                </strong>
            </div>
            <form id="formDeleteImgNosotros">
                <div class="modal-footer text-left">
                    <input type="hidden" name="id_recurso" id="id_recurso" value="<?php echo $row['id_recurso']; ?>">
                    <input type="hidden" name="file" id="file" value="<?php echo $row['file']; ?>">

                    <button type="submit" id="btnDeleteImgNosotros" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <button data-dismiss="modal" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteImgNosotros"></div>
                </div>
            </div>
            <div class="pie">
                <h5>Eliminar Imagen Módulo Nosotros</h5>
            </div>
        </div>
    </div>
</div>