<?php
//importando cabeçalho com arquivo de constantes
include "/xampp/htdocs/projeto_recomeco_wale/src/controller/header.php";

//Importação de arquivos
include MODEL."/user.php";



?>


    <div id="login">
        <h1>Cadastro</h1>
        <form action="#" method="post">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="login" placeholder="Usuário*">
                <br><br>
                <input type="text" name="first-name" id="first-name" class="login" placeholder="Nome*">
                <br><br>
                <input type="text" name="last-name" id="last-name" class="login" placeholder="SobreNome*">
                <br><br>
                <input type="password" name="pass" id="pass" class="login" placeholder="Senha*">
                <br><br>
                <span>
                    * Campos obrigatórios
                </span>
            </div>
            <br><hr><br>
            <input type="submit" value="Cadastrar">
            <br>
        </form>
        <a href="<?=ROOT?>">Voltar para o login</a>
    </div>

    <script src="<?=ASSETS?>/js/script.js"></script>
</body>
</html>