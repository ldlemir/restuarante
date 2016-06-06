<?php 
/**
* 
*/
class Mesero extends AppModel
{
	public $virtualFields = array('nombre_com' => 'CONCAT(Mesero.nombre)');
	
	public $validate = array(
			'documento'=> array(
				'Numero Unico'=>array(
					'rule'=>'notBlank'
					),
				'numeric'=> array(
					'rule'=>'numeric'
					),
				'unique'=>array(
					'rule'=>'isUnique'
					)
				),
			'nombre'=>array(
				'Solo Letras'=>array(
					'rule'=>'notBlank'
					)
				),
			'apellido'=>array(
				'Solo Letras'=>array(
					'rule'=>'notBlank'
					)
				),
			'telefono'=>array(
				'Solo Numeros'=>array(
					'rule'=>'notBlank'
					),
				'numeric'=>array(
					'rule'=>'numeric'
					)
				)
		);

	public $hasMany = array(
			'Mesa'=>array(
				'className'=>'Mesa',
				'foreignKey'=>'mesero_id',
				'conditions'=>'',
				'order'=>'Mesa.codigo DESC',
				'depend'=>false
				)
		);
}
 ?>