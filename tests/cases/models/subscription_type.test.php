<?php
/* SubscriptionType Test cases generated on: 2011-10-04 16:44:57 : 1317739497*/
App::import('Model', 'SubscriptionType');

class SubscriptionTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription_type', 'app.subscription', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.friend', 'app.sofish_action', 'app.sofish_action_type');

	function startTest() {
		$this->SubscriptionType =& ClassRegistry::init('SubscriptionType');
	}

	function endTest() {
		unset($this->SubscriptionType);
		ClassRegistry::flush();
	}

}
