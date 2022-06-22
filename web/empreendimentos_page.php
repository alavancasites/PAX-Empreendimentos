<? include_once("extranet/autoload.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Empreendimentos - PAX Empreendimentos</title>
<?php include("header.php"); ?>
</head>
<body>
  <header>
    <div id="topo"><?php include("topo.php"); ?></div>
  </header>
  <div class="clear"></div>
  <section class="banner-interno mb-4" style="background-image: url(img/banner-empreendimento.jpg)">
    <div class="container">
      <h1><a href="empreendimento">Home | <strong>Empreendimentos</strong></a><strong>Nosso DNA conecta histórias de sucesso aos nossos clientes</strong>
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
        if ($direita%2==0){
          $alinhamento = "right";
        }
        else{
          $alinhamento = "";
        }
    ?>
      <section class="lista-empreendimentos mt-5 mb-5 <?=($alinhamento)?>" style="background-image: url(img/bg-branco.jpg), url(img/bg-aqua.jpg);">
        <div class="container">
          <div class="colunas col-7"><img src="img/aqua.jpg" class="img-responsive" alt="Aqua residence"></div>
          <div class="colunas col-13">
            <h2 class="title-bord ml-3 mt-3"><strong class="num">Aqua residence</strong><small>Em construção</small></h2>
            <div class="descricao">
              <span><strong class="num">02</strong>Suítes + 1 quarto</span>
              <span><strong class="num">02</strong>vagas de garagem</span>
              <span><strong class="num">05</strong>areas de lazer</span>
              <span><strong class="num">72 - 84m²</strong>apartamentos com</span>
              <span><strong class="num">02</strong>elevadores</span>
              <span><strong class="num">04</strong>apê por andar</span>
              <span><strong class="num">2.750</strong>área de terreno</span>
              <span><strong class="num">24</strong>pavimentos</span>
              <span class="btn"><a href="empreendimento"><strong>SAIBA MAIS</strong></a></span>
            </div>
          </div>
        </div>
      </section>
    <?
      }
    ?>    
    <div class="clear"></div>
  </div>
  <?php include("rodape.php"); ?>
    <div class="clear"></div>
  <?php include("scripts.php"); ?>

</body>

</html>
