<?php
include "php/DLL.php";
extract($_POST);

session_start();
if($_SESSION["Nome"] == NULL) {
    header("Location: login.html");
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
                <li><a href='main.php'>Início</a></li>
                <li><a href='contato.html'>Contato</a></li>
                <li><a href='contaconfig.php'>Conta</a></li>
            </ul>
        </div>
    </div>
    <div class='main2'>";
$consulta = "SELECT * FROM denuncia";
$result = banco("localhost","root","","delweb",$consulta);
    while($exibe = $result->fetch_assoc()){
        if($exibe["Stat"] == "V") {
            echo "<div class='denuncias'>
            <h3>".$exibe["URL"]."</h3>
            <h2>".$exibe["Tipo"]."</h2>
            <p>".$exibe["Descrição"]."</p>
            <div class='denuncias_img'>
                <a href='img/denuncia/".$exibe["Id_den"].".jpg'><img src='img/denuncia/".$exibe["Id_den"].".jpg'></a>
            </div>
            </div>";
        }
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
?>