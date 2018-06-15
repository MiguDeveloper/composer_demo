<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio de archivos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Mi Primer Formulario</h5>
            <form id="formulario" method="post" action="procesaArchive.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtNombre">Nombres</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Archivo</label>
                    <input type="file" name="archivo[]" class="form-control">
                </div>
                <div class="form-group">
                    <label>Archivo 2</label>
                    <input type="file" name="archivo[]" class="form-control">
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

</script>
</body>
</html>