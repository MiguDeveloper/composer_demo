<h2 class="page-header">Pagina de usuario</h2>

<ul class="list-group">
    <?php foreach ($users as $u): ?>
        <li class="list-group-item">
            <?php echo $u; ?>
        </li>
    <?php endforeach; ?>
</ul>