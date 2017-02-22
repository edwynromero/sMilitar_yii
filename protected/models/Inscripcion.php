<?php 

	class Inscripcion extends CActiveRecord
	{
		public static function model($className=__CLASS__)
		{
			return parent ($className);
		}
		
		public function tableName()
		{
			return 'inscripcion';
		}
		
		public function rules()
		{
			return array(
			array('idSold, idServ, fechIni, fechFin','required'),
		    array('idSold, idServ, fechIni, fechFin','required'), //arreglar
			);
		}
		
		public function relations()
		{
			
		}
	}