<?php
session_start();

require_once '../lib/banco/MySQL.php';
require_once '../lib/Hash.php';
require_once '../model/Usuario.php';

$usuario = Usuario::autenticar($_POST['email'], $_POST['senha']);

if (!$usuario) {
    echo 'Usuário ou senha inválidos';
} else {
    $_SESSION['notas']['usuario'] = $usuario;
}