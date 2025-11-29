<?php
include "php/DLL.php";

session_start();
if($_SESSION["Nome"] == NULL) {
    header("Location: login.html");
}
$id = $_SESSION["id_user"];

extract($_POST);



if(isset($atualizarE)){
    $consulta = "UPDATE `user` SET `Email`='$new' WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
    header("Location: contaconfig.php");
}

if(isset($atualizarS)) {
    $consulta = "UPDATE `user` SET `Senha`='$new' WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
    header("Location: contaconfig.php");
}

if(isset($atualizarT)) {
    $consulta = "UPDATE `user` SET `Telefone`='$new' WHERE id_user = '$id'";
    banco("localhost","root","","delweb",$consulta);
    header("Location: contaconfig.php");
}

?>