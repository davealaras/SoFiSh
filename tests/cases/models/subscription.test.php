<?php
/* Subscription Test cases generated on: 2011-10-04 16:44:58 : 1317739498*/
App::import('Model', 'Subscription');

class SubscriptionTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.friend', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription_type');

	function startTest() {
		$this->Subscription =& ClassRegistry::init('Subscription');
	}

	function endTest() {
		unset($this->Subscription);
		ClassRegistry::flush();
	}

}
