<div class="modal fade bd-example-modal-sm<?php echo $row['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Realmente deseas eliminar a:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong>
                    <?php echo  $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'] ?>
                </strong>
            </div>
            <form id="formDeleteUsuario">
                <div class="modal-footer text-left">
                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $row['id_usuario']; ?>">

                    <button type="submit" id="btnDeleteUsuario" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <button data-dismiss="modal" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteUsuario"></div>
                </div>
            </div>
            <div class="pie">
                <h5>Eliminar Usuario</h5>
            </div>
        </div>
    </div>
</div>

