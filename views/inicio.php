<?php
$mascotas = obtenerMascotas();
?>
<div class="d-flex justify-content-between align-items-center mb-4 p-3 rounded-4 shadow-sm" style="background-color: #fce4ec;">
    <h4 class="mb-0 fw-bold" style="color: #d81b60;">Gatos disponibles</h4>
    <div class="input-group w-25">
        <span class="input-group-text bg-white border-end-0 rounded-start-pill">🔍</span>
        <input type="text" id="buscar" class="form-control border-start-0 rounded-end-pill shadow-none" placeholder="Buscar gatos...">
    </div>
</div>

<div class="row mt-4" id="contenedorProductos">
    <?php
    if(count($mascotas) > 0) {
        foreach($mascotas as $mascota) {
            include("views/components/tarjeta.php");
        }
    } else {
    ?>
        <div class="alert alert-info border-0 shadow-sm rounded-4 text-center">
            Aún no hay michis registrados en adopción. ¡Registra uno nuevo!
        </div>
    <?php
    }
    ?>
</div>
