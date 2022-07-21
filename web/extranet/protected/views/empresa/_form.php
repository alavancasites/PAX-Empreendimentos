<div class="form">
  <?php
  $form = $this->beginWidget( 'GxActiveForm', array(
    'id' => 'empresa-form',
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
      <dt><?php echo $form->labelEx($model,'titulo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'titulo', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
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
      <dt><?php echo $form->labelEx($model,'sobre_nos',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'sobre_nos','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'sobre_imagem',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'sobre_imagem',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 1550x340px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'titulo_2',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textArea($model, 'titulo_2',array('rows'=>'10','class'=>'input-xxlarge')); ?> </dd>
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
      <dt><?php echo $form->labelEx($model,'como_fazemos_esq',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'como_fazemos_esq','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'como_fazemos_dir',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'como_fazemos_dir','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'time',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'time','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'time_img',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'time_img',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 490x310px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'institucional',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'institucional','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'institucional_img',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'institucional_img',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 490x310px</dd>
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
        <a class="btn btn-delete" href="<?php echo $this->createUrlRel('delete',array('id'=>$model->idempresa));?>" style="margin-left:30px;"><i class="icon-trash"></i> Excluir</a>
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