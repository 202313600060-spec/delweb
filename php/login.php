<?php
#José Lucas e Miguel Machado EI-32
include "DLL.php";
extract($_POST);  
session_start();

#Criação do usuário comum
if(isset($botao1)){ 
    $consulta = "INSERT INTO `user`(id_user,Nome,Email,Senha,Telefone,CPF,Tipo) VALUES (NULL,'$nome','$mail','$senha','$tel','$cpf ','U')";
    banco("localhost","root","","delweb",$consulta);
    header("Location: ../login.html");
}

#Login
if(isset($botao2)) {
    //$consulta = "SELECT * FROM user WHERE Email = '$mail' and Senha = '$senha'";

    $consulta = "SELECT * FROM user WHERE Email = '$mail'";
    $result = banco("localhost","root","","delweb",$consulta);
    $exibe = $result->fetch_assoc();
        if ($exibe["Senha"] == $senha) {
            if($exibe["Tipo"] == "U") {
                $_SESSION["Nome"] = $exibe["Nome"];
                $_SESSION["id_user"] = $exibe["id_user"];
                $_SESSION["Tipo"] = $exibe["Tipo"];
                //unset($_SESSION["Nome"]);
                header("Location: ../main.php");
                exit();
            }else{
                $_SESSION["Nome"] = $exibe["Nome"];
                $_SESSION["id_user"] = $exibe["id_user"];
                $_SESSION["Tipo"] = $exibe["Tipo"];
                header("Location: ../denuncia.php");
                exit();
            }
        }else {
            echo "<p> Senha Incorreta </p>";
        }

}

?>