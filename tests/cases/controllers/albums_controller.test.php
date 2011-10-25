<?php
/* Albums Test cases generated on: 2011-10-04 16:45:03 : 1317739503*/
App::import('Controller', 'Albums');

class TestAlbumsController extends AlbumsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AlbumsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.album', 'app.user', 'app.bubble', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Albums =& new TestAlbumsController();
		$this->Albums->constructClasses();
	}

	function endTest() {
		unset($this->Albums);
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
