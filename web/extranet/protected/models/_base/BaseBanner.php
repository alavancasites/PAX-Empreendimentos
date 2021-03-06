<?php

/**
 * This is the model base class for the table "banner".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Banner".
 *
 * Columns in table "banner" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $idbanner
 * @property string $titulo
 * @property string $texto
 * @property string $emp_nome
 * @property string $emp_tag
 * @property string $quartos
 * @property string $metragem
 * @property string $vagas
 * @property string $imagem
 * @property string $responsivo_1024
 * @property string $responsivo_1800
 * @property string $botao
 * @property string $link
 * @property string $externo
 * @property string $ativo
 *
 */
abstract class BaseBanner extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'banner';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Banner|Banners', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo, link', 'length', 'max'=>200),
			array('emp_nome, emp_tag, quartos, metragem, vagas, botao', 'length', 'max'=>100),
			array('imagem, responsivo_1024, responsivo_1800', 'length', 'max'=>140),
			array('externo, ativo', 'length', 'max'=>1),
			array('texto', 'safe'),
			array('titulo, texto, emp_nome, emp_tag, quartos, metragem, vagas, imagem, responsivo_1024, responsivo_1800, botao, link, externo, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idbanner, titulo, texto, emp_nome, emp_tag, quartos, metragem, vagas, imagem, responsivo_1024, responsivo_1800, botao, link, externo, ativo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idbanner' => Yii::t('app', 'Idbanner'),
			'titulo' => Yii::t('app', 'T?tulo'),
			'texto' => Yii::t('app', 'Texto'),
			'emp_nome' => Yii::t('app', 'Emprendimento - Nome'),
			'emp_tag' => Yii::t('app', 'Emprendimento - Tag'),
			'quartos' => Yii::t('app', 'Emprendimento - Dormit?rios'),
			'metragem' => Yii::t('app', 'Emprendimento - Metragem'),
			'vagas' => Yii::t('app', 'Emprendimento - Vagas'),
			'imagem' => Yii::t('app', 'Imagem'),
			'responsivo_1024' => Yii::t('app', 'Responsivo 1024px'),
			'responsivo_1800' => Yii::t('app', 'Responsivo 1800px'),
			'botao' => Yii::t('app', 'Bot?o'),
			'link' => Yii::t('app', 'Link'),
			'externo' => Yii::t('app', 'Link externo?'),
			'ativo' => Yii::t('app', 'Ativo'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idbanner', $this->idbanner);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('texto', $this->texto, true);
		$criteria->compare('emp_nome', $this->emp_nome, true);
		$criteria->compare('emp_tag', $this->emp_tag, true);
		$criteria->compare('quartos', $this->quartos, true);
		$criteria->compare('metragem', $this->metragem, true);
		$criteria->compare('vagas', $this->vagas, true);
		$criteria->compare('imagem', $this->imagem, true);
		$criteria->compare('responsivo_1024', $this->responsivo_1024, true);
		$criteria->compare('responsivo_1800', $this->responsivo_1800, true);
		$criteria->compare('botao', $this->botao, true);
		$criteria->compare('link', $this->link, true);
		$criteria->compare('externo', $this->externo, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}