<? include_once("extranet/autoload.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Empreendimentos - PAX Empreendimentos</title>
<?php include("header.php"); ?>
</head>
<body>
  <?php include("topo.php"); ?>
  <div class="clear"></div>
  <section class="banner-interno mb-4" style="background-image: url(img/banner-empreendimento.jpg)">
    <div class="container">
      <h1>
        <a href="inicial">Home | </a> <a href="empreendimentos"> <strong>Empreendimentos</strong></a> <br>
        <strong>Estamos em obras para transformar o segmento</strong>
      </h1>
    </div>
  </section>
  <div class="clear"></div>
  <div class="pag-empreendimentos">
    <img src="img/elemento-empre.png" class="elemento-top" alt="Empreendimentos Pax">
    <div class="clear"></div>
    <?php
      $direita = 0;
      $clear = 0;
      $criteria = new CDbCriteria();
      $criteria->order = 'ordem asc';
      $criteria->addCondition("ativo = 1");
      $empreendimentos = Empreendimento::model()->findAll($criteria);
      foreach($empreendimentos as $empreendimento) {
        $direita++;
        $clear++;
        if ($direita%2!=0){
    ?>
      <section class="lista-empreendimentos mt-5 mb-5" style="background-image: url(img/bg-branco.jpg), url(extranet/uploads/Empreendimento/<?=($empreendimento->banner)?>);">
        <div class="container">
          <div class="colunas col-7"><img src="extranet/uploads/Empreendimento/<?=($empreendimento->imagem)?>" class="img-responsive" alt="<?=($empreendimento->titulo)?>"></div>
          <div class="colunas col-13">
            <h2 class="title-bord ml-3 mt-3"><strong class="num"><?=($empreendimento->titulo)?></strong><small><?=($empreendimento->empCategoria)?></small></h2>
            <div class="descricao">
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
                <span><strong class="num"><?=($empreendimento->area_lazer)?></strong>&aacute;reas de lazer</span>
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
                }
              ?>
              <span class="btn"><a href="empreendimento/<?=$empreendimento->idempreendimento?>/<?=Util::removerAcentos($empreendimento->titulo)?>"><strong>SAIBA MAIS</strong></a></span>
            </div>
          </div>
        </div>
      </section>
      <?php
        }else{
      ?>
      <section class="lista-empreendimentos right mt-5 mb-5" style="background-image: url(extranet/uploads/Empreendimento/<?=($empreendimento->banner)?>),url(img/bg-branco.jpg);">
        <div class="container">
          <div class="colunas col-13">
            <h2 class="title-bord ml-3 mt-3"><strong class="num"><?=($empreendimento->titulo)?></strong><small><?=($empreendimento->empCategoria)?></small></h2>
            <div class="descricao">
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
                <span><strong class="num"><?=($empreendimento->area_lazer)?></strong>&aacute;reas de lazer</span>
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
                }
              ?>
              <span class="btn"><a href="empreendimento/<?=$empreendimento->idempreendimento?>/<?=Util::removerAcentos($empreendimento->titulo)?>"><strong>SAIBA MAIS</strong></a></span>
            </div>
          </div>
          <div class="colunas col-7"><img src="extranet/uploads/Empreendimento/<?=($empreendimento->imagem)?>" class="img-responsive" alt="<?=($empreendimento->titulo)?>"></div>
        </div>
      </section>
      <?
          }
        }
      ?>
    <div class="clear"></div>
  </div>
  <?php include("rodape.php"); ?>
    <div class="clear"></div>
  <?php include("scripts.php"); ?>
</body>
</html>