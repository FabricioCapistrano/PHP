<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site IF</title>
</head>
<style>
    body{
        background-color: #836FFF	;
        text-align: center;
    }
    h1{
        font-family: 'Alata-Regular';
        src: url('fontskk/Alata-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
</style>
<body>

    <?php
    session_start();
    if(isset($_SESSION['erro'])){
        echo $_SESSION['erro'];
    }
    ?>

    <h1 class="titulo">Uatizap 2</h1>
    <form method="post" action="login.php">
        <p>
            <label>Usuário:</label>
            <input type="text" name= "usuario"/>
        </p>
        <p>
            <label>Senha:</label>
            <input type="password" name="senha">
        </p>
        <input type="submit" />
    </form>
</body>
</html>