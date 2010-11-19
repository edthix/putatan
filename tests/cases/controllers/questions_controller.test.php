<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Kuala_Lumpur' for 'MYT/8.0/no DST' instead in /Applications/XAMPP/xamppfiles/htdocs/cakephp/cake/console/templates/default/classes/test.ctp on line 22
/* Questions Test cases generated on: 2010-11-20 02:11:33 : 1290192033*/
App::import('Controller', 'Questions');

class TestQuestionsController extends QuestionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class QuestionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.question', 'app.answer');

	function startTest() {
		$this->Questions =& new TestQuestionsController();
		$this->Questions->constructClasses();
	}

	function endTest() {
		unset($this->Questions);
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
?>