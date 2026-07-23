<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-4 p-4" style="background-color: #fff9fa;">
            <h3 class="mb-4 text-center fw-bold" style="color: #d81b60;">Registrar Nuevo Michi</h3>
            <form action="actions/mascota.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nombre del Gato</label>
                    <input type="text" name="nombre" class="form-control rounded-pill px-3 shadow-none border-pink" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Edad</label>
                    <input type="text" name="edad" class="form-control rounded-pill px-3 shadow-none border-pink" placeholder="Ej. 2 meses, 4 años" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Sexo</label>
                    <select name="sexo" class="form-select rounded-pill px-3 shadow-none border-pink" required>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold">Fotografía</label>
                    <input type="file" name="imagen" class="form-control rounded-pill shadow-none border-pink" accept="image/*" required>
                </div>
                <button type="submit" name="guardar" class="btn btn-custom-pink w-100 rounded-pill text-white fw-bold shadow-sm py-2">
                    Guardar Registro
                </button>
            </form>
        </div>
    </div>
</div>
