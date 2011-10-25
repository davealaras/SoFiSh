<?php
class SofishActionType extends AppModel {
	var $name = 'SofishActionType';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'SofishAction' => array(
			'className' => 'SofishAction',
			'foreignKey' => 'sofish_action_type_id',
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
