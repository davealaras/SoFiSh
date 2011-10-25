<?php
/* SofishActionTypes Test cases generated on: 2011-10-04 16:45:04 : 1317739504*/
App::import('Controller', 'SofishActionTypes');

class TestSofishActionTypesController extends SofishActionTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SofishActionTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_action_type', 'app.sofish_action', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.profile', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->SofishActionTypes =& new TestSofishActionTypesController();
		$this->SofishActionTypes->constructClasses();
	}

	function endTest() {
		unset($this->SofishActionTypes);
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
