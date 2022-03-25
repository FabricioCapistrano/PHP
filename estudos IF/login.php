<?php
    $nome = 'Fabricio';
    $senha = 'saiko';

if($_POST['usuario'] != $nome && $_POST['senha'] != $senha){
    header('Location: index.php');
}
else{
    header('Location: feed.php');
}
?>