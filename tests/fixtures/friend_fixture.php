<?php
/* Friend Fixture generated on: 2011-10-04 16:44:51 : 1317739491 */
class FriendFixture extends CakeTestFixture {
	var $name = 'Friend';

	var $fields = array(
		'bunch_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'bunch_id' => 1,
			'user_id' => 1,
			'created' => '2011-10-04 16:44:51'
		),
	);
}
