<?php
/* Object Test cases generated on: 2011-10-04 16:05:39 : 1317737139*/
App::import('Model', 'Object');

class ObjectTestCase extends CakeTestCase {
	function startTest() {
		$this->Object =& ClassRegistry::init('Object');
	}

	function endTest() {
		unset($this->Object);
		ClassRegistry::flush();
	}

}
