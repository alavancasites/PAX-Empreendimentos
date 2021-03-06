<?php

/**
 * This is the model base class for the table "empresa".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Empresa".
 *
 * Columns in table "empresa" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $idempresa
 * @property string $titulo
 * @property string $slogan
 * @property string $sobre_nos
 * @property string $sobre_imagem
 * @property string $titulo_2
 * @property string $texto_2
 * @property string $como_fazemos_esq
 * @property string $como_fazemos_dir
 * @property string $time
 * @property string $time_img
 * @property string $institucional
 * @property string $institucional_img
 * @property string $ativo
 *
 */
abstract class BaseEmpresa extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'empresa';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Empresa|Empresas', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo', 'length', 'max'=>100),
			array('sobre_imagem, time_img, institucional_img', 'length', 'max'=>140),
			array('ativo', 'length', 'max'=>1),
			array('slogan, sobre_nos, titulo_2, texto_2, como_fazemos_esq, como_fazemos_dir, time, institucional', 'safe'),
			array('titulo, slogan, sobre_nos, sobre_imagem, titulo_2, texto_2, como_fazemos_esq, como_fazemos_dir, time, time_img, institucional, institucional_img, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idempresa, titulo, slogan, sobre_nos, sobre_imagem, titulo_2, texto_2, como_fazemos_esq, como_fazemos_dir, time, time_img, institucional, institucional_img, ativo', 'safe', 'on'=>'search'),
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
			'idempresa' => Yii::t('app', 'Idempresa'),
			'titulo' => Yii::t('app', 'T?tulo'),
			'slogan' => Yii::t('app', 'Slogan'),
			'sobre_nos' => Yii::t('app', 'Sobre n?s'),
			'sobre_imagem' => Yii::t('app', 'Sobre - Imagem'),
			'titulo_2' => Yii::t('app', 'Titulo 2'),
			'texto_2' => Yii::t('app', 'Texto 2'),
			'como_fazemos_esq' => Yii::t('app', 'Como fazemos - Esq'),
			'como_fazemos_dir' => Yii::t('app', 'Como fazemos - Dir'),
			'time' => Yii::t('app', 'Time'),
			'time_img' => Yii::t('app', 'Time - Imagem'),
			'institucional' => Yii::t('app', 'Institucional'),
			'institucional_img' => Yii::t('app', 'Institucional - Imagem'),
			'ativo' => Yii::t('app', 'Ativo'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idempresa', $this->idempresa);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('slogan', $this->slogan, true);
		$criteria->compare('sobre_nos', $this->sobre_nos, true);
		$criteria->compare('sobre_imagem', $this->sobre_imagem, true);
		$criteria->compare('titulo_2', $this->titulo_2, true);
		$criteria->compare('texto_2', $this->texto_2, true);
		$criteria->compare('como_fazemos_esq', $this->como_fazemos_esq, true);
		$criteria->compare('como_fazemos_dir', $this->como_fazemos_dir, true);
		$criteria->compare('time', $this->time, true);
		$criteria->compare('time_img', $this->time_img, true);
		$criteria->compare('institucional', $this->institucional, true);
		$criteria->compare('institucional_img', $this->institucional_img, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}