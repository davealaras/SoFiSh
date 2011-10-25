<?php
/* Bunches Test cases generated on: 2011-10-04 16:45:04 : 1317739504*/
App::import('Controller', 'Bunches');

class TestBunchesController extends BunchesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BunchesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.bunch', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bubble', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type', 'app.friend');

	function startTest() {
		$this->Bunches =& new TestBunchesController();
		$this->Bunches->constructClasses();
	}

	function endTest() {
		unset($this->Bunches);
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
