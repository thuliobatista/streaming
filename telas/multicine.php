<?php 
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
</head>

<body>
  <!--======================== MENU SUPERIOR ==========================-->
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

  <!--================================================= TÍTULOS EM DESTAQUE ===================================================-->

  <section id="area-principal" class="container-fluid ">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner poster">
        <div class="carousel-item active">
          <a href="../telas/assistirFilme.php?cod=38"><img src="../imagens/trem bala.webp" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href="../telas/assistirFilme.php?cod=39"><img src="../imagens/telefone-preto.webp" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href="../telas/assistirSerie.php?cod=6"><img src="../imagens/aneis poder.webp" class="d-block w-100" alt="..."></a>
        </div>
      </div>

      <button class="carousel-control-prev" id="seta-esquerda-principal" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" id="seta-direita-principal" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!--=============================================== CONTEÚDOS POR SEÇÃO =================================================-->

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Filmes de Drama</h2>
    <div id="filmes-drama" class="carousel slide">
      <div class="carousel-inner section-filmes">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=1"><img src="../imagens/Filmes/drama/bohemian.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=2"><img src="../imagens/Filmes/drama/books.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=3"><img src="../imagens/Filmes/drama/cisne.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=4"><img src="../imagens/Filmes/drama/click.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=6"><img src="../imagens/Filmes/drama/diabo dia.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=7"><img src="../imagens/Filmes/drama/diabo prada.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=8"><img src="../imagens/Filmes/drama/duelo.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=9"><img src="../imagens/Filmes/drama/expresso oriente.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=10"><img src="../imagens/Filmes/drama/fragementado.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=11"><img src="../imagens/Filmes/drama/inivisivel.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=12"><img src="../imagens/Filmes/drama/liberdade.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=13"><img src="../imagens/Filmes/drama/morte nilo.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#filmes-drama" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#filmes-drama" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Clássicos da Marvel</h2>
    <div id="filmes-marvel" class="carousel slide">
      <div class="carousel-inner section-filmes">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=26"><img src="../imagens/Filmes/marvel/ant man.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=27"><img src="../imagens/Filmes/marvel/blackpanther.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=28"><img src="../imagens/Filmes/marvel/civil war.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=29"><img src="../imagens/Filmes/marvel/doctorstrange.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=30"><img src="../imagens/Filmes/marvel/endgame.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=31"><img src="../imagens/Filmes/marvel/eternals.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=32"><img src="../imagens/Filmes/marvel/guardians2.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=33"><img src="../imagens/Filmes/marvel/infinity war.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=34"><img src="../imagens/Filmes/marvel/marvel.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=35"><img src="../imagens/Filmes/marvel/ragnarok.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=36"><img src="../imagens/Filmes/marvel/shang-chi.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=37"><img src="../imagens/Filmes/marvel/spider man.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#filmes-marvel" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#filmes-marvel" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Principais Destaques</h2>
    <div id="series-fantasia" class="carousel slide">
      <div class="carousel-inner section-filmes" id="pricipais-destaque-responsivo">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=4"><img src="../imagens/Series/destaque_principal/hdm.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=6"><img src="../imagens/Series/destaque_principal/rings power.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=8"><img src="../imagens/Series/destaque_principal/sandman.webp" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=5"><img src="../imagens/Series/destaque_principal/house of dragon.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=3"><img src="../imagens/Series/destaque_principal/got.jpeg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=9"><img src="../imagens/Series/destaque_principal/shadow bone.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=11"><img src="../imagens/Series/destaque_principal/the witcher.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=7"><img src="../imagens/Series/destaque_principal/roda tempo.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=12"><img src="../imagens/Series/destaque_principal/umbrella.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=1"><img src="../imagens/Series/destaque_principal/arcane.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=2"><img src="../imagens/Series/destaque_principal/desventuras.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=10"><img src="../imagens/Series/destaque_principal/stranger things.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#series-fantasia" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#series-fantasia" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Filmes de Terror</h2>
    <div id="filmes-terror" class="carousel slide">
      <div class="carousel-inner section-filmes">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=14"><img src="../imagens/Filmes/terror/alien.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=15"><img src="../imagens/Filmes/terror/boneco_mal.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=16"><img src="../imagens/Filmes/terror/bruxa.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=17"><img src="../imagens/Filmes/terror/carrie.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=18"><img src="../imagens/Filmes/terror/casa_terror.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=19"><img src="../imagens/Filmes/terror/chucky.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=20"><img src="../imagens/Filmes/terror/corra.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=21"><img src="../imagens/Filmes/terror/doutor sono.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirFilme.php?cod=22"><img src="../imagens/Filmes/terror/grito.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=23"><img src="../imagens/Filmes/terror/lugar_silencioso.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=24"><img src="../imagens/Filmes/terror/ouija.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirFilme.php?cod=25"><img src="../imagens/Filmes/terror/viagem_inferno.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#filmes-terror" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#filmes-terror" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Séries de Comédia</h2>
    <div id="series-comedia" class="carousel slide">
      <div class="carousel-inner section-filmes">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=36"><img src="../imagens/Series/comedia/b99.webp" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=37"><img src="../imagens/Series/comedia/big bang.webp" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=38"><img src="../imagens/Series/comedia/fleabag.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=39"><img src="../imagens/Series/comedia/friends.webp" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=40"><img src="../imagens/Series/comedia/good  place.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=41"><img src="../imagens/Series/comedia/himym.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=42"><img src="../imagens/Series/comedia/modern family.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=43"><img src="../imagens/Series/comedia/odtaat.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=44"><img src="../imagens/Series/comedia/patroa_crianças.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=45"><img src="../imagens/Series/comedia/she hulk.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=46"><img src="../imagens/Series/comedia/sra masel.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=47"><img src="../imagens/Series/comedia/the office.jfif" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#series-comedia" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#series-comedia" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Séries de Romance</h2>
    <div id="series-romance" class="carousel slide">
      <div class="carousel-inner section-filmes">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=24"><img src="../imagens/Series/romance/bridgerton.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=25"><img src="../imagens/Series/romance/carnival_row.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=26"><img src="../imagens/Series/romance/greys_anatomy.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=27"><img src="../imagens/Series/romance/heartstopper.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=28"><img src="../imagens/Series/romance/jane_virgin.webp" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=29"><img src="../imagens/Series/romance/love_victor.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=30"><img src="../imagens/Series/romance/magnolias.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=31"><img src="../imagens/Series/romance/modern_love.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=32"><img src="../imagens/Series/romance/outlander.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=33"><img src="../imagens/Series/romance/this_is_us.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=34"><img src="../imagens/Series/romance/verao_minha_vida.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=35"><img src="../imagens/Series/romance/virgin_river.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#series-romance" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#series-romance" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-fluid secao_filmes">
    <h2 class="titulo">Séries de Drama</h2>
    <div id="series-drama" class="carousel slide">
      <div class="carousel-inner section-filmes">
        <div class="carousel-item active" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=47"><img src="../imagens/Series/drama/911.jfif"  class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=13"><img src="../imagens/Series/drama/911lonestar.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=14"><img src="../imagens/Series/drama/bones.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=15"><img src="../imagens/Series/drama/call_saul.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=16"><img src="../imagens/Series/drama/lupin.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=17"><img src="../imagens/Series/drama/pearson.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=18"><img src="../imagens/Series/drama/private_practice.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=19"><img src="../imagens/Series/drama/suits.webp" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
        <div class="carousel-item" data-bs-interval="100000">
          <a href="../telas/assistirSerie.php?cod=20"><img src="../imagens/Series/drama/the_crown.jpg" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=21"><img src="../imagens/Series/drama/urso.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=22"><img src="../imagens/Series/drama/wandavision.jfif" class="d-md-inline-flex w-30" alt="..."></a>
          <a href="../telas/assistirSerie.php?cod=23"><img src="../imagens/Series/drama/you.jpg" class="d-md-inline-flex w-30" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#series-drama" data-bs-slide="prev" id="seta-esquerda">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#series-drama" data-bs-slide="next" id="seta-direita">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


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

  <!--================================================= SCRIPT UTILIZADO ===================================================-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>