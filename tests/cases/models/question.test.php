<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Kuala_Lumpur' for 'MYT/8.0/no DST' instead in /Applications/XAMPP/xamppfiles/htdocs/cakephp/cake/console/templates/default/classes/test.ctp on line 22
/* Question Test cases generated on: 2010-11-20 02:11:11 : 1290192011*/
App::import('Model', 'Question');

class QuestionTestCase extends CakeTestCase {
	var $fixtures = array('app.question', 'app.answer');

	function startTest() {
		$this->Question =& ClassRegistry::init('Question');
	}

	function endTest() {
		unset($this->Question);
		ClassRegistry::flush();
	}

}
?>