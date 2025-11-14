<?php
extract($_POST);
include "php/DLL.php";

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/style.css'>
    <title>Denuncia</title>
</head>
<body>
    <div class='header'>
        <img src='img/logo.png'>
        <div class='htext'>
            <h1> DelWeb </h1>
        </div>
        <div class='hlist'>
            <ul>
                <li><a href='#'>Contato</a></li>
                <li><a href='#'>Status</a></li>
                <li><a href='contaconfig.html'>Conta</a></li>
            </ul>
        </div>
    </div>
    <div class='dados'>
    <h1> Dados da conta </h1>";
if(isset($id)) {
    $consulta = "SELECT * FROM user WHERE id_user = '$id'";
    $result = banco("localhost","root","","delweb",$consulta);
    $exibe = $result->fetch_assoc();

echo"   <form action='contaconfig.php' method='post'>
        <h3> Nome: 
            <p>".$exibe["Nome"]."</p> 
        </h3>
        <h3> CPF 
            <p>".$exibe["CPF"]."</p>
        </h3>
        <h3> Email: 
            <p>".$exibe["Email"]."</p>
            <input type='submit' name='b4' class='alterar' value='Alterar'>
        </h3>
        
        <h3> Senha 
            <p>".$exibe["Senha"]."</p>
            <input type='submit' name='b5' class='alterar' value='Alterar'>
        </h3>
        
        <h3>Telefone 
            <p>".$exibe["Telefone"]."</p>
            <input type='submit' name='b6' class='alterar' value='Alterar'>
        </h3>
        </form>";
}

if(isset($b4)) {
    echo "<form action='contaconfig.php' method='post'>
        <h3> Novo Email: </h3>
        <input type='email' name='new'>
    </form>";
    $consulta = "UPDATE UPDATE `user` SET `Email`='$new' WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
}

if(isset($b5)) {
    echo "<form action='contaconfig.php' method='post'>
        <h3> Nova Senha: </h3>
        <input type='password' name='new'>
    </form>";
    $consulta = "UPDATE UPDATE `user` SET `Senha`='$new' WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
}

if(isset($b6)) {
    echo "<form action='contaconfig.php' method='post'>
        <h3> Novo Telefone: </h3>
        <input type='text' name='new'>
    </form>";
    $consulta = "UPDATE UPDATE `user` SET `Telefone`='$new' WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
}
echo "<form action='contaconfig.php' method='post'> 
        <input type='submit' name='excluir' class='conta_ex' value='Excluir conta'>
</form>
</div>";

if(isset($excluir)) {
    $consulta = "DELETE FROM user WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
    echo " Conta deletada com sucesso ";
}

?>