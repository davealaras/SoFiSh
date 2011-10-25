<?php
/* Object Fixture generated on: 2011-10-04 16:05:39 : 1317737139 */
class ObjectFixture extends CakeTestFixture {
	var $name = 'Object';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'object_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '4e8b12b3-7290-4b6c-9b58-08e09677ed90',
			'object_type_id' => 1,
			'user_id' => 1,
			'created' => '2011-10-04 16:05:39'
		),
	);
}
