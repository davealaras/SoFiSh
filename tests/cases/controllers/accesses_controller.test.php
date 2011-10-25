<?php
/* Accesses Test cases generated on: 2011-10-04 16:45:03 : 1317739503*/
App::import('Controller', 'Accesses');

class TestAccessesController extends AccessesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccessesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.access', 'app.sofish_object', 'app.sofish_object_type', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.bunch', 'app.friend', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Accesses =& new TestAccessesController();
		$this->Accesses->constructClasses();
	}

	function endTest() {
		unset($this->Accesses);
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
