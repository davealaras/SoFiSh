<?php
/* Subscription Fixture generated on: 2011-10-04 16:44:58 : 1317739498 */
class SubscriptionFixture extends CakeTestFixture {
	var $name = 'Subscription';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sofish_object_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'subscription_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'sofish_object_id' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'subscription_type_id' => 1
		),
	);
}
