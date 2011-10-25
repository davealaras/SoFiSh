<?php
/* Profile Test cases generated on: 2011-10-04 16:44:53 : 1317739493*/
App::import('Model', 'Profile');

class ProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.profile', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Profile =& ClassRegistry::init('Profile');
	}

	function endTest() {
		unset($this->Profile);
		ClassRegistry::flush();
	}

}
