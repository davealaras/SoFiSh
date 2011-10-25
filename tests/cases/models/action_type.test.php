<?php
/* ActionType Test cases generated on: 2011-10-04 16:14:45 : 1317737685*/
App::import('Model', 'ActionType');

class ActionTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.action_type', 'app.action');

	function startTest() {
		$this->ActionType =& ClassRegistry::init('ActionType');
	}

	function endTest() {
		unset($this->ActionType);
		ClassRegistry::flush();
	}

}
