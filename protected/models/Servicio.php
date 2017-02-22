<?php

	class Servicio extends 	CActiveRecord
	{
		
		public function model($className=__CLASS__)
		{
		return parent::model($className);		
		
		}
		
		public function tableName()
		{
		return 'servicio';
		}
		
		public function rules()
		{
			return array(
			array('nomServ','required'),
			array('nomServ','length', 'max'=>30),
			);			
		}
		
		public function relations()
		{
			return array(
			'soldados' => array(self::HAS_MANY, 'Soldado', 'idServ'),
			);
		}
		
		public function attributeLabels()
		{
			return array(
			'idServ' => 'Código de Servicio',
			'nomServ' => 'Nombre del Servicio',
			);
		}
		
		public function search()
		{
			$criteria=new CDbCritera;
			
			$criteria->compare('idServ',$this->idServ),
			$criteria->compare('nomServ',$this->nomServ,true),
			
			return new CActiveDataProvider($this,array(
			 'criteri'=>$criteria,
			));
			
		}
		
	}