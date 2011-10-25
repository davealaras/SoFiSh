<?php
/* Friends Test cases generated on: 2011-10-04 16:45:04 : 1317739504*/
App::import('Controller', 'Friends');

class TestFriendsController extends FriendsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FriendsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.friend', 'app.bunch', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bubble', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Friends =& new TestFriendsController();
		$this->Friends->constructClasses();
	}

	function endTest() {
		unset($this->Friends);
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
