<?php
/* Access Fixture generated on: 2011-10-04 16:44:48 : 1317739488 */
class AccessFixture extends CakeTestFixture {
	var $name = 'Access';

	var $fields = array(
		'sofish_object_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bunch_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'sofish_object_id' => 'Lorem ipsum dolor sit amet',
			'bunch_id' => 1
		),
	);
}
