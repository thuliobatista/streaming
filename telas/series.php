<?php 
  include("../controle/conecta.php");
  session_start();
  $usuario = $_SESSION['NOME'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MultCine</title>
  <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilo/principal.css">
  <link rel="stylesheet" href="../estilo/responsivo-multicine.css">
  <link rel="stylesheet" href="../estilo/series.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <!--======================= MENU SUPERIOR ==========================-->
  <header>
    <div><a id="logo" href="">MultCine <img id="logotipo" src="../imagens/logo.png" alt="Logo"></a>
      <img id="logotipo-mobile" src="../imagens/logo.png" alt="Logo">
    </div>
        <a href="../telas/multicine.php" class="center">Início</a>
        <a href="../telas/filmes.php" class="center">Filmes</a>
        <a href="../telas/series.php" class="center">Séries</a>
          <details>
            <summary><img src="../imagens/user.png" alt="usuario"> <p><?php echo(substr(strtoupper($usuario), 0, 7)) ?></p></summary>
              <nav class="menu">
                <a href="#">Conta</a>
                <a href="../index.php">Sair</a>
              </nav>
          </details>
  </header>

  <div class="container">
      <div class="search-box">
        <form action="series.php" method="get" class="search-box">
          <i class="bx bx-search"></i>
          <input type="text"  name = "buscar" placeholder="Pesquise a serie">
        </form>
      </div>

    <div class="imagens">
        <?php 
              if(isset($_GET["buscar"])){
                $str = $_GET["buscar"];
              } 
              else{
                $str ='';
              }
              $sql =  "SELECT * from series  where TITULO like '$str%'";
              $querySerie = mysqli_query($db,$sql) or die(mysqli_error($db));
              while($campoSerie = mysqli_fetch_array($querySerie)){

            ?>
            <div class="imagem-box" data-name="<?php echo $campoSerie["TITULO"]?>">
              <a href="../telas/assistirSerie.php?cod=<?php echo $campoSerie["CODSERIE"]?>"><img src="<?php echo $campoSerie["CAMINHO"]?>" alt=""></a>
            </div>
            <?php 
              }
            ?> 
    </div>
  </div>
    
    <!--================================================= RODAPÉ DA PÁGINA ===================================================-->

  <footer>
    <h3>Multicine <img id="logotipo" src="imagens/logo.png" alt=""></h3>
    <p>Um projeto idealizado e desenvolvido por:</p>
    <a href="https://github.com/rubensgabriel">Rubens Gabriel</a>
    <a href="">Roseane Firmino</a>
    <a href="">Vitória Magalhães</a>
    <a href="">Thúlio Batista</a>
    <a href="">Fillipi Vicentini</a>
    <p>Com o auxílio de <a href="https://github.com/Esther-Cardoso">Esther Cardoso</a></p>
    <p>&#169 Multicine. Todos os direitos reservados</p>
  </footer>
  <script src="js/script.js"></script>
</body>
</html> 