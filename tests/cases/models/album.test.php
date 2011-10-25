<?php
/* Album Test cases generated on: 2011-10-04 16:44:49 : 1317739489*/
App::import('Model', 'Album');

class AlbumTestCase extends CakeTestCase {
	var $fixtures = array('app.album', 'app.user', 'app.bubble', 'app.sofish_object', 'app.sofish_object_type', 'app.access', 'app.bunch', 'app.friend', 'app.picture', 'app.profile', 'app.sofish_action', 'app.sofish_action_type', 'app.subscription', 'app.subscription_type');

	function startTest() {
		$this->Album =& ClassRegistry::init('Album');
	}

	function endTest() {
		unset($this->Album);
		ClassRegistry::flush();
	}

}
