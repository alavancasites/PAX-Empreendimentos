<?
include_once("extranet/autoload.php");
$_GET['pagina'] = is_numeric($_GET['pagina']) ? $_GET['pagina']+1 : 0;
$criteria = new CDbCriteria();
$criteria->order = 'idnovidade desc';
$criteria->addCondition("ativo = 1");
$data_provider = new CActiveDataProvider('Novidade', array(
  'criteria'=> $criteria,
    'pagination'=>array(
        'route'=> 'novidades?',
        'pageSize'=> 16,
      'pageVar' => 'page',
    ),
));
$novidades = $data_provider->getData();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Novidades - PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/unite-gallery.css');?></style>
</head>
<body>
  <header><div id="topo"><?php include("topo.php"); ?></div></header>
  <div class="clear"></div>
  <section class="banner-interno" style="background-image: url(img/banner-noviades.png)">
    <div class="container"><h1><a href="novidade">Home | <strong>Novidades</strong></a><strong>Aqui você ficaa tualizado sobre as novidades</strong></h1></div>
  </section>
  <div class="clear"></div>
  <section class="novidades">
    <img src="img/novidades-elemento.png" class="efeito" alt="Novidades">
    <img src="img/novidades-elemento1.png" class="efeito1" alt="Novidades">
    <div class="container">
      <div class="text-center">
        <h2 class="title-bord-right mt-5 mb-5">
           <strong class="num">Novidades</strong>
        </h2>
      </div>
      <div class="lista-noticias">
      <?php
        foreach ($novidades as $key => $novidade) {
      ?>
        <div>
          <a href="novidade/<?=$novidade->idnovidade?>/<?=Util::removerAcentos($novidade->titulo)?>">
            <img src="extranet/uploads/Novidade/<?=$novidade->imagem?>" class="img-responsive" alt="<?=$novidade->titulo?>">
          </a>
          <a href="novidade/<?=$novidade->idnovidade?>/<?=Util::removerAcentos($novidade->titulo)?>" class="padding">
            <p><?=$novidade->categoria?></p>
            <h2 class="mt-2 mb-2"><strong><?=$novidade->titulo?></strong><span></span></h2>
          </a>
        </div>
      <?php
        }
      ?>
      </div>
      <div class="paginacao"> 
          <div class="paginacao-itens">
            <?php
            $pagination = $data_provider->pagination;
            $pagina = $pagination->currentPage + 1;
            if ( $pagination->pageCount > 1 ) {
              ?>
            <div class="">
              <ul>
              <?php
              $get_params = http_build_query( array_merge( $_GET, array( 'page' => 1 ) ) );
              ?>
              <li><a href="<?=$pagination->route?><?=$get_params?>" class="<?=$pagina==1?'ativado':''?>">1</a></li>
              <?
              if ( $pagina > 2 ) {
                ?>
              <a onclick="return false;">...</a>
              <?
              }
              for ( $i = $pagina - 1; $i < ( $pagina + 2 ); $i++ ) {
                if ( $i > 1 && $i < $pagination->pageCount ) {
                  $get_params = http_build_query( array_merge( $_GET, array( 'page' => $i ) ) );
                  ?>
              <li><a href="<?=$pagination->route?><?=$get_params?>" class="<?=$pagina==$i?'ativado':''?>"><?=$i;?></a></li>
              <?
              }
              }
              if ( $pagina < $pagination->pageCount - 1 ) {
                ?>
              <li><a onclick="return false;">...</a></li>
              <?
              }
              ?>
              <?php
              $get_params = http_build_query( array_merge( $_GET, array( 'page' => $pagination->pageCount ) ) );
              ?>
              <li><a href="<?=$pagination->route?><?=$get_params?>" class="<?=$pagina==$pagination->pageCount?'ativado':''?>"><?=$pagination->pageCount;?></a></li>
              </ul>
            </div>
            <?php
              }
            ?>
          </div>          
        </div>      
    </div>
  </section>
  <div class="clear"></div>
  <section class="news">
    <div class="container mt-4">
      <div class="colunas col-8">
        <h3><strong>Increva-se em nossa newsletter para receber novidades</strong></h3>
        <form class="mt-2 mb-3" action="index.html" method="post">
          <input type="text" name="" value="" placeholder="Seu melhor e-mail">
          <button class="btn-secundary mt-3" type="button" name="button">Inscreva-se</button>
        </form>
      </div>
      <div class="colunas col-12">

      </div>

    </div>
      <img src="img/news.jpg" class="img-responsive" alt="News Pax">
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
