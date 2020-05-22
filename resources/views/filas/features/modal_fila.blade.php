<div class="modal fade" id="fila" tabindex="-1" role="dialog" aria-labelledby="exampleContatoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleContatoLabel">Incluir na Fila {{$nivel}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">
                </h1>

                    @include('filas.forms.form_fila')

            </div>
        </div>
    </div>