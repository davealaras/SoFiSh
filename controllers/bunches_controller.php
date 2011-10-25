<?php
class BunchesController extends AppController {

	var $name = 'Bunches';

	function index() {
		$this->Bunch->recursive = 0;
		$this->set('bunches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid bunch', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bunch', $this->Bunch->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bunch->create();
			if ($this->Bunch->save($this->data)) {
				$this->Session->setFlash(__('The bunch has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bunch could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Bunch->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid bunch', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bunch->save($this->data)) {
				$this->Session->setFlash(__('The bunch has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bunch could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bunch->read(null, $id);
		}
		$users = $this->Bunch->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for bunch', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bunch->delete($id)) {
			$this->Session->setFlash(__('Bunch deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bunch was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
