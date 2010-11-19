<?php
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