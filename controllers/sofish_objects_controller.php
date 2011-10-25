<?php
class SofishObjectsController extends AppController {

	var $name = 'SofishObjects';

	function index() {
		$this->SofishObject->recursive = 0;
		$this->set('sofishObjects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sofish object', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sofishObject', $this->SofishObject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SofishObject->create();
			if ($this->SofishObject->save($this->data)) {
				$this->Session->setFlash(__('The sofish object has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish object could not be saved. Please, try again.', true));
			}
		}
		$sofishObjectTypes = $this->SofishObject->SofishObjectType->find('list');
		$users = $this->SofishObject->User->find('list');
		$this->set(compact('sofishObjectTypes', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sofish object', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SofishObject->save($this->data)) {
				$this->Session->setFlash(__('The sofish object has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish object could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SofishObject->read(null, $id);
		}
		$sofishObjectTypes = $this->SofishObject->SofishObjectType->find('list');
		$users = $this->SofishObject->User->find('list');
		$this->set(compact('sofishObjectTypes', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sofish object', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SofishObject->delete($id)) {
			$this->Session->setFlash(__('Sofish object deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sofish object was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
