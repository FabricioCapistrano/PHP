<?php

    session_start();

    $nome = 'Fabricio';
    $senha = 'senha';

if($_POST['usuario'] == $nome){
    if($_POST['senha'] == $senha){
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: feed.php');
    }
    else{
        $_SESSION['erro'] = 'Senha Inválida!!';
        header('Location: index.php');
    }
}
else{
    $_SESSION['erro'] = 'Usuário Inválido!!';
    header('Location: index.php');
}
?>