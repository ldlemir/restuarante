<?php 
/**
* 
*/
class Mesa extends AppModel
{
	
	public $belongsTo = array(
		'Mesero'=>array(
			'className'=>'Mesero',
			'foreignKey'=>'mesero_id'
			)

		);

	public $validate = array(
		'codigo'=>array(
			'Solo Numeros'=>array(
				'rule'=>'notBlank'
				),
			'numeric'=>array(
				'rule'=>'numeric'
				),
			'unique'=>array(
				'rule'=>'isUnique'
				)
			),
		'puestos'=>array(
			'Solo Numeros'=>array(
				'rule'=>'notBlank'
				),
			'numeric'=>array(
				'rule'=>'numeric'
				)
			),
		'posicion'=>array(
			'Solo Numeros'=>array(
				'rule'=>'notBlank'
				),
			'numeric'=>array(
				'rule'=>'numeric'
				)
			)

		);
}
 ?>