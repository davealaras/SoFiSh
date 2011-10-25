<?php
/* SofishObject Fixture generated on: 2011-10-04 16:44:56 : 1317739496 */
class SofishObjectFixture extends CakeTestFixture {
	var $name = 'SofishObject';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sofish_object_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '4e8b1be8-8e68-48e8-ad5a-17ac9677ed90',
			'sofish_object_type_id' => 1,
			'user_id' => 1,
			'created' => '2011-10-04 16:44:56'
		),
	);
}
