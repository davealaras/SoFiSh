<?php
/* Users Test cases generated on: 2011-10-04 16:45:05 : 1317739505*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
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
