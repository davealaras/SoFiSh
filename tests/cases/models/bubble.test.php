<?php
/* Bubble Test cases generated on: 2011-10-04 16:44:49 : 1317739489*/
App::import('Model', 'Bubble');

class BubbleTestCase extends CakeTestCase {
	var $fixtures = array('app.bubble', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Bubble =& ClassRegistry::init('Bubble');
	}

	function endTest() {
		unset($this->Bubble);
		ClassRegistry::flush();
	}

}
