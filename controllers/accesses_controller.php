<?php
class AccessesController extends AppController {

	var $name = 'Accesses';

	function index() {
		$this->Access->recursive = 0;
		$this->set('accesses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid access', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('access', $this->Access->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Access->create();
			if ($this->Access->save($this->data)) {
				$this->Session->setFlash(__('The access has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The access could not be saved. Please, try again.', true));
			}
		}
		$sofishObjects = $this->Access->SofishObject->find('list');
		$bunches = $this->Access->Bunch->find('list');
		$this->set(compact('sofishObjects', 'bunches'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid access', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Access->save($this->data)) {
				$this->Session->setFlash(__('The access has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The access could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Access->read(null, $id);
		}
		$sofishObjects = $this->Access->SofishObject->find('list');
		$bunches = $this->Access->Bunch->find('list');
		$this->set(compact('sofishObjects', 'bunches'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for access', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Access->delete($id)) {
			$this->Session->setFlash(__('Access deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Access was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
