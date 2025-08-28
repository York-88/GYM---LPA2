<div class="container mt-4">
    <h2>Agregar Rutina</h2>
    <?php echo form_open('Registrar/registrarRutina'); ?>
        <div class="mb-3">
            <label for="grupo_muscular" class="form-label">Grupo Muscular</label>
            <input type="text" name="grupo_muscular" id="grupo_muscular" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="objetivo" class="form-label">Objetivo</label>
            <input type="text" name="objetivo" id="objetivo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Agregar rutina</button>
        <a href="<?php echo base_url('Obtener/obtenerRutinas'); ?>" class="btn btn-secondary">Cancelar</a>
    <?php echo form_close(); ?>
</div>