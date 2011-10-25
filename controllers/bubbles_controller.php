<?php
class BubblesController extends AppController {

	var $name = 'Bubbles';

	function index() {
		$this->Bubble->recursive = 0;
		$this->set('bubbles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bubble', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bubble', $this->Bubble->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bubble->create();
			if ($this->Bubble->save($this->data)) {
				$this->Session->setFlash(__('The bubble has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bubble could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Bubble->User->find('list');
		$sofishObjects = $this->Bubble->SofishObject->find('list');
		$parentSofishObjects = $this->Bubble->SofishObject->find('list');
		$this->set(compact('users', 'sofishObjects','parentSofishObjects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bubble', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bubble->save($this->data)) {
				$this->Session->setFlash(__('The bubble has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bubble could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bubble->read(null, $id);
		}
		$users = $this->Bubble->User->find('list');
		$sofishObjects = $this->Bubble->SofishObject->find('list');
		$parentSofishObjects = $this->Bubble->SofishObject->find('list');
		$this->set(compact('users', 'sofishObjects','parentSofishObjects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bubble', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bubble->delete($id)) {
			$this->Session->setFlash(__('Bubble deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bubble was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
