<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina 1 - UniStudy</title>
    <link rel="stylesheet" href="styles/stylelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<?php
      require_once "includes/banco.php";
      require_once "includes/funcoes.php";
      require_once "includes/login.php";
      ?>
      

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <br></br>
                <br></br>
                <br></br>
                <img src="imagens/UniStudy.png">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Acesse sua conta agora mesmo!</p>
                <a href="entrar.php"><button id="signin" class="btn btn-primary"> <h3>ENTRAR </h3></button></a>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta!</h2>
                <p class="description description-second" font-size="20%">Preencha seus dados</p>
                <form class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>
                   
                   <button class="btn btn-second"><h3>CADASTRAR</h3></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
