<?php
#José Lucas e Miguel Machado EI-32
include "DLL.php";
extract($_POST);  

#Criação do usuário comum
if(isset($botao1)){ 
    $consulta = "INSERT INTO `user`(id_user,Nome,Email,Senha,Telefone,CPF,Tipo) VALUES (NULL,'$nome','$mail','$senha','$tel','$cpf ','U')";
    banco("localhost","root","","delweb",$consulta);
    header("Location: ../login.html");
}

#Login
if(isset($botao2)) {
    $consulta = "SELECT * FROM user WHERE Email = '$mail' and Senha = '$senha'";
    $result = banco("localhost","root","","delweb",$consulta);
    $exibe = $result->fetch_assoc();
        if($exibe["Tipo"] == "U") {
            echo "<form action='../contaconfig.php' method='post'> <input type='hidden' name='id' value='".$exibe["id_user"]."'></form>";
            header("Location: ../main.html");
            exit();
        }else{
            echo "<form action='../contaconfig.php' method='post'> <input type='hidden' name='id' value='".$exibe["id_user"]."'></form>";
            header("Location: ../denuncia.php");
            exit();
        }

}

    /*
    echo $exibe['Nome'];
    echo $mail;
    if ($exibe['Tipo'] == 'U') {
        header("Location: ../main.html");
    } 
    else {
        header("Location: ../abacaxi.html");
    }
    exit(); */


#



?>