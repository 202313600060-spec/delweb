<!-- José Lucas e Miguel Machado EI-32 -->
 <?php
 session_start();
 if($_SESSION["Nome"] == NULL) {
    header("Location: login.html");
 }

 ?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/style.css'>
    <title>Delweb</title>
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
    <div class='header'>
        <img src='img/logo.png'>
        <?php
        //echo "nome: ".$_SESSION["Nome"];
        ?>
        <div class='htext'>
            <a href='main.php'><h1> DelWeb </h1></a>
        </div>
        <div class='hlist'>
            <ul>
                <?php
                if($_SESSION["Tipo"] == "F") {
                    echo "<li><a href='denuncia.php'>Denúncias</a></li>";
                }
                ?>
                <li><a href='#'>Contato</a></li>
                <li><a href='#'>Status</a></li>
                <li><a href='contaconfig.php'>Conta</a></li>
                <?php
                    /*if($_SESSION["Nome"] == NULL) {
                        echo "<li><a href='login.html'>Login</a></li>";
                    }else{
                        echo "<li><a href='contaconfig.php'>Conta</a></li>";
                    }
                    para caso ainda seja interessante uma denúncia anônima, a página deve ser acessada sem login
                    */
                        
                ?>
            </ul>
        </div>
    </div>
    <div class='main'>
        <div class='form'>
            <p class='formp'>Selecione o tipo de violação</p>
        <!--    <form action="denuncia.php" method="post" enctype="multipart/form-data" class='main_form'> -->
            <form action="denuncia.php" method="post" class='main_form'>
                <div class='radio'>
                    <input type='radio' id='select' value='Violação 1' name='tipo'> <label for='select'> Violação 1 </label>
                    <input type='radio' id='select' value='Violação 2' name='tipo'> <label for='select'> Violação 2 </label>
                    <input type='radio' id='select' value='Violação 3' name='tipo'> <label for='select'> Violação 3 </label>
                    <input type='radio' id='select' value='Violação 4' name='tipo'> <label for='select'> Violação 4 </label>
                    <input type='radio' id='select' value='Violação 5' name='tipo'> <label for='select'> Violação 5 </label>
                    <input type='radio' id='select' value='Violação 6' name='tipo'> <label for='select'> Violação 6 </label>
                    <input type='radio' id='select' value='Violação 7' name='tipo'> <label for='select'> Violação 7 </label>
                    <input type='radio' id='select' value='Violação 8' name='tipo'> <label for='select'> Violação 8 </label><br/>
                </div>
                <div class='text'>
                    <h3> Envio de informações </h3>
                    <p> URL </p>
                    <input type='text' name='url'><br/>
                    <p> Descrição </p>
                    <textarea rows='20' cols='60' name="descrição"> </textarea><br/>
                   <!-- <input type="file" name="foto" required> -->
                    <input type='submit' name='b1' value='Enviar'>
                </div>
            </form>
        </div>
    </div>
    <h1 style='color:rgb(252, 238, 46); text-align: center;' > Ultimas notícias </h1>
    <div class='news'>
        <div class='build'>
            <div class="block1">
                <div class="block1_2">
                    <a href="#fonte1.com"><img src="img/news1.png"></a>
                </div>
                <p> fonte_da_notícia.com </p>
                <a href="#fonte3.com"><h2> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </h2></a>
            </div>
            <div class="block2">
                <div class="block2_2">
                    <a href="#fonte2.com"><img src="img/news2.png"></a>
                </div>
                <p> fonte_da_notícia.com </p>
                <a href="#fonte3.com"><h2> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </h2></a>
            </div>
            <div class="block3">
                <div class="block3_2">
                    <a href="#fonte3.com"><img src="img/news3.png"></a>
                </div>
                <p> fonte_da_notícia.com </p>
                <a href="#fonte3.com"><h2> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </h2></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="ftext">
            <h3> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </h3>
        </div>
        <div class="flogo">
            <img src="img/logo.png">
        </div>
    </div>

</body>
</html>