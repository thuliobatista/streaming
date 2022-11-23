<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./estilo/login.css">
    <link rel="shortcut icon" href="imagens/Hopstarter-Button-Button-Play.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script language="javascript" type="text/javascript" src="js/funcoes.js"></script>

</head>

<body>
    <div class="container-login">
        <form action="controle/logar.php" class="form" method="get">
            <h1 class="title">Entrar</h1>
            <div class="email">
                <input type="email" name="email" placeholder="Seu email" required>
            </div>
            <div class="senha">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>

            <button type="submit" class="btn">Entrar</button>

            <div class="lembrar">
                <div id="check">
                    <input type="checkbox" name="lembrarDeMim" id="lembrar">
                    <label for="lembrar">Lembre-se de mim</label>
                </div>

                <!-- <a href="multicine.html" class="link">Página inicial</a> -->
            </div>

            <p>Novo por aqui ?</p>
            <a href="./telas/cadastro.php" class="cadastro-btn">Cadastre-se</a>


        </form>
    </div>
</body>
<?php
    if(isset($_GET['alerta'])){
        $alerta = $_GET['alerta']; 
        if($alerta == 1){echo "<script language='javascript' >alerta('Atenção!', 'Email não Cadastrado', 'erro');</script>";
        }elseif($alerta == 0){echo "<script language='javascript' >alerta('Sucesso!', 'Cliente Cadastrado com sucesso', 'sucesso');</script>";}
    }
?>
</html>