
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <?php echo form_open('registrar/registrarCliente');?> 
            <div class="mb-5"><h2>Ingrese la infomoración para el registro</h2></div>
                <div class="row">
                    <div class="mb-3">
                        <label for="DocumentoUsuario" class="form-label">Numero de documento:</label>
                        <input type="text" name="documentoUsuario" id="documentoUsuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombreUsuario" class="form-label">Primer Nombre:</label>
                        <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ApellidoUsuario" class="form-label">Primer Apellido:</label>
                        <input type="text" name="apellidoUsuario" id="apellidoUsuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="DireccionUsuario" class="form-label">Dirección de residencia:</label>
                        <input type="text" name="direccionUsuario" id="direccionUsuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="TelefonoUsuario" class="form-label">Numero de telefono:</label>
                        <input type="text" name="telefonoUsuario" id="telefonoUsuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ContraseñaDelUsuario" class="form-label">Contraseña</label>
                        <input type="password" name="contraseñaUsuario" class="form-control" id="contraseñaUsuario" required>
                    </div>
            <? echo form_close(); ?>   
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>