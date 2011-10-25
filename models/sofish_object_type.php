<?php
class SofishObjectType extends AppModel {
	var $name = 'SofishObjectType';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'SofishObject' => array(
			'className' => 'SofishObject',
			'foreignKey' => 'sofish_object_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
