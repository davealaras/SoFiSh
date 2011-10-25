<?php
class SubscriptionType extends AppModel {
	var $name = 'SubscriptionType';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Subscription' => array(
			'className' => 'Subscription',
			'foreignKey' => 'subscription_type_id',
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
