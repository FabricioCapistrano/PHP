<?php
    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($nome == "Fabricio" && $senha == "saiko"){
        header('Location: feed.php');
    }
    else{
        header('Location: index.php');
    }
?>