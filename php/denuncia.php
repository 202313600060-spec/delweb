<?php
include "DLL.php";
extract($_POST);
if(!(isset($b1) or (isset($b2)))) {
    header("Location: ../main.html");
}

if(isset($b1)) {
    if($_FILES['foto']['name'] != NULL){

    $consulta = "INSERT INTO `denuncia`(Id_den,Tipo,URL,Descrição) VALUES (NULL,'$tipo','$url','$descrição')";
    banco("localhost","root","","delweb",$consulta);
    
    /* envio de imagens */
    $result = banco("localhost", "root", "", "delweb", $consulta);
    $linha = $result->fetch_assoc();
    $caminho = "../img/denucia/".$linha["Id_den"].'jpg';
    move_uploaded_file();
    header("Location: denuncia.php");
}
}



?>