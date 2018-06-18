<h2 class="page-header">Lista de empleado</h2>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha Nacimiento</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($model) > 0): ?>
        <?php foreach ($model as $m): ?>
            <tr>
                <td><?php echo $m->nombres; ?></td>
                <td><?php echo $m->apellidos; ?></td>
                <td><?php echo $m->fechaNacimiento; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>