<?php
	
	class  Cuartel extends CActiveRecord
	{
		public function model($className=__CLASS__)
		{
			return parent::model($className);
						
		}
		
		public function tablename()
		{
			return 'cuartel';
		}
		
		public function rules()
		{
			return array(
			array('nomCuart, ubiCuart', 'required'),
			array('nomCuart, ubiCuart', 'length', 'max'=>30),
			
			);
		}
		
		public function relations()
		{
			return array(
			'soldados' => array(self::HAS_MANY, 'Soldado', 'idCuart'),
			);
		}
		
		public function attributeLabels()
		{
			return array(
			'idCuart' => 'Código Cuartel',
			'nomCuart' => 'Nombre Cuartel',
			'ubiCuart' => 'Ubicación Cuartel',
			);
			
		}
		
		public function search()
		{
			$criteria= new CDbcriteria;
			
			$criteria->compare('idCuart',$this->idCuart);
			$criteria->compare('nomCuart',$this->nomCuart,true);
			$criteria->compare('ubiCuart',$this->ubiCuart,true);
			
			return new CActiveDataProvider($this,array(
			 'criteria'=>$criteria,
			));
		}
		
	}