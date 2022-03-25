<?php
    $nome = 'Fabricio';
    $senha = 'senha';

        if($_POST['usuario']; = $nome && $_POST['senha'] = $senha){
        header('Location: feed.php');
    }
    else{
        header('Location: index.php');
    }
?>