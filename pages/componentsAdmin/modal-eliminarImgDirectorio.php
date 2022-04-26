<div class="modal fade" id="eliminarImgDirectorio<?php echo $row['idDirectivo'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Realmente deseas eliminar imagen?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong>
                    Nombre: <?php echo $row['archivo'] ?>
                </strong>
            </div>
            <form id="formDeleteImgDirectorio">
                <div class="modal-footer text-left">
                    <input type="hidden" name="idDirectivo" id="idDirectivo" value="<?php echo $row['idDirectivo']; ?>">
                    <input type="hidden" name="file" id="file" value="<?php echo $row['archivo']; ?>">
                    
                    <button type="submit" id="btnDeleteImgDirectorio" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</a>
                </div>
            </form>
            <!-- <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" idDirectivo="<?php echo $row['idDirectivo']; ?>" class="btn btn-secondary btn-block btnBorrarImgDirectorio" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>
                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div> -->
            <div class="pie">
                <h5>Eliminar Imagen Directivo</h5>
            </div>
        </div>
    </div>
</div>
