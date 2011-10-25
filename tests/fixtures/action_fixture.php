<?php
/* Action Fixture generated on: 2011-10-04 16:14:46 : 1317737686 */
class ActionFixture extends CakeTestFixture {
	var $name = 'Action';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'action_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'object_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'action_type_id' => 1,
			'object_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-10-04 16:14:46'
		),
	);
}
