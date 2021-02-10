<?php
require_once '../lib/banco/MySQL.php';
require_once '../model/Nota.php';

$notas = Nota::getAll();
?>

<div class="row">
    <?php foreach($notas as $nota): ?>
        <div class="col-md-3">
            <a class="open-note">
                <div class="note bg-warning">
                    <h3 class="title"><?php echo $nota->titulo ?></h3>

                    <p class="description"><?php echo $nota->descricao ?></p>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>