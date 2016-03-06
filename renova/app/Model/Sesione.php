<?php
App::uses('AppModel', 'Model');
/**
 * Sesione Model
 *
 * @property Opinion $Opinion
 * @property Cliente $Cliente
 * @property Terapeuta $Terapeuta
 * @property Tratamiento $Tratamiento
 */
class Sesione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Opinion' => array(
			'className' => 'Opiniones',
			'foreignKey' => 'opinion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Terapeuta' => array(
			'className' => 'Terapeuta',
			'foreignKey' => 'terapeuta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tratamiento' => array(
			'className' => 'Tratamiento',
			'foreignKey' => 'tratamiento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
