<?
include_once("extranet/autoload.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?></style>
</head>

<body>
  <header>
    <div id="topo"><?php include("topo.php"); ?></div>
    <?php include("banner_lista.php"); ?>
  </header>
  <div class="clear"></div>
  <section id="conteudo" class="empreendimentos-inicial mt-5">
    <img src="img/elemento.png" class="elemento" alt="mercado moderno e sustentável">
    <img src="img/elemento1.png" class="elemento1" alt="mercado moderno e sustentável">
    <img src="img/elemento2.png" class="elemento2" alt="mercado moderno e sustentável">
    <div class="container">
      <h2 class="title text-center mb-5 mt-5"><span> mercado moderno</span> e sustentável</h2>
      <div class="clear"></div>
      <div class="">
        <?php
          $direita = 0;
          $clear = 0;
          $criteria = new CDbCriteria();
          $criteria->order = 'idempreendimento desc';
          $criteria->addCondition("ativo = 1");
          $empreendimentos = Empreendimento::model()->findAll($criteria);
          foreach($empreendimentos as $empreendimento) {
            $direita++;
            $clear++;
        ?>
          <div class="list right">
            <a href="empreendimento"><img src="img/darci.png" alt="Darci Luiz "></a>
            <div class="infos">
              <h3><?=$empreendimento->titulo?></h3>
              <p><?=$empreendimento->empCategoria?></p>
              <div class="espacos">
                <span><img src="img/cama.svg" alt="Suítes"> <br><?=$empreendimento->suite?></span>
                <span>|</span>
                <span><img src="img/home.svg" alt="Metros"> <br>72 a 84m²</span>
                <span> |</span>
                <span><img src="img/carro.svg" alt="Vagas"> <br>1 vaga</span>
              </div>
              <a href="empreendimento" class="bt">
                saiba mais
              </a>
            </div>
          </div>
        <?php
         }
        ?>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="banner-contact mt-5 mb-3">
    <div class="container">
      <h2>
        Nós Ajudamos <br>
        você a encontrar <br>
        sua paz nas alturas
      </h2>
      <a href="contato" class="btn-primary btn-lg mt-4">Fala conosco</a>
    </div>
  </section>
  <div class="clear"></div>
  <section>
    <div class="container mt-5">
      <h2 class="title text-center">COnheça a pax</h2>
    </div>
    <div class="bg-conheca">
      <img src="img/elemento-contato.png" class="elemento" alt="COnheça a pax">
      <div class="container">
        <div class="colunas col-14 off-3">
          <iframe width="100%" height="380" src="https://www.youtube.com/embed/pAgnJDJN4VA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </section>
  <div class="clear"></div>

  <?php include("rodape.php"); ?>
    <div class="clear"></div>
  <?php include("scripts.php"); ?>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.slick.min.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.banner').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: false,
        responsive: [{
          breakpoint: 980,
          settings: {
            dots: true,
            arrows: false
          },
        }, ]
      });
    });
  </script>
</body>

</html>
