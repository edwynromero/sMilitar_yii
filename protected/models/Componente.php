<?php 


	class Componente extends CActiveRecord
	{
		
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
			
		}
		public function tableName()
		{
			return'componente';
		}
		
		public function rules()
		{
			return array(
			array('nomComp','required'),
			array('nompComp','length', 'max'=>30),
			
			);			
		}
		
		public function relations()
		{
			return array(
			'soldados'=> array(self::HAS_MANY, 'Soldado','idComp'),
			);
			
		}
		 
		public function attributeLabels()
		{
			return array(
			'idComp' => 'Codigo Componente',
			'nomComp' => 'Nombre Componente',
			);
		}
		
		public function search()
		{
			$criteria = new CDbCriteria;
			
			$criteria->compare('idComp',$this->idComp);
			$criteria->compare('nomComp',$this->nomComp,true);
			
			return new CActiveDataProvider($this,array(
			'criteria'=>$criteria,			
			));
		}
		
		
	}