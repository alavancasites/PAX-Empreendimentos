<?php
if ( Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'index' ) ) {
  $this->breadcrumbs[ $model->label( 2 ) ] = array( 'index' );
} else {
  $this->breadcrumbs[] = $model->label( 2 );
}
if ( $this->hasRel() ) {
  $this->breadcrumbs[ $model->label( 2 ) ] = array( 'rel' => $this->getRel() );
}
$this->breadcrumbs[] = Yii::t( 'app', 'Visualizar' );
?>
<div class="row-fluid">
  <div class="span12">
    <div class="w-box">
      <div class="w-box-header">
        <h4>Visualizar</h4>
      </div>
      <div class="w-box-content">
        <?
        $this->renderPartial( "//layouts/sucesso", array(
          'success' => $_GET[ 'success' ],
        ) );
        ?>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('emp_categoria_idemp_categoria'));?>
            </dt>
            <dd>
              <?=($model->empCategoria !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->empCategoria)), array('empCategoria/view', 'id' => GxActiveRecord::extractPkValue($model->empCategoria, true)),array('class' => 'relational-link')) : null)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('ordem'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->ordem)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('titulo'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->titulo)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('banner'));?>
            </dt>
            <dd><a style="margin-top:10px;" target="_blank" class="btn-link" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Empreendimento/<?=$model->banner;?>" >
              <?=$model->banner;?>
              </a></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('slogan'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->slogan)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('chamada'));?>
            </dt>
            <dd>
              <?=$model->chamada?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('capa'));?>
            </dt>
            <dd><a style="margin-top:10px;" target="_blank" class="btn-link" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Empreendimento/<?=$model->capa;?>" >
              <?=$model->capa;?>
              </a></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('imagem'));?>
            </dt>
            <dd><a style="margin-top:10px;" target="_blank" class="btn-link" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/Empreendimento/<?=$model->imagem;?>" >
              <?=$model->imagem;?>
              </a></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('gallery_id'));?>
            </dt>
            <dd>
              <?
              $this->widget( 'GalleryManager', array(
                'gallery' => $model->foto->getGallery(),
                'controllerRoute' => 'gallery',
                'id' => 'gallery1',
              ) );
              ?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('gallery_id1'));?>
            </dt>
            <dd>
              <?
              $this->widget( 'GalleryManager', array(
                'gallery' => $model->planta->getGallery(),
                'controllerRoute' => 'gallery',
                'id' => 'gallery2',
              ) );
              ?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('fundacao'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->fundacao)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('estrutura'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->estrutura)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('vedacao'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->vedacao)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('instalacao'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->instalacao)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('fachada'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->instalacao)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('acabamento'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->acabamento)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('titulo_2'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->titulo_2)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('texto_2'));?>
            </dt>
            <dd>
              <?=$model->texto_2?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('dormitorio'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->dormitorio)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('garagem'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->garagem)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('area_lazer'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->area_lazer)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('metragem'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->metragem)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('elevador'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->elevador)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('ap_andar'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->ap_andar)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('terreno'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->terreno)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('pavimentos'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->pavimentos)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('adicional_1'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->adicional_1)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('info_1'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->info_1)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('adicional_2'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->adicional_2)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('info_2'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->info_2)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('adicional_3'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->adicional_3)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('info_3'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->info_3)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('adicional_4'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->adicional_4)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('info_4'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->info_4)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('endereco'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->endereco)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('mapa'));?>
            </dt>
            <dd>
              <?=$model->mapa?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('cidade_estado'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->cidade_estado)?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('destaque'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->destaque ? 'Sim' : 'N?o')?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('rodape'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->rodape ? 'Sim' : 'N?o')?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>
              <?=Util::formataTexto($model->getAttributeLabel('ativo'));?>
            </dt>
            <dd>
              <?=Util::formataTexto($model->ativo ? 'Sim' : 'N?o')?>
            </dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt>&nbsp;</dt>
            <dd>
              <?
              if ( Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'update' ) ) {
                ?>
              <a class="btn" href="<?php echo $this->createUrlRel('update',array('id'=>$model->idempreendimento));?>"><i class="icon-edit "></i> Editar</a>
              <?
              }
              ?>
              <?
              if ( Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'index' ) ) {
                ?>
              <a class="btn" href="<?php echo $this->createUrlRel('index');?>"><i class="icon-chevron-left"></i> Voltar</a>
              <?
              }
              ?>
              <?
              if ( Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'delete' ) ) {
                ?>
              <a class="btn btn-delete" href="<?php echo $this->createUrlRel('delete',array('id'=>$model->idempreendimento));?>" style="margin-left:30px;"><i class="icon-trash"></i> Excluir</a>
              <?
              }
              ?>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
