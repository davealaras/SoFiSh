<?php
/* SofishActionType Test cases generated on: 2011-10-04 16:44:54 : 1317739494*/
App::import('Model', 'SofishActionType');

class SofishActionTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_action_type', 'app.sofish_action', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.profile', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->SofishActionType =& ClassRegistry::init('SofishActionType');
	}

	function endTest() {
		unset($this->SofishActionType);
		ClassRegistry::flush();
	}

}
