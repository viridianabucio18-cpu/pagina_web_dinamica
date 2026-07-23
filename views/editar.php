<?php
$id = $_GET["id"];
$mascota = obtenerMascotaPorId($id);
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-4 p-4" style="background-color: #fff9fa;">
            <h3 class="mb-4 text-center fw-bold" style="color: #d81b60;">Editar Información</h3>
            <form action="actions/mascota.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_mascota" value="<?php echo $mascota['id_mascota']; ?>">
                
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nombre del Gato</label>
                    <input type="text" name="nombre" class="form-control rounded-pill px-3 shadow-none border-pink" value="<?php echo htmlspecialchars($mascota['nombre']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Edad</label>
                    <input type="text" name="edad" class="form-control rounded-pill px-3 shadow-none border-pink" value="<?php echo htmlspecialchars($mascota['edad']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Sexo</label>
                    <select name="sexo" class="form-select rounded-pill px-3 shadow-none border-pink" required>
                        <option value="Macho" <?php if($mascota['sexo'] == 'Macho') echo 'selected'; ?>>Macho</option>
                        <option value="Hembra" <?php if($mascota['sexo'] == 'Hembra') echo 'selected'; ?>>Hembra</option>
                    </select>
                </div>
                
                <div class="mb-3 text-center">
                    <label class="form-label fw-semibold d-block">Imagen actual</label>
                    <img src="uploads/<?php echo htmlspecialchars($mascota['imagen']); ?>" class="rounded-3 shadow-sm" width="120" style="object-fit:cover; height: 120px;">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold">Actualizar fotografía (Opcional)</label>
                    <input type="file" name="imagen" class="form-control rounded-pill shadow-none border-pink" accept="image/*">
                </div>
                
                <button type="submit" name="editar" class="btn btn-custom-pink w-100 rounded-pill text-white fw-bold shadow-sm py-2">
                    Actualizar Registro
                </button>
            </form>
        </div>
    </div>
</div>
