<?php
/* SofishObjects Test cases generated on: 2011-10-04 16:45:05 : 1317739505*/
App::import('Controller', 'SofishObjects');

class TestSofishObjectsController extends SofishObjectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SofishObjectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_object', 'app.sofish_object_type', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.bunch', 'app.access', 'app.friend', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->SofishObjects =& new TestSofishObjectsController();
		$this->SofishObjects->constructClasses();
	}

	function endTest() {
		unset($this->SofishObjects);
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
