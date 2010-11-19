<?php
class QuestionsController extends AppController {

  var $name = 'Questions';
  var $uses = array('Question', 'Answer');
  var $helpers = array('Html', 'Time');

  function index() {
    $last5questions = $this->Question->find('all',
					    array('order' => 'Question.created DESC', 'limit' => 5));
    $this->set('last5questions', $last5questions);

    $last5answers = $this->Answer->find('all',
					    array('order' => 'Answer.created DESC', 'limit' => 5));
    $this->set('last5answers', $last5answers);

    $this->set('title_for_layout', 'Putatan : Home');

  }

  function view($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Invalid question', true));
      $this->redirect(array('action' => 'index'));
    }
    $this->set('question', $this->Question->read(null, $id));
  }

  function add() {
    if (!empty($this->data)) {
      $this->Question->create();
      if ($this->Question->save($this->data)) {
	$this->Session->setFlash(__('The question has been saved', true));
	$this->redirect(array('action' => 'index'));
      } else {
	$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
      }
    }
  }

  function edit($id = null) {
    if (!$id && empty($this->data)) {
      $this->Session->setFlash(__('Invalid question', true));
      $this->redirect(array('action' => 'index'));
    }
    if (!empty($this->data)) {
      if ($this->Question->save($this->data)) {
	$this->Session->setFlash(__('The question has been saved', true));
	$this->redirect(array('action' => 'index'));
      } else {
	$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
      }
    }
    if (empty($this->data)) {
      $this->data = $this->Question->read(null, $id);
    }
  }

  function delete($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Invalid id for question', true));
      $this->redirect(array('action'=>'index'));
    }
    if ($this->Question->delete($id)) {
      $this->Session->setFlash(__('Question deleted', true));
      $this->redirect(array('action'=>'index'));
    }
    $this->Session->setFlash(__('Question was not deleted', true));
    $this->redirect(array('action' => 'index'));
  }
  }
?>
