<? include_once("extranet/autoload.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?></style>
</head>

<body>

    <?php include("topo.php"); ?>
    <?php include("banner_lista.php"); ?>

  <div class="clear"></div>
  <section id="conteudo" class="empreendimentos-inicial mt-5">
    <img src="img/elemento.png" class="elemento" alt="mercado moderno e sustentável">
    <img src="img/elemento1.png" class="elemento1" alt="mercado moderno e sustentável">
    <img src="img/elemento2.png" class="elemento2" alt="mercado moderno e sustentável">
    <div class="container">
      <h2 class="title text-center mb-5 mt-5"><span> mercado moderno</span> e sustentável</h2>
      <div class="clear"></div>
      <div class="mt-4">
        <?php
          $direita = 0;
          $clear = 0;
          $criteria = new CDbCriteria();
          $criteria->order = 'ordem asc';
          $criteria->addCondition("ativo = 1");
          $criteria->addCondition("destaque = 1");
          $empreendimentos = Empreendimento::model()->findAll($criteria);
          foreach($empreendimentos as $empreendimento) {
            $direita++;
            $clear++;
            if ($direita%2==0){
              $alinhamento = "right";
            }
            else{
              $alinhamento = "";
            }
        ?>
          <div class="list <?=$alinhamento?>">
            <a href="empreendimento/<?=$empreendimento->idempreendimento?>/<?=Util::removerAcentos($empreendimento->titulo)?>"><img src="extranet/uploads/Empreendimento/<?=$empreendimento->capa?>" alt="<?=$empreendimento->titulo?>"></a>
            <div class="infos">
              <h3><?=$empreendimento->titulo ?></h3>
              <p><?=$empreendimento->empCategoria?></p>
              <div class="espacos">
                <span><img src="img/cama.svg" alt="Domitorios"> <br><?=$empreendimento->dormitorio?></span>
                <span>|</span>
                <span><img src="img/home.svg" alt="Metragem"> <br><?=$empreendimento->metragem?></span>
                <span> |</span>
                <span><img src="img/carro.svg" alt="Garagem"> <br><?=$empreendimento->garagem?></span>
              </div>
              <a href="empreendimento/<?=$empreendimento->idempreendimento?>/<?=Util::removerAcentos($empreendimento->titulo)?>" class="bt">Saiba mais</a>
            </div>
          </div>
        <?php
          if ($clear%2==0){
        ?>
          <div class="clear"></div>
        <?
            }
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
      <h2>Plantas inteligentes <br> e localizaçőes em <br> áreas nobres</h2>
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
          <iframe width="100%" height="380" src="https://www.youtube.com/embed/IuWRAj1IYkY" title="Pax Empreendimentos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
