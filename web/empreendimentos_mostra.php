<?
include_once("extranet/autoload.php");
$empreendimento = Empreendimento::model()->findByPk($_GET['empreendimento'],array('condition' => "ativo = '1'")); 
if(!is_object($empreendimento)){
	echo "Página inexistente!"; exit; 
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=($empreendimento->titulo)?> - PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/lightbox.min.css');?></style>
</head>
<body>
  <header>
    <div id="topo"><?php include("topo.php"); ?></div>
  </header>
  <div class="clear"></div>
  <section class="banner-interno" style="background-image: url(extranet/uploads/Empreendimento/<?=($empreendimento->banner)?>)">
    <div class="container">
      <h1>
        <a href="#">Home | Empreendimentos | <strong><?=($empreendimento->titulo)?></strong></a>
        <strong><?=($empreendimento->slogan)?></strong>
      </h1>
    </div>
  </section>
  <div class="clear"></div>
  <section class="pag-empreendimento">
    <img src="img/empreendimento-efeito.png" class="efeito" alt="<?=($empreendimento->titulo)?>">
    <img src="img/empreendimento-efeito1.png" class="efeito1" alt="<?=($empreendimento->titulo)?>">
    <div class="container">
      <div class="text-center">
        <h2 class="title-bord-bottom mt-4 mb-2"><strong><?=($empreendimento->titulo)?></strong></h2>
        <div class="colunas col-14 off-4"><div class="texto"><strong><?=($empreendimento->chamada)?></strong></div></div>
        <div class="clear"></div>
        <div class="colunas col-18 off-1">
          <div id="gallery" class="mt-4 mb-4">
      			<div><a href="img/haus.png" data-lightbox="image-1" data-title="<?=($empreendimento->titulo)?>"><img alt="<?=($empreendimento->titulo)?>" src="extranet/uploads/Empreendimento/<?=($empreendimento->imagem)?>" class="img-responsive"><span><?=($empreendimento->titulo)?></span></a></div>
            <?
              $fotos = $empreendimento->fotos->getGallery()->galleryPhotos; 
              if(is_array($fotos)){
                $total = count($fotos);
                foreach($fotos as $i => $foto){
            ?>
              <div><a href="img/haus.png" data-lightbox="image-1" data-title="SUÍTE CASAL"><img alt="Quarto" src="img/quarto.png" class="img-responsive"><span>SUÍTE CASAL</span></a></div>
            <?
                }
              }
            ?>
      		</div>
        </div>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <img src="img/linha.png" class="img-responsive center-block" alt="Linha">
  <section class="visite">
    <img src="img/empreendimento-efeito2.png" class="efeito" alt="Ello haus">
    <img src="img/empreendimento-efeito3.png" class="efeito1" alt="Ello haus">
    <div class="container">
      <div class="mt-4 mb-4">
        <img src="img/plantas.svg" class="img-responsive center-block" alt="plantas">
      </div>
      <div class="colunas col-16 off-2 mb-3">
        <div class="slide-plantas">
          <div>
            <a href="img/planta.png" data-lightbox="image-1" data-title="Planta haus"><img src="img/planta.png" class="img-responsive center-block" alt="Planta"></a>
            <h3> <strong>Planta Haus</strong> <small>72m² | 2 suíte + quarto</small></h3>
          </div>
          <div>
            <a href="img/planta.png" data-lightbox="image-1" data-title="Planta haus"><img src="img/planta.png" class="img-responsive center-block" alt="Planta"></a>
            <h3> <strong>Planta Haus</strong> <small>72m² | 2 suíte + quarto</small></h3>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <img src="img/visite-nosso-estande-decorado.svg" class="img-responsive center-block mt-4" alt="Visite nosso decorado 3D">
      <a href="#">
        <img src="img/psx-360.png" class="img-responsive center-block mt-3" alt="Pax 360">
      </a>
      <div class="clear"></div>
      <img src="img/andamento-da-obra.svg" class="img-responsive center-block mt-5" alt="Andamento da obra">
      <div class="mt-4">
        <div class="colunas col-6 off-1">
          <div class="andamento">
            <div class="point">
              <div class="num">
                20%
              </div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="20">
                 <circle cx="50" cy="50" r="40" />
               </svg>
             </div>
             <h3>
               <img src="img/building.svg" alt="Acabamento">
               Acabamento
             </h3>
          </div>
        </div>
        <div class="colunas col-6">
          <div class="andamento">
            <div class="point">
              <div class="num">
                20%
              </div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="20">
                 <circle cx="50" cy="50" r="40" />
               </svg>
             </div>
             <h3>
               <img src="img/estrutura.svg" alt="estrutura">
               Estrutura
             </h3>
          </div>
        </div>
        <div class="colunas col-6">
          <div class="andamento">
            <div class="point">
              <div class="num">
                20%
              </div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="20">
                 <circle cx="50" cy="50" r="40" />
               </svg>
             </div>
             <h3>
               <img src="img/implantaca.svg" alt="Implantação">
               IMplantação
             </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="visite">
    <div class="container mt-5">
      <h2 class="title2 cor"><strong>O que tem no ello haus?</strong></h2>
      <p class="texto mt-3 mb-3">
        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.
      </p>
      <div class="descricao ver-detalhes">
        <span>
           <strong class="num">02</strong>
          Suítes + 1 quarto
        </span>
        <span>
           <strong class="num">02</strong>
          vagas de garagem
        </span>
        <span>
           <strong class="num">05</strong>
          areas de lazer
        </span>
        <span>
           <strong class="num">72 - 84m²</strong>
          apartamentos com
        </span>
        <span>
           <strong class="num">02</strong>
          elevadores
        </span>
        <span>
           <strong class="num">04</strong>
          apê por andar
        </span>
        <span>
           <strong class="num">2.750</strong>
          área de terreno
        </span>
        <span>
           <strong class="num">24</strong>
          pavimentos
        </span>
        <span>
           <strong class="num">24</strong>
          pavimentos
        </span>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section>
    <div class="container">
      <div class="colunas col-5">
        <h2 class="title-bord ml-0 mt-3">
           <strong class="num">Localização privilegiada</strong>
        </h2>
        <p class="texto mt-3"><img src="img/local.svg" alt="Localização"> <strong>Chapecó, Santa Catarina</strong></p>
        <p class="texto mt-1">
          Av. Getúlio Dorneles Vargas, 1183N - Centro, 89803-003
        </p>
      </div>
      <div class="colunas col-15">
        <div class="border-radius mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d887.993705859592!2d-52.61767111526355!3d-27.094089748154097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b5dc4c16a075%3A0x8e98013b7bc83a75!2sPAX%20Empreendimentos!5e0!3m2!1spt-BR!2sbr!4v1651938741756!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <?php include("rodape.php"); ?>
    <div class="clear"></div>
  <?php include("scripts.php"); ?>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.slick.min.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/lightbox.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {



      $('.slide-plantas').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: false
      });


      var $round = $('.round'),
      roundRadius = $round.find('circle').attr('r'),
      roundPercent = $round.data('percent'),
      roundCircum = 2 * roundRadius * Math.PI,
      roundDraw = roundPercent * roundCircum / 100
      $round.css('stroke-dasharray', roundDraw  + ' 999')


    });
  </script>
</body>

</html>
