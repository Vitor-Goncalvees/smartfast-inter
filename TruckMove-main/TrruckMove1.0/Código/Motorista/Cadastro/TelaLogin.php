<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="log.css">

    <style>

  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to left, #003082,  rgb(20, 147, 220));
}

div{
    background-color: rgba(0, 0, 0, 0.6);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 80px;
    border-radius: 15px;
    color: white;
}

input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}

.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
}

.inputSubmit:hover{
    background-color: #003082;
}
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
    <form action="controleLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
            <br>
            <br>
        <input type="password" name="senha" placeholder="Senha">
            <br>
            <br>
        <input class="inputSubmit" type="submit" name="submit" value="Entrar">
    </form>
    </div>
   
</body>
</html>