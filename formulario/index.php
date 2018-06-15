<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo de formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Mi Primer Formulario</h5>
            <form id="formulario" method="post" action="procesa.php">
                <div class="form-group">
                    <label for="txtNombre">Nombres</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="cboOcupacion">Ocupación</label>
                    <select class="form-control" name="cboOcupacion" id="cboOcupacion">
                        <option value="ingeniero">Ingeniero</option>
                        <option value="arquitecto">Arquitecto</option>
                        <option value="profesor">Profesor</option>
                        <option value="quimico">Quimico</option>
                        <option value="futbolista">Futbolista</option>
                    </select>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsSexo" id="optionsSexo" value="masculino"/>
                        Masculino
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsSexo" id="optionsSexo" value="feminino"/>
                        Femenino
                    </label>
                </div>
                <div class="form-group">
                    <label for="txtAcercaDeMi">Acerca de mi</label>
                    <textarea class="form-control" name="txtAcercaDeMi" id="txtAcercaDeMi" cols="30"
                              rows="5"></textarea>
                </div>
                <div class="well well-sm">
                    <h5>Ingrese los datos de sus hijos</h5>
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label for="txtHijo">Hijo Nº <?php echo $i + 1; ?> </label>
                                    <input type="text" name="hijo[<?php echo $i; ?>][nombre]" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="txtEdad">Edad Nº <?php echo $i + 1; ?> </label>
                                    <input type="text" name="hijo[<?php echo $i; ?>][edad]" class="form-control">
                                </div>
                            </div>
                        </div>

                    <?php endfor; ?>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="chckCondiciones" value="acepto"> Acepto las condiciones de registro
                    </label>
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
            $.ajax({
                url:"procesa.php",
                method: "POST",
                data: form.serialize(),
                /*
                 * Podemos enviar el formulario uno a uno los campos o podemos serializarlo
                data:{
                    nombre: $("#txtNombre").val(),
                    ocupacion : $("#cboOcupacion").val(),
                    sexo: $("#optionsSexo").val(),
                    acercaDeMi: $("#txtAcercaDeMi").val()
                },*/
                // esta es la respuesta
                dataType: "json",
                success: function(r){
                    alert(r.response);
                }
            });
            return false;
        })
    })
</script>
</body>
</html>