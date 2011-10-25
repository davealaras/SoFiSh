<?php
/* Profiles Test cases generated on: 2011-10-04 16:45:04 : 1317739504*/
App::import('Controller', 'Profiles');

class TestProfilesController extends ProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.profile', 'app.user', 'app.album', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.bubble', 'app.picture', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Profiles =& new TestProfilesController();
		$this->Profiles->constructClasses();
	}

	function endTest() {
		unset($this->Profiles);
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
