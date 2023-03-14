<!-- Modal 1-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Extintor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modalExt" action="/update" method="POST">
                    @csrf
                    <input id="data-id" type="hidden" name="id" value="">
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="size">Tamaño(Kg): </label>
                            <input type="number" name="size" id="size" class="form-control" min = 0 required>
                        </div>
                        <div class="col-4">
                            <label for="type">Tipo: </label>
                            <input type="text" name="type" id="type" class="form-control" required>
                        </div>
                        <div class="col-5">
                            <label class="w-100" for="expiration_date">Fecha de expiración: </label>
                            <input type="date" name="expiration_date" id="expiration_date" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="location">Localización (Coordenadas): </label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="place">Lugar: </label>
                            <input type="text" name="place" id="place" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label for="floor">Piso: </label>
                            <input type="number" name="floor" id="floor" class="form-control" min = 0 required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="observation">Observaciones: </label>
                        <input type="text" name="observation" id="observation" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>