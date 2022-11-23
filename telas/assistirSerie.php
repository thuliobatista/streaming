<!-- PHP -->
<?php
  include("../controle/conecta.php");
  session_start();
  $usuario = $_SESSION['NOME'];

  $codSerie = $_GET["cod"];
  $sql =  "SELECT
  s.*, GROUP_CONCAT(a.NOME) AS nomeAtor,
  (
    SELECT
      GROUP_CONCAT(DESCIRCAO)
    FROM
      genero
    WHERE
      CODGENERO IN (s.CODGENERO, s.SUBGENERO)
  ) AS GENERO
  FROM
  series s
  INNER JOIN atuacaoserie ats ON s.CODSERIE = ats.CODSERIE
  INNER JOIN ator a ON a.CODATOR = ats.CODATOR
  WHERE s.CODSERIE = '$codSerie'";

  $querylogar = mysqli_query($db,$sql) or die(mysqli_error($db));
  $camposusuario = mysqli_fetch_array($querylogar);
  if($camposusuario > 0){
    $sinopse = $camposusuario["SINOPSE"];
    $atores  =  $camposusuario["nomeAtor"];
    $genero  =  $camposusuario["GENERO"];
    $ano  =  $camposusuario["ANO"];
    $temporada  =  $camposusuario["GENERO"];
    $titulo  =  $camposusuario["TITULO"];
    $classificacao = $camposusuario["CLASSIFICACAO"];
    $temporada = $camposusuario["TEMPORADAS"];
    $url = $camposusuario["URL"];
    $caminho = $camposusuario["CAMINHO"];  
  }
?>
<!-- Fim PHP -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MultCine</title>
  <link rel="shortcut icon" href="../imagens/favicon.ico" type="../image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilo/principal.css">
  <link rel="stylesheet" href="../estilo/responsivo-multicine.css">
  <link rel="stylesheet" href="../estilo/assistir.css">
  <style type="text/css">
    body{
    background: rgba(0, 0, 0, 0.808) url('../imagens/assistir/aneis_poder.jpg');
    background-size: cover;
    background-blend-mode: darken;
  }
  </style>
  
</head>

<body>
  <!--======================== MENU SUPERIOR ==========================-->
  <header>
    <div><a id="logo" href="">MultCine <img id="logotipo" src="../imagens/logo.png" alt="Logo"></a>
      <img id="logotipo-mobile" src="../imagens/logo.png" alt="Logo">
    </div>
        <a href="multicine.php" class="center">Início</a>
        <a href="filmes.php" class="center">Filmes</a>
        <a href="series.php" class="center">Séries</a>
          <details>
            <summary><img src="../imagens/user.png" alt="usuario"> <p><?php echo(substr(strtoupper($usuario), 0, 7)) ?></p></summary>
              <nav class="menu">
                <a href="#">Conta</a>
                <a href="index.php">Sair</a>
              </nav>
          </details>
  </header>
  <main>
    <section class="conteudo">
      <div class="conteudo-texto">
        <h1></span><?php echo $titulo;?></h1>
        <div class="descricao">
          <p id="dados"><span id="idade"><?php echo $classificacao;?></span> <?php echo $ano;?>&bull;<?php echo $temporada;?> ºTemporadas </p>
          <p><span>Gêneros:</span><?php echo $genero;?></p>
          <p><span>Elenco:</span><?php echo $atores; ?></p>
        </div>
        <div>
          <a class="assistir-btn" href="#"><img src="../imagens/assistir/play.png" alt=""> Assistir</a>
          <a class="trailer-btn" href=<?php echo$url ?>> Trailer</a>
        </div>
        <p id="sinopse"><?php echo $sinopse; ?></p>
      </div>
    </section>
    </section>
  </main>

<!--================================================= RODAPÉ DA PÁGINA ===================================================-->

<footer>
  <h3>Multicine <img id="logotipo" src="../imagens/logo.png" alt=""></h3>
  <p>Um projeto idealizado e desenvolvido por:</p>
  <a href="https://github.com/rubensgabriel">Rubens Gabriel</a>
  <a href="">Roseane Firmino</a>
  <a href="">Vitória Magalhães</a>
  <a href="">Thúlio Batista</a>
  <a href="">Fillipi Vicentini</a>
  <p>Com o auxílio de <a href="https://github.com/Esther-Cardoso">Esther Cardoso</a></p>
  <p>&#169 Multicine. Todos os direitos reservados</p>
</footer>