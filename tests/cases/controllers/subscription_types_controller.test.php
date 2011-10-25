<?php
/* SubscriptionTypes Test cases generated on: 2011-10-04 16:45:05 : 1317739505*/
App::import('Controller', 'SubscriptionTypes');

class TestSubscriptionTypesController extends SubscriptionTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubscriptionTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription_type', 'app.subscription', 'app.sofish_object', 'app.sofish_object_type', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.bunch', 'app.access', 'app.friend', 'app.sofish_action', 'app.sofish_action_type');

	function startTest() {
		$this->SubscriptionTypes =& new TestSubscriptionTypesController();
		$this->SubscriptionTypes->constructClasses();
	}

	function endTest() {
		unset($this->SubscriptionTypes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
