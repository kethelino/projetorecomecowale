<?php

//importando cabeçalho com arquivo de constantes
include "/xampp/htdocs/projeto_recomeco_wale/src/controller/header.php";

//Importação de arquivos
include MODEL . "/user.php";

//Inicializar a sessão neste arquivo
session_start();

//recebendo os dados do formulário

if (isset($_GET["photo"])) {
    $photo = $_GET["photo"];
    $photo = null;
}

if (isset($_GET["user"])) {
    $user = $_GET["user"];
    $user = null;
}
if (isset($_GET["birth"])) {
    $birth = $_GET["birth"];
    $birth = null;
}
if (isset($_GET["first-name"])) {
    $firstName = $_GET["first-name"];
    $firstName = null;
}
if (isset($_GET["last-name"])) {
    $lastName = $_GET["last-name"];
    $lastName = null;
}
if (isset($_GET["desc"])) {
    $desc = $_GET["desc"];
    $desc = null;
}
if (isset($_GET["cep"])) {
    $cep = $_GET["cep"];
    $cep = null;
}
if (isset($_GET["address"])) {
    $address = $_GET["address"];
    $address = null;
}
if (isset($_GET["number"])) {
    $number = $_GET["number"];
    $number = null;
}
if (isset($_GET["complement"])) {
    $complement = $_GET["complement"];
    $complement = null;
}
if (isset($_GET["neighborhood"])) {
    $neighborhood = $_GET["neighborhood"];
    $neighborhood = null;
}
if (isset($_GET["city"])) {
    $city = $_GET["city"];
    $city = null;
}
if (isset($_GET["state"])) {
    $state = $_GET["state"];
    $state = null;
}
if (isset($_GET["sex"])) {
    $sex = $_GET["sex"];
    $sex = null;
}
if (isset($_GET["phone"])) {
    $phone = $_GET["phone"];
    $phone = null;
}
if (isset($_GET["email"])) {
    $email = $_GET["email"];
    $email = null;
}
if (isset($_GET["notify"])) {
    $notify = $_GET["notify"];
    $notify = null;
}
if (isset($_GET["actual-pass"])) {
    $actualPass = $_GET["actual-pass"];
    $actualPass = null;
}
if (isset($_GET["new-pass"])) {
    $newPass = $_GET["new-pass"];
    $newPass = null;

}

?>

    
    <form action="#" method="get">
        <!-- Tabela para organizar o conteúdo -->
        <table>
            <!-- <tr> representa uma linha da tabela -->
                <tr>
                    <!-- <td> representa uma célula da linha (coluna) -->
                        <td>
                            <h1>Perfil</h1>
                        </td>
                        <td width="100px"></td>
                        <td>
                            <img src="<?= $_SESSION["user"]->getPhoto() ?>" width="100" alt="Imagem do perfil">
                        <td>
                </tr>
                <!-- Linha para subtítulo -->
                <tr>
                    <td colspan=5>
                        <h3>Dados pessoais</h3>
                        <hr>
                    </td>
                </tr>
                <!-- ///////////////////// -->
                    <label for="user">Nome de usuário</label>
                    <input type="text" name="user" id="user">
                    <label for="birth">Data de nascimento</label>
                    <input type="date" name="birth" id="birth">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="first-name">Nome</label>
                    <br>
                    <input type="text" name="first-name" id="first-name">
                </td>
                <td>
                    <label for="last-name">Sobrenome</label>
                    <br>
                    <input type="text" name="last-name" id="last-name">
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan=5>
                    <label for="desc">Descrição (bio)</label>
                    <br>
                    <textarea name="desc" id="desc" cols="100" rows="3" placeholder="Fale sobre você"
                        maxlength="255"></textarea>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr></tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="address">Endereço</label>
                    <br>
                    <input type="" name="address" id="address">
                </td>
                <td>
                    <label for="number">Número</label>
                    <br>
                    <input type="number" name="number" id="number">
                </td>
                <td>
                    <label for="cep">Cep</label>
                    <br>
                    <input type="number" name="cep" id="cep">
                </td>
            <tr></tr>
            <td>
                <label for="cpf">cpf</label>
                <br>
                <input type="number" name="cpf" id="cpf">
            </td>
            <td>
                <label for="cnh">cnh</label>
                <br>
                <input type="number" name="cnh" id="cnh">
            </td>
            <td>
                <label for="user>Nome de usuário</label>
                                <label for=" birth">Data válidade Cnh</label>
                <input type="date" name="birth" id="birth">
            </td>
            <td></td>
            <td></td>
</tr>
<tr>
    <td>
        <label for="complement">Complemento</label>
        <br>
        <input type="text" name="complement" id="complement">
    </td>
    <td>
        <label for="neighborhood">Bairro</label>
        <br>
        <input type="text" name="neighborhood" id="neighborhood">
    </td>
    <td>
        <label for="city">Cidade</label>
        <br>
        <input type="text" name="city" id="city">
    </td>
    <td>
        <label for="state">Estado</label>
        <br>

        <select id="state" name="state">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>
    </td>
    <td></td>
</tr>
<!-- Subtítulo -->
<tr>
    <td colspan=5>
        <h3>Sexo</h3>
        <hr>
    </td>
</tr>
<!-- ///////// -->
<tr>
    <td>
        <input type="radio" name="sex" id="male" value="male">
        <label for="male">Masculino</label>
    </td>
    <td>
        <input type="radio" name="sex" id="female" value="female">
        <label for="female">Feminino</label>
    </td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<!-- Subtítulo -->
<tr>
    <td colspan=5>
        <h3>Contatos</h3>
        <hr>
    </td>
</tr>
<!-- ///////// -->
<tr>
    <td>
        <label for="phone">Telefone</label>
        <br>
        <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{9}">
    </td>
    <td>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email">
    </td>
    <td colspan=2>
        <input type="checkbox" name="notify" id="notify" value="yes">
        <label for="notify">Desejo receber notificações</label>
    </td>
    <td></td>
</tr>
<!-- Linha para subtítulo -->
<tr>
    <td colspan=5>
        <h3>Senha</h3>
        <hr>
    </td>
</tr>
<!-- ///////////////////// -->
<tr>
    <td>
        <label for="actual-pass">Senha atual</label>
        <br>
        <input type="password" name="actual-pass" id="actual-pass">
    </td>
    <td>
        <label for="new-pass">Nova senha</label>
        <br>
        <input type="password" name="new-pass" id="new-pass">
    </td>
    <td>
        <label for="confirm-pass">Cofirmação de senha</label>
        <br>
        <input type="password" name="confirm-pass" id="confirm-pass">
    </td>
    <td></td>
    <td></td>
</tr>
<!-- Botões do formulário -->
<tr>
    <td colspan=5>
        <br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </td>
</tr>
<!-- ///////////////////// -->
</table>
</form>

</body>

</html>