<div class="banner">
  <?php
    $criteria = new CDbCriteria();
    $criteria->order = 'idbanner desc';
    $criteria->addCondition("ativo = 1");
    $banners = Banner::model()->findAll($criteria);
    foreach($banners as $banner) {
  ?>
    <div>
      <picture>
        <? 
          if ($banner->responsivo_1024 != NULL){
        ?>
          <source media="(max-width: 1024px)" srcset="extranet/uploads/Banner/<?=($banner->responsivo_1024)?>">
        <? 
          } if ($banner->responsivo_1800 != NULL){
        ?>
          <source media="(min-width: 1800px)" srcset="extranet/uploads/Banner/<?=($banner->responsivo_1800)?>">
        <? 
          }
        ?>
        <img src="extranet/uploads/Banner/<?=($banner->imagem)?>" class="img-responsive center-block" alt="<?=($banner->titulo)?>">
      </picture>
      <h2 class="frase"> <a href="<?=($banner->link)?>"> <strong><?=($banner->titulo)?></strong> <small><?=($banner->texto)?></small> <span><strong><?=($banner->botao)?></strong> </span> </a> </h2>
      <? 
        if ($banner->emp_nome != NULL){
      ?>
        <div class="infos">
          <p> <?=($banner->emp_nome)?> <small><?=($banner->emp_tag)?> </small> </p>
          <div class="espacos"> <span> <img src="img/cama.svg" alt="Suítes"> <?=($banner->quartos)?> </span> <span>|</span> <span> <img src="img/home.svg" alt="Metros"> <?=($banner->metragem)?> </span> <span> |</span> <span> <img src="img/carro.svg" alt="Vagas"> <?=($banner->vagas)?> </span> </div>
        </div>
      <? 
        }
      ?>      
    </div>
  <?php
    }
  ?>
</div>