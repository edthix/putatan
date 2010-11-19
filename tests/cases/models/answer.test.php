<?php
App::import('Model', 'Answer');

class AnswerTestCase extends CakeTestCase {
  var $fixtures = array('app.answer', 'app.question');

  function startTest() {
    $this->Answer =& ClassRegistry::init('Answer');
  }

  function endTest() {
    unset($this->Answer);
    ClassRegistry::flush();
  }

}
?>