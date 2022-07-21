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
  <?php include("topo.php"); ?>
  <div class="clear"></div>
  <section class="banner-interno" style="background-image: url(extranet/uploads/Empreendimento/<?=($empreendimento->banner)?>)">
    <div class="container">
      <h1>
        <a href="inicial">Home | </a> <a href="empreendimentos">Empreendimentos | </a> <a href="javascript:;"> <strong><?=($empreendimento->titulo)?></strong></a> <br>
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
              $fotos = $empreendimento->foto->getGallery()->galleryPhotos;
              if(is_array($fotos)){
                $total = count($fotos);
                foreach($fotos as $i => $foto){
            ?>
              <div><a href="extranet/gallery/<?=$foto->id?>.jpg" data-lightbox="image-1" data-title="<?=$foto->description?>"><img alt="<?=$foto->description?>" src="extranet/gallery/<?=$foto->id?>.jpg" class="img-responsive"><span><?=$foto->description?></span></a></div>
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
            <?
              $plantas = $empreendimento->planta->getGallery()->galleryPhotos;
              if(is_array($plantas)){
                $total = count($plantas);
                foreach($plantas as $i => $planta){
            ?>
              <div>
                <a href="extranet/gallery/<?=$planta->id?>.jpg" data-lightbox="image-1" data-title="Planta haus"><img src="extranet/gallery/<?=$planta->id?>.jpg" class="img-responsive center-block" alt="<?=$planta->name?>"></a>
                <h3> <strong><?=$planta->name?></strong> <small><?=$planta->description?></small></h3>
              </div>
            <?
                }
              }
            ?>
        </div>
      </div>
      <?php /*?><div class="clear"></div>
      <img src="img/visite-nosso-estande-decorado.svg" class="img-responsive center-block mt-4" alt="Visite nosso decorado 3D">
      <a href="#">
        <img src="img/psx-360.png" class="img-responsive center-block mt-3" alt="Pax 360">
      </a><?php */?>
      <div class="clear"></div>
      <img src="img/andamento-da-obra.svg" class="img-responsive center-block mt-5" alt="Andamento da obra">
      <div class="mt-4">
        <div class="colunas col-6 off-1">
          <div class="andamento">
            <div class="point">
              <div class="num"><?=($empreendimento->fundacao)?>%</div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="<?=($empreendimento->fundacao)?>"><circle cx="50" cy="50" r="40" /></svg>
             </div>
             <h3><img src="img/andamento_1.png" alt="Fundação">FUNDA&Ccedil;&Otilde;ES</h3>
          </div>
        </div>
        <div class="colunas col-6">
          <div class="andamento">
            <div class="point">
              <div class="num"><?=($empreendimento->estrutura)?>%</div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="<?=($empreendimento->estrutura)?>"><circle cx="50" cy="50" r="40" /></svg>
             </div>
             <h3><img src="img/andamento_2.png" alt="Estrutura">ESTRUTURA</h3>
          </div>
        </div>
        <div class="colunas col-6">
          <div class="andamento">
            <div class="point">
              <div class="num"><?=($empreendimento->vedacao)?>%</div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="<?=($empreendimento->vedacao)?>"><circle cx="50" cy="50" r="40" /></svg>
             </div>
             <h3><img src="img/andamento_3.png" alt="Vedações">VEDA&Ccedil;&Otilde;ES</h3>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="mt-4">
        <div class="colunas col-6 off-1">
          <div class="andamento">
            <div class="point">
              <div class="num"><?=($empreendimento->instalacao)?>%</div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="<?=($empreendimento->instalacao)?>"><circle cx="50" cy="50" r="40" /></svg>
             </div>
             <h3><img src="img/andamento_4.png" alt="Instalação">INSTALA&Ccedil;&Otilde;ES</h3>
          </div>
        </div>
        <div class="colunas col-6">
          <div class="andamento">
            <div class="point">
              <div class="num"><?=($empreendimento->fachada)?>%</div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="<?=($empreendimento->fachada)?>"><circle cx="50" cy="50" r="40" /></svg>
             </div>
             <h3><img src="img/andamento_5.png" alt="Fachada">FACHADA</h3>
          </div>
        </div>
        <div class="colunas col-6">
          <div class="andamento">
            <div class="point">
              <div class="num"><?=($empreendimento->acabamento)?>%</div>
               <svg class="round" viewbox="0 0 100 100" width="100" height="100" data-percent="<?=($empreendimento->acabamento)?>"><circle cx="50" cy="50" r="40" /></svg>
             </div>
             <h3><img src="img/andamento_6.png" alt="Acabamento">ACABAMENTO</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="visite">
    <div class="container mt-5">
      <h2 class="title2 cor"><strong><?=($empreendimento->titulo_2)?></strong></h2>
      <p class="texto mt-3 mb-3"><?=($empreendimento->texto_2)?></p>
      <div class="descricao ver-detalhes">
        <?
          if ($empreendimento->dormitorio != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->dormitorio)?></strong>Dormit&oacute;rios</span>
        <?
          } if ($empreendimento->garagem != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->garagem)?></strong>vagas de garagem</span>
        <?
          } if ($empreendimento->area_lazer != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->area_lazer)?></strong>&Aacute;reas de lazer</span>
        <?
          } if ($empreendimento->metragem != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->metragem)?></strong>metragem</span>
        <?
          } if ($empreendimento->elevador != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->elevador)?></strong>elevadores</span>
        <?
          } if ($empreendimento->ap_andar != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->ap_andar)?></strong>ap&ecirc; por andar</span>
        <?
          } if ($empreendimento->terreno != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->terreno)?></strong>&aacute;rea de terreno</span>
        <?
          } if ($empreendimento->pavimentos != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->pavimentos)?></strong>pavimentos</span>
        <?
          } if ($empreendimento->adicional_1 != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->adicional_1)?></strong><?=($empreendimento->info_1)?></span>
        <?
          } if ($empreendimento->adicional_2 != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->adicional_2)?></strong><?=($empreendimento->info_2)?></span>
        <?
          } if ($empreendimento->adicional_3 != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->adicional_3)?></strong><?=($empreendimento->info_3)?></span>
        <?
          } if ($empreendimento->adicional_4 != NULL){
        ?>
          <span><strong class="num"><?=($empreendimento->adicional_4)?></strong><?=($empreendimento->info_4)?></span>
        <?
          }
        ?>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="mt100">
    <div class="container">
      <div class="colunas col-5">
        <h2 class="title-bord ml-0 mt-3"><strong class="num">Localiza&ccedil;&atilde;o privilegiada</strong></h2>
        <p class="texto mt-3"><img src="img/local.svg" alt="Localização"> <strong><?=($empreendimento->cidade_estado)?></strong></p>
        <p class="texto mt-1"><?=($empreendimento->endereco)?></p>
      </div>
      <div class="colunas col-15">
        <div class="border-radius mb-5 gmaps"><?=($empreendimento->mapa)?></div>
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
