<h2 class="page-header">Lista de profesiones</h2>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>sueldo</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($model) > 0): ?>
        <?php foreach ($model as $m): ?>
            <tr>
                <td><?php echo $m->nombre; ?></td>
                <td><?php echo $m->sueldo; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>