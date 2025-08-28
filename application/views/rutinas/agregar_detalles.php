<?php 
    var_dump($id_rutina);
?>
<div class="container mt-4">
    <h2>Agregar Ejercicios a la Rutina</h2>
    <?php echo form_open('Registrar/registrarDetallesRutina'); ?>
        <input type="hidden" name="id_rutina" value="<?php echo $id_rutina; ?>">
        <?php foreach ($ejercicios as $ejercicio): ?>
            <div class="mb-3 row align-items-center">
                <div class="col-md-6">
                    <input type="checkbox" name="ejercicios[]" value="<?php echo $ejercicio->id_ejercicio; ?>">
                    <?php echo $ejercicio->nombre_ejercicio; ?>
                </div>
                <div class="col-md-6">
                    <label for="nivel_<?php echo $ejercicio->id_ejercicio; ?>">Nivel:</label>
                    <select name="niveles[<?php echo $ejercicio->id_ejercicio; ?>]" id="nivel_<?php echo $ejercicio->id_ejercicio; ?>" class="form-select">
                        <?php foreach ($niveles as $nivel): ?>
                            <option value="<?php echo $nivel->id_nivel; ?>"><?php echo $nivel->nivel; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Guardar ejercicios</button>
        <a href="<?php echo base_url('Obtener/obtenerRutinas'); ?>" class="btn btn-secondary">Cancelar</a>
    <?php echo form_close(); ?>
</div>