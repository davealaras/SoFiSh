<?php
/* SofishObjectTypes Test cases generated on: 2011-10-04 16:45:05 : 1317739505*/
App::import('Controller', 'SofishObjectTypes');

class TestSofishObjectTypesController extends SofishObjectTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SofishObjectTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_object_type', 'app.sofish_object', 'app.user', 'app.album', 'app.picture', 'app.profile', 'app.bubble', 'app.bunch', 'app.access', 'app.friend', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->SofishObjectTypes =& new TestSofishObjectTypesController();
		$this->SofishObjectTypes->constructClasses();
	}

	function endTest() {
		unset($this->SofishObjectTypes);
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
