<?php
/* Picture Test cases generated on: 2011-10-04 16:44:52 : 1317739492*/
App::import('Model', 'Picture');

class PictureTestCase extends CakeTestCase {
	var $fixtures = array('app.picture', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Picture =& ClassRegistry::init('Picture');
	}

	function endTest() {
		unset($this->Picture);
		ClassRegistry::flush();
	}

}
