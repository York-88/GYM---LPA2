<body>
    <span class="border border-secondary">
        <div class="row gx-5 justify-content-center">
            <div class="col-md-6">
                <div class="mt-5">
                    <h2>Actualizar Ejercicio</h2>
                    <h4>Aqui puedes actualizar los detalles del ejercicio</h4>
                </div>
                
                <?php echo form_open()?>
                    <div class="form-group mb-3">
                        <input type="hidden" name="id_ejercicio" value="<?php echo isset($ejercicio->id_ejercicio) ? $ejercicio->id_ejercicio : ''; ?>">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $ejercicio->nombre_ejercicio; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required><?php echo $ejercicio->objetivo; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            <?php echo form_close(); ?>
            </div>
        </div>
    </span>
</body>
