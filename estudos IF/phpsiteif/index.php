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
    <div>
        <h1 class="titulo" style="color: #2A2452; ">Uatizap 2</h1>
        <form method="post" action="login.php">
            <p style="color: #2A2452; ">
                <label color= "aab">Usuário:</label>
                <input type="text" name= "usuario"/>
            </p>
            <p style="color: #2A2452; ">
                <label>Senha:</label>
                <input type="password" name="senha">
            </p>
            <input type="submit" name="aa" style= "color:#E9E1FF"/>
        </form>
    </div>
    <p style="color: #E9E1FF">
    <?php
    session_start();
    if(isset($_SESSION['erro']) == true){
        echo $_SESSION['erro'];
    }
    ?>
    </p>
</body>
</html>