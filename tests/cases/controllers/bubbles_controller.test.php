<?php
/* Bubbles Test cases generated on: 2011-10-04 16:45:04 : 1317739504*/
App::import('Controller', 'Bubbles');

class TestBubblesController extends BubblesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BubblesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.bubble', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Bubbles =& new TestBubblesController();
		$this->Bubbles->constructClasses();
	}

	function endTest() {
		unset($this->Bubbles);
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
