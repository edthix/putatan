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

  function testIndexListLast5Questions() {
    $return = $this->testAction('/questions/index', array('return' => 'vars')); 
    $this->assertEqual(5, count($return['last5questions']));
    $this->assertEqual(10, $return['last5questions'][0]['Question']['id']);
  }

  function testIndexTitleForLayout(){
    $return = $this->testAction('/questions/index', array('return' => 'vars')); 
    $this->assertEqual('Putatan : Home', $return['title_for_layout'] );
  }

  function testIndexListLast5Answers(){
    $return = $this->testAction('/questions/index', array('return' => 'vars'));
    $this->assertEqual(5, count($return['last5answers']));
    $this->assertEqual(5, $return['last5answers'][0]['Answer']['id']);
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