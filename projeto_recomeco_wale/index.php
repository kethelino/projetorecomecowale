
<?php
//Importação de arquivos
include "./const.php";
include "./src/model/user.php";

if( isset($_POST["user"]) &&
    isset($_POST["pass"]) ) {
        //Criar um novo objeto da classe User
        $user = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        //Fazendo uso do método de verificação de login
        if( $user->login() ) {
            var_dump($user->login());
            echo "<script> alert('AUTENTICADO! ✅') </script>";
            $_SESSION["user"] = $user->getObject();
            header("Refresh: 0; URL= /projeto_recomeco_wale/src/view/perfil.php");
        } else {
            echo "<script> alert('ACESSO NEGADO! ❌') </script>";
            var_dump($user->login());
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= DESCRIPTION ?>">
    <meta name="keywords" content="<?= KEYWORDS ?>">
    <meta name="author" content="<?= AUTHOR?>">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <div id="login">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            background-color: #828282;
            font-family: Arial, Helvetica, sans-serif;
        }
        div{
            background-color: #ac9d4b;
            position: absolute;
            width: 450px;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;

}
input{
    padding: 5px;
    border: none;
    outline: none;
    font-size: 20px;
    background-color:black;
    color: #ac9d4b;
    border-radius: 10px;

}

button, input[type="submit"]{
    background-color:black;
    border: none;
    padding: 15px;
    width: 60%;
    border-radius: 10px;
    color:#ac9d4b;
    font-size: 15px;
}
button:hover{
    background-color: #FFFFFF;
    cursor: pointer;

    

}
        
    </style>
</head>
<body>
    <div>
        
        <h1><img src="./assets/img/Wale_logo-2.png" alt="Imagem" width="400"></h1>
        <br><br>
        <form action="#" method="post">
            <input type="text" name="user" placeholder="Usuário">
            <br><br>
            <input type="password" name="pass" placeholder="Senha">
            <br><br>
            
            <input type="submit" value="Entrar">
            <br><br>
        </form>
        <button>Esqueci Senha</button>
            <br><br>
            <button onclick="window.location.href='<?= VIEW ?>/cadastro.php'">Não possui login?Cadastre-se</button>
    </div>
     <script src="./assets/js/script.js"></script>
</body>
</html>