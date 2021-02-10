<?php
require_once '../lib/banco/MySQL.php';
require_once '../model/Nota.php';

$nota = new Nota(null, 2, $_POST['titulo'], $_POST['descricao']);
$nota->save();