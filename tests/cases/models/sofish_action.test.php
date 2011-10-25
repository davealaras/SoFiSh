<?php
/* SofishAction Test cases generated on: 2011-10-04 16:44:55 : 1317739495*/
App::import('Model', 'SofishAction');

class SofishActionTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_action', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.profile', 'app.subscription', 'app.subscription_type', 'app.sofish_action_type');

	function startTest() {
		$this->SofishAction =& ClassRegistry::init('SofishAction');
	}

	function endTest() {
		unset($this->SofishAction);
		ClassRegistry::flush();
	}

}
