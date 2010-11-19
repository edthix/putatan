<?php
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