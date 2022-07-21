<?
include_once("extranet/autoload.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sobre N&oacute;s - PAX Empreendimentos</title>
<?php include("header.php"); ?>
<style type="text/css">.bg-sonhos { background-image: url("extranet/uploads/Empresa/<?=($empresa->sobre_imagem)?>")}</style>
</head>
<body>
  <?php
    $criteria = new CDbCriteria();
    $criteria->limit = 1;
    $empresas = Empresa::model()->findAll($criteria);
    foreach($empresas as $empresa) {
  ?>  
  <?php include("topo.php"); ?>
  <div class="clear"></div>
  <section class="banner-interno mb-3" style="background-image: url(img/banner-sobre.png)">
    <div class="container">
      <h1>
        <a href="inicial">Home | </a><a class="ml-1" href="sobre"> <strong> Sobre n&oacute;s</strong></a> <br>
        <strong><?=($empresa->slogan)?></strong>
      </h1>
    </div>
  </section>
  <div class="clear"></div>
  <section class="bg-sobre mb-5 mt-5">
    <div class="container">
      <div class="colunas col-4">
        <h2><strong>Sobre n&oacute;s</strong></h2>
      </div>
      <div class="colunas col-14">
        <h3 class="cor uppercase"><strong>PAX Empreendimentos</strong></h3>
        <div class="mt-3"><?=($empresa->sobre_nos)?></div>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="bg-sonhos">
    <div class="container">
      <div class="colunas col-6">
        <h2 class="title2 mt-2">
          <strong><?=($empresa->titulo_2)?></strong>
        </h2>
      </div>
      <div class="colunas col-13 off-1 texto mt-0"><?=($empresa->texto_2)?></div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="bg-sobre2 mb-5 mt-5">
    <img src="img/sobre-elemento.png" class="efeito" alt="Como fazemos">
    <div class="container">
      <div class="colunas col-10">
        <h2><strong>Como fazemos</strong></h2>
        <?=($empresa->como_fazemos_esq)?>        
      </div>
      <div class="colunas mt-1 col-10"><?=($empresa->como_fazemos_dir)?> </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="mt-4">
    <div class="container">
      <div class="colunas col-10"><img src="extranet/uploads/Empresa/<?=($empresa->time_img)?>" class="img-responsive" alt="Nosso Time"></div>
      <div class="colunas col-10 texto">
        <h2><strong>Nosso time</strong></h2>
        <?=($empresa->time)?>
      </div>
    </div>
  </section>
  <div class="clear"></div>
  <section class="mt-4 time mb-5">
    <img src="img/sobre-elemento1.png" class="efeito" alt="Somos PAX Empreendimentos">
    <div class="container">
      <div class="colunas col-10 texto">
        <h2><strong>Somos PAX Empreendimentos</strong></h2>
        <?=($empresa->institucional)?>
      </div>
      <div class="colunas col-10"><img src="extranet/uploads/Empresa/<?=($empresa->institucional_img)?>" class="img-responsive" alt="Nosso Time"></div>
    </div>
  </section>
  <?php include("rodape.php"); ?>
    <div class="clear"></div>
  <?php include("scripts.php"); ?>
  <?php }  ?>
</body>
</html>