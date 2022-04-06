<?php

    session_start();

    $nome = 'Fabricio';
    $senha = 'senha';

if($_POST['usuario'] == $nome && $_POST['senha'] == $senha){
    header('Location: feed.php');
}
else{
    $_SESSION['erro'] = 'Login Inválido!!';
    header('Location: index.php');
}
?>