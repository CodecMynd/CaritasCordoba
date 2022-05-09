<div class="modal fade eliminarServFarmacia" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Realmente deseas eliminar a:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong>
                    Modulo: <span id="moduloText"></span>
                </strong>
                <br>
                <strong>
                    Imagen Banner: <span id="imgBannerText"></span>
                </strong>
                <br>
                <strong>
                    Imagen Principal: <span id="imgPrincipalText"></span>
                </strong>
            </div>
            <form id="formEliminarServFarmacia">
                <input type="hidden" name="idServicio" id="idServicio" value="">
                <input type="hidden" name="imgBanner" id="imgBanner" value="">
                <input type="hidden" name="imgPrincipal" id="imgPrincipal" value="">

                <div class="modal-footer text-center">

                    <button type="button" id="btnEliminarServFarmacia" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaEliminarServFarmacia"></div>
                </div>
            </div>
            <div class="pie">
                <h5>Servicio Farmacia</h5>
            </div>
        </div>
    </div>
</div>

