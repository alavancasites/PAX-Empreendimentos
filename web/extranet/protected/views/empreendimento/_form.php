<div class="form">
  <?php
  $form = $this->beginWidget( 'GxActiveForm', array(
    'id' => 'empreendimento-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
      'class' => 'form-horizontal',
      'enctype' => 'multipart/form-data',
      'action' => $this->createUrlRel( $this->action->id ),
    )
  ) );
  ?>
  <?
  $this->renderPartial( "//layouts/erros", array(
    'model' => $model,
  ) );
  ?>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'emp_categoria_idemp_categoria',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->dropDownList($model, 'emp_categoria_idemp_categoria', GxHtml::listDataEx(EmpCategoria::model()->findAllAttributes(null, true)), array('class' => 'input-xxlarge','empty'=>'Selecione...')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'ordem',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'ordem', array('class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'titulo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'titulo', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'banner',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'banner',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 1550x480px</dd>      
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'slogan',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textArea($model, 'slogan',array('rows'=>'10','class'=>'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'chamada',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'chamada','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'capa',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'capa',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 398x617px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'imagem',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'imagem',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 580x840px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'gallery_id',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'GalleryManager', array(
          'gallery' => $model->foto->getGallery(),
          'controllerRoute' => 'gallery',
          'id' => 'gallery1',
        ) );
        echo $form->hiddenField( $model, 'gallery_id' );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 800x600px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'gallery_id1',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'GalleryManager', array(
          'gallery' => $model->planta->getGallery(),
          'controllerRoute' => 'gallery',
          'id' => 'gallery2',
        ) );
        echo $form->hiddenField( $model, 'gallery_id1' );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 900x400px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'fundacao',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'fundacao', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'estrutura',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'estrutura', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'vedacao',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'vedacao', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'instalacao',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'instalacao', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'fachada',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'fachada', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'acabamento',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'acabamento', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'titulo_2',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'titulo_2', array('maxlength' => 200,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'texto_2',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'texto_2','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'dormitorio',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'dormitorio', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'garagem',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'garagem', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'area_lazer',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'area_lazer', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'metragem',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'metragem', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'elevador',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'elevador', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'ap_andar',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'ap_andar', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'terreno',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'terreno', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'pavimentos',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'pavimentos', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'adicional_1',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'adicional_1', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'info_1',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'info_1', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'adicional_2',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'adicional_2', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'info_2',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'info_2', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'adicional_3',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'adicional_3', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'info_3',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'info_3', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'adicional_4',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'adicional_4', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'info_4',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'info_4', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'endereco',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'endereco', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'mapa',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'mapa','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'cidade_estado',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'cidade_estado', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'destaque',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->checkBox($model, 'destaque'); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'rodape',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->checkBox($model, 'rodape'); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'ativo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->checkBox($model, 'ativo'); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt>&nbsp;</dt>
      <dd>
        <button type="submit" class="btn">
        <?
        if ( $this->action->id == 'create' ) {
          ?>
        <i class="icon-plus"></i>&nbsp;Cadastrar
        <?
        } else {
          ?>
        <i class="icon-pencil"></i>&nbsp;Atualizar
        <?
        }
        ?>
        </button>
        <?
        if ( Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'index' ) ) {
          ?>
        <a class="btn" href="<?php echo $this->createUrlRel('index');?>"><i class="icon-chevron-left"></i> Voltar</a>
        <?
        }
        ?>
        <?
        if ( $this->action->id == 'update' && Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'delete' ) ) {
          ?>
        <a class="btn btn-delete" href="<?php echo $this->createUrlRel('delete',array('id'=>$model->idempreendimento));?>" style="margin-left:30px;"><i class="icon-trash"></i> Excluir</a>
        <?
        }
        ?>
      </dd>
    </dl>
  </div>
  <?
  $this->endWidget();
  ?>
</div>
<!-- form -->
