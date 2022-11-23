<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilo/login.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script language="javascript" type="text/javascript" src="js/funcoes.js"></script>

</head>

<body>
    <div class="container-login">
        <form action="../controle/incluir.php" class="form" method="get">
            <h1 class="title">Cadastre-se</h1>
            <div class="nome">
                <input type="text" name="nome" placeholder="Seu nome" required>
            </div>
            <div class="email">
                <input type="email" name="email" placeholder="Seu email" required>
            </div>
            <div class="senha">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <div class="confirmar-senha">
                <input type="password" id="confirmar-senha" placeholder="Confirmar senha" required>
            </div>

            <button type="submit" class="btn">Cadastrar</button>

            <div class="lembrar">
                <!-- <a href="multicine.html" class="link">Página inicial</a> -->
                <a href="../index.php" class="link">Fazer login</a>
            </div>
        </form>
    </div>
</body>
<?php if(isset($_GET['alerta'])){echo "<script language='javascript' >alerta('Atenção!', 'Email já Cadastrado', 'erro');</script>";}?>

</html>