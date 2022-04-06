<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Site IF</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['erro'])){
        echo $_SESSION['erro'];
    }
    ?>
    <div>
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
            <input type="submit" name="aa"/>
        </form>
    </div>
</body>
</html>