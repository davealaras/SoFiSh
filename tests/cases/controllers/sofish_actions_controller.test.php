<?php
/* SofishActions Test cases generated on: 2011-10-04 16:45:04 : 1317739504*/
App::import('Controller', 'SofishActions');

class TestSofishActionsController extends SofishActionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SofishActionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sofish_action', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.profile', 'app.subscription', 'app.subscription_type', 'app.sofish_action_type');

	function startTest() {
		$this->SofishActions =& new TestSofishActionsController();
		$this->SofishActions->constructClasses();
	}

	function endTest() {
		unset($this->SofishActions);
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
