<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formularios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Mi Primer Formulario - validado con AJAX</h5>
            <form id="formulario" method="post" action="validacion.php">
                <div class="form-group">
                    <label for="txtNombre">Nombres</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control"/>
                    <span data-key="nombre" class="label label-danger"></span>
                </div>
                <div class="form-group">
                    <label for="txtCorreo">Correo</label>
                    <input type="text" name="txtCorreo" id="txtCorreo" class="form-control">
                    <span data-key="correo" class="label label-danger"></span>
                </div>
                <div class="form-group">
                    <label for="txtFechaNacimiento">Fecha Nacimiento</label>
                    <input type="text" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control">
                    <span data-key="fecha" class="label label-danger"></span>
                </div>
                <div class="form-group">
                    <label for="txtWeb">Web</label>
                    <input type="text" name="txtWeb" id="txtWeb" class="form-control">
                    <span data-key="web" class="label label-danger"></span>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="chckCondiciones" value="acepto"> Acepto las condiciones de registro
                    </label>
                    <span data-key="condiciones" class="label label-danger"></span>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var form = $("#formulario");
        form.submit(function () {
            // Para que no se quede pegado la validacion
            form.find(".label-danger").text("");
            $.ajax({
                url: "validacion.php",
                method: "POST",
                data: form.serialize(),
                success: function (r) {
                    if (!r.response) {
                        for (var k in r.errors) {
                            $("span[data-key='" + k + "']").text(r.errors[k]);
                        }
                        return false;
                    }
                    alert("Todo correcto");
                },
                dataType: "json"
            });
            return false;
        })
    })
</script>
</body>
</html>