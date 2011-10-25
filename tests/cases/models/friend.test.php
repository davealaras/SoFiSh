<?php
/* Friend Test cases generated on: 2011-10-04 16:44:51 : 1317739491*/
App::import('Model', 'Friend');

class FriendTestCase extends CakeTestCase {
	var $fixtures = array('app.friend', 'app.bunch', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bubble', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Friend =& ClassRegistry::init('Friend');
	}

	function endTest() {
		unset($this->Friend);
		ClassRegistry::flush();
	}

}
