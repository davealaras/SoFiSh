<?php
class SofishActionsController extends AppController {

	var $name = 'SofishActions';

	function index() {
		$this->SofishAction->recursive = 0;
		$this->set('sofishActions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sofish action', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sofishAction', $this->SofishAction->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SofishAction->create();
			if ($this->SofishAction->save($this->data)) {
				$this->Session->setFlash(__('The sofish action has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish action could not be saved. Please, try again.', true));
			}
		}
		$users = $this->SofishAction->User->find('list');
		$sofishActionTypes = $this->SofishAction->SofishActionType->find('list');
		$sofishObjects = $this->SofishAction->SofishObject->find('list');
		$this->set(compact('users', 'sofishActionTypes', 'sofishObjects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sofish action', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SofishAction->save($this->data)) {
				$this->Session->setFlash(__('The sofish action has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish action could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SofishAction->read(null, $id);
		}
		$users = $this->SofishAction->User->find('list');
		$sofishActionTypes = $this->SofishAction->SofishActionType->find('list');
		$sofishObjects = $this->SofishAction->SofishObject->find('list');
		$this->set(compact('users', 'sofishActionTypes', 'sofishObjects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sofish action', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SofishAction->delete($id)) {
			$this->Session->setFlash(__('Sofish action deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sofish action was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
