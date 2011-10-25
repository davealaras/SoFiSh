<?php
class ActionType extends AppModel {
	var $name = 'ActionType';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Action' => array(
			'className' => 'Action',
			'foreignKey' => 'action_type_id',
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
