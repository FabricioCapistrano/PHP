<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Feed</title>
</head>

<body>
    <h1>Urubuzando tudo!</h1>
    <h2>Olá <?php
    session_start();
    echo $_SESSION['usuario'];
    ?>!</h2>
</body>
</html>