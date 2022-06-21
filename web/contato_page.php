<?
include_once("extranet/autoload.php");
$model = new Contato();
if(is_array($_POST['Contato'])){
	$model->attributes = $_POST['Contato'];
	$model->data = date('d/m/Y H:i:s');
	$model->ip = $_SERVER['REMOTE_ADDR'];
	
	if($model->save()){
		$model = new Contato();
		$sucesso = 1;
		header("Location: contato?sucesso=1");
	}
	
}
$erro = CHtml::errorSummary($model);
$form = new CActiveForm();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contato - PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/unite-gallery.css');?><?php echo file_get_contents ('css/formularios.css');?></style>
</head>
<body>
  <header>
    <div id="topo"><?php include("topo.php"); ?></div>
  </header>
  <div class="clear"></div>
  <section class="banner-interno" style="background-image: url(img/banner-contato.jpg)">
    <div class="container">
      <h1>
        <a href="#">Home | <strong>Contatos</strong></a>
        <strong>
          Queremos te ouvir! Entre em contato conosco e saiba mais
        </strong>
      </h1>
    </div>
  </section>
  <div class="clear"></div>
  <div class="novidades">
    <img src="img/elemento3.png" class="efeito" alt="Novidades">
    <img src="img/elemento4.png" class="efeito1" alt="Novidades">

    <div class="clear"></div>
    <section class="bg-cinza mt-5">
      <div class="container">
        <div class="">
          <div class="colunas col-8">
            <h2 class="title2">
              <strong>
                Conta pra gente
                o que te interessou
                e entramos em contato
              </strong>
            </h2>
            <img src="img/span.png" width="100" class="mt-1" alt="Queremos te ouvir! Entre em contato conosco e saiba mais">
            <h2 class="mt-3"><a href="tell>+554933163020"><strong><img src="img/phone.svg" alt="Telefone">+55  (49) 3316-3020</strong></a></h2>
            <h2 class="mt-1 mb-3"><a href="mailto:paxatendimento@pax.com.br"><strong><img src="img/email.svg" alt="">paxatendimento@pax.com.br</strong></a></h2>
            <a href="#"><img width="50" src="img/facebook.svg" alt="facebook"></a>
            <a href="#"><img src="img/instagram1.svg" alt="Instagram"></a>
            <a href="#"><img src="img/youtube.svg" alt="YouTube"></a>
            <a href="#"><img src="img/whatsapp1.svg" alt="whatsapp"></a>
          </div>
          <div class="colunas col-10 off-1">
            <?
              if(!empty($erro)){
            ?>
              <div class="error margin20"><?=$erro;?></div>
            <?
              }if($_GET['sucesso'] == 1){
            ?>
              <div class="sucesso_msg">Contato enviado com sucesso. Obrigado!</div>
            <?
              }
            ?>
            <form id="form1" name="form1" method="post" action="contato">
              <input type="hidden"  name="grava" value="1" />
              <?php echo $form->textField($model,'nome',array('class'=>'colunas col-10 alpha omega','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('nome'))); ?>
              <?php echo $form->textField($model,'email',array('class'=>'colunas col-10 alpha omega','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('email'))); ?>
              <?php echo $form->textField($model,'telefone',array('class'=>'colunas col-5 alpha','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('telefone'))); ?>
              <?php echo $form->textField($model,'assunto',array('class'=>'colunas col-5 omega','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('assunto'))); ?>
              <?php echo $form->textArea($model,'mensagem',array('rows'=>'6','cols'=>'40','placeholder'=>'Mensagem','class'=>'')); ?>
              <button class="btn-secundary mt-1" type="submit" name="button">Enviar</button>
            </form>            
          </div>
        </div>
      </div>
    </section>
    <div class="clear"></div>
    <section>
      <div class="container">
        <div class="colunas col-5">
          <img src="img/onde-pax.jpg" class="img-responsive mt-5" alt="Onde a Pax está">
          <p class="texto mt-3"><img src="img/local.svg" alt="Localização"> <strong>Chapecó, Santa Catarina</strong></p>
          <p class="texto mt-1">
            Av. Getúlio Dorneles Vargas, 1183N - Centro, 89803-003
          </p>
        </div>
        <div class="colunas col-15 mt-5">
          <div class="border-radius mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d887.993705859592!2d-52.61767111526355!3d-27.094089748154097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b5dc4c16a075%3A0x8e98013b7bc83a75!2sPAX%20Empreendimentos!5e0!3m2!1spt-BR!2sbr!4v1651938741756!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
    <div class="clear"></div>
  </div>
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
