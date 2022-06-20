<?php

Yii::import('application.models._base.BaseEmpreendimento');

class Empreendimento extends BaseEmpreendimento
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
    
    
    public function init(){
  
    }
    
    public function beforeSave(){
		//{{beforeSave}}
		return parent::beforeSave();
	}
	
	public function afterFind(){
		//{{afterFind}}
		return parent::afterFind();
	}
    
    public function behaviors(){
    	return array(
			'galeria' => array(
				'class' => 'GalleryBehavior',
				'idAttribute' => 'gallery_id1',
				'versions' => array(
					'small' => array(
						'centeredpreview' => array(200, 200),
					),
					'medium' => array(
						'resize' => array(800, null),
					)
				),
				'name' => false,
				'description' => true,
			 )
        	//{{behaviors}}
        );
    }
    
        
}