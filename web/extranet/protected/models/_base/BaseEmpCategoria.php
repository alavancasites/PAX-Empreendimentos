<?php

/**
 * This is the model base class for the table "emp_categoria".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EmpCategoria".
 *
 * Columns in table "emp_categoria" available as properties of the model,
 * followed by relations of table "emp_categoria" available as properties of the model.
 *
 * @property integer $idemp_categoria
 * @property string $titulo
 * @property string $ativo
 *
 * @property Empreendimento[] $empreendimentos
 */
abstract class BaseEmpCategoria extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'emp_categoria';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'EmpCategoria|EmpCategorias', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo', 'length', 'max'=>100),
			array('ativo', 'length', 'max'=>1),
			array('titulo, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idemp_categoria, titulo, ativo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'empreendimentos' => array(self::HAS_MANY, 'Empreendimento', 'emp_categoria_idemp_categoria'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idemp_categoria' => Yii::t('app', 'Idemp Categoria'),
			'titulo' => Yii::t('app', 'Titulo'),
			'ativo' => Yii::t('app', 'Ativo'),
			'empreendimentos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idemp_categoria', $this->idemp_categoria);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}