<?
include_once("extranet/autoload.php");
$novidade = Novidade::model()->findByPk($_GET['novidade'],array('condition' => "ativo = '1'"));
if(!is_object($novidade)){
	echo "P?gina inexistente!"; exit;
}
$criteria = new CDbCriteria();
$criteria->order = 'idnovidade desc';
$criteria->addCondition("ativo = 1");
$criteria->limit=3;
$novidades = Novidade::model()->findAll($criteria);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=($novidade->titulo)?> - PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/unite-gallery.css');?></style>
</head>
<body>
  <header>
    <div id="topo"><?php include("topo.php"); ?></div>
  </header>
  <div class="clear"></div>
  <section class="banner-interno" style="background-image: url(img/banner-novidade.png)">
    <div class="container">
      <img src="extranet/uploads/Novidade/<?=($novidade->banner)?>" class="imagem-destaque" alt="<?=($novidade->titulo)?>">
      <h1><a href="inicial">Home | </a>  <a href="novidades"> <strong>Novidades</strong></a><br><strong><?=($novidade->titulo)?></strong></h1> 
    </div>
  </section>
  <div class="clear"></div>
  <section class="novidades">
    <img src="img/novidades-elemento3.png" class="efeito3" alt="Novidades">
    <img src="img/novidades-elemento2.png" class="efeito" alt="Novidades">
    <div class="container mt-5">
      <?php /*?><div class="colunas col-7">
        <h2 class="title2">
          <strong>
            Valoriza??o do mercado imobili?rio em at? 40%
          </strong>
        </h2>
      </div>
      <div class="colunas col-5">
        <img src="img/novidade.png" class="img-responsive" alt="  Valoriza??o do mercado imobili?rio em at? 40%">
      </div>
      <div class="colunas col-8 texto">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <p>
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
        </p>
        <p>
          More recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
      </div><?php */?>
      <div class="clear"></div>
      <div class="colunas col-10 texto mt-5">
        <h2 class="mb-3"><strong><?=($novidade->destaque)?></strong></h2>
        <div><?=($novidade->destaque_texto)?></div>
      </div>
      <div class="colunas col-10 mt-5">
        <img src="img/novidade.jpg" class="img-responsive" alt="<?=$novidade->titulo?>">
      </div>
      <div class="clear"></div>
      <div class="texto mt-5">
        <h2 class="mb-3"><strong><?=($novidade->subtitulo)?></strong></h2>
        <div><?=($novidade->texto)?></div>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="novidades mt-5">
    <div class="container mb-5">
      <div class="text-center">
        <h2 class="title-bord-right mt-4 mb-4">
           <strong class="num">Novidades</strong>
        </h2>
      </div>
      <div class="lista-noticias">
        <?
          foreach($novidades as $outras){
        ?>
        <div>
          <a href="novidade/<?=$outras->idnovidade?>/<?=Util::removerAcentos($outras->titulo)?>">
            <img src="extranet/uploads/Novidade/<?=$outras->imagem?>" class="img-responsive" alt="<?=($outras->titulo)?>">
          </a>
          <a href="novidade/<?=$outras->idnovidade?>/<?=Util::removerAcentos($outras->titulo)?>" class="padding">
            <p><?=$outras->categoria?></p>
            <h2 class="mt-2 mb-2"><strong><?=$outras->titulo?></strong><span></span></h2>
          </a>
        </div>
        <?
          }
        ?>
      </div>
    </div>
  </section>
  <?php include("rodape.php"); ?>
    <div class="clear"></div>
  <?php include("scripts.php"); ?>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.slick.min.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/unitegallery.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/ug-theme-grid.js&amp;cid=<?=$cid?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      jQuery("#gallery").unitegallery({
      	grid_num_cols:2,
      	gridpanel_vertical_scroll:false,
      	gridpanel_grid_align: "top",
      	thumb_width:280,
      	thumb_height:195,
        thumb_image_overlay_effect:true,
      	thumb_image_overlay_type: "sepia",
      });

      $('.slide-plantas').slick({
        dots: false,
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
