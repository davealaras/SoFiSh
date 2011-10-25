<?php
class Bubble extends AppModel {
	var $name = 'Bubble';
	var $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sofish_object_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SofishObject' => array(
			'className' => 'SofishObject',
			'foreignKey' => 'sofish_object_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentSofishObject' => array(
			'className' => 'SofishObject',
			'foreignKey' => 'parent_sofish_object_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
