<?php
/* Access Test cases generated on: 2011-10-04 16:44:48 : 1317739488*/
App::import('Model', 'Access');

class AccessTestCase extends CakeTestCase {
	var $fixtures = array('app.access', 'app.sofish_object', 'app.sofish_object_type', 'app.album', 'app.user', 'app.bubble', 'app.bunch', 'app.friend', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Access =& ClassRegistry::init('Access');
	}

	function endTest() {
		unset($this->Access);
		ClassRegistry::flush();
	}

}
