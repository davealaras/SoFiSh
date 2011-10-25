<?php
/* Bunch Test cases generated on: 2011-10-04 16:44:50 : 1317739490*/
App::import('Model', 'Bunch');

class BunchTestCase extends CakeTestCase {
	var $fixtures = array('app.bunch', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bubble', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type', 'app.friend');

	function startTest() {
		$this->Bunch =& ClassRegistry::init('Bunch');
	}

	function endTest() {
		unset($this->Bunch);
		ClassRegistry::flush();
	}

}
