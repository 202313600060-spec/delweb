<?php
include "php/DLL.php";
extract($_POST);


session_start();
if($_SESSION["Nome"] == NULL) {
    header("Location: login.html");
}
if($_SESSION["Tipo"] != "F") {
    header("Location: negado.html");
}



if(isset($b1)) {

    $consulta = "INSERT INTO `denuncia`(Id_den,Tipo,URL,Descrição) VALUES (NULL,'$tipo','$url','$descrição')";
    banco("localhost","root","","delweb",$consulta);
    header("Location: main.php");
    // envio de imagens
    $consulta = "SELECT * FROM denuncia ORDER BY 'Id_den' DESC LIMIT 1";
    $result = banco("localhost", "root", "", "delweb", $consulta);
    $linha = $result->fetch_assoc();
    $caminho = "../img/denucia/".$linha["Id_den"].'.jpg';
    move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
    exit();
}

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/style.css'>
    <title>Denuncia</title>
    <link rel='icon' href='img/favicon.ico'>
</head>
<body>
    <div class='header'>
        <img src='img/logo.png'>
        <div class='htext'>
            <a href='main.php'><h1> DelWeb </h1></a>
        </div>
        <div class='hlist'>
            <ul>
                <li><a href='#'>Contato</a></li>
                <li><a href='#'>Status</a></li>
                <li><a href='contaconfig.php'>Conta</a></li>
            </ul>
        </div>
    </div>
    <div class='main2'>
    <div class='denuncias_l'>";
$consulta = "SELECT * FROM denuncia";
$result = banco("localhost","root","","delweb",$consulta);
    while($exibe = $result->fetch_assoc()){
        echo "<div class='denuncias'>
        <h1> Report ".$exibe["Id_den"]."</h1>
        <h2>".$exibe["Tipo"]."</h2>
        <h3>".$exibe["URL"]."</h3>
        <p>".$exibe["Descrição"]."</p>
        <div class='denuncias_img'>
            <a href='img/news1.png.jpg'><img src='img/news1.png'></a>
        </div>
        </div>
        ";
    }
    /*<a href='img/".$exibe["Id_den"].".jpg'><img src='img/".$exibe["Id_den"].".jpg'></a>*/
    /*<input type='submit' name='b3' value='Aprovar' class='button_den'>*/
    /*<input type='submit' name='b2' value='Excluir' class='button_den'>*/


            
echo "</div><form action='denuncia.php' method='post' class='fdelete'>
            <p> Escolha o valor da denuncia para selecionar uma exclusão </p>
            <input type='number' name='id'>
            <input type='submit' name='b2' value='Excluir'>
        </form>";

if(isset($b2)) {
    $consulta = "DELETE FROM `denuncia` WHERE Id_den = '$id'";
    banco("localhost","root","","delweb",$consulta);
    header("Location: denuncia.php");
}

echo "
    </div>
    
    <div class='footer'>
        <div class='ftext'>
            <h3> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </h3>
        </div>
        <div class='flogo'>
            <img src='img/logo.png'>
        </div>
    </div>";
    echo "nome: ".$_SESSION["Nome"]."

</body>
</html>";

/*
if(isset($b1)) {
    if($_FILES['foto']['name'] != NULL){

    $consulta = "INSERT INTO `denuncia`(Id_den,Tipo,URL,Descrição) VALUES (NULL,'$tipo','$url','$descrição')";
    banco("localhost","root","","delweb",$consulta);
    
    /* envio de imagens
    $result = banco("localhost", "root", "", "delweb", $consulta);
    $linha = $result->fetch_assoc();
    $caminho = "../img/denucia/".$linha["Id_den"].'jpg';
    move_uploaded_file();
    header("Location: denuncia.php");
}
}
*/


?>