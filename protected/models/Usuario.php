<?php


	class Usuario extends CActiveRecord
	{
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'usuario';
		}
		
		public function rules()
		{
			return array(
			array('nomUsu, claUsu, nivUsu', 'required'),
			array('nomUsu, claUsu, nivUsu','length', 'max'=>30),
			);
		}
		
		public function attributeLabels()
		
		{
		 return array(
		 'idUsu' => 'Código de usuario',
		 'nomUsu' => 'Nombre de Usuario',
		 'claUsu' => 'Clave de usuario',
		 'nivUsu' => 'Nivel del Usuario',
		 );
		}
		
		public function search()
		{
			$criteria= new CDbCriteria;
			
			$criteria->compare('idUsu',$this->idUsu);
			$criteria->compare('nomUsu',$this->nomUsu);
			$criteria->compare('claUsu',$this->claUsu);
			$criteria->compare('niUsu',$this->nivUsu);
			
			return new CActiveDataProvider($this, array(
			'criteria'=> $criteria,
			));
		}
		
	}