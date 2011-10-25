<?php
/* SofishObjectType Test cases generated on: 2011-10-04 16:44:55 : 1317739495*/
App::import('Model', 'SofishObjectType');

class SofishObjectTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_object_type', 'app.sofish_object', 'app.access', 'app.bunch', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.friend', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->SofishObjectType =& ClassRegistry::init('SofishObjectType');
	}

	function endTest() {
		unset($this->SofishObjectType);
		ClassRegistry::flush();
	}

}
