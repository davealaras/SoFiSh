<?php
/* SofishObject Test cases generated on: 2011-10-04 16:44:56 : 1317739496*/
App::import('Model', 'SofishObject');

class SofishObjectTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.friend', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->SofishObject =& ClassRegistry::init('SofishObject');
	}

	function endTest() {
		unset($this->SofishObject);
		ClassRegistry::flush();
	}

}
