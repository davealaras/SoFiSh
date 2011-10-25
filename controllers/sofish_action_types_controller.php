<?php
class SofishActionTypesController extends AppController {

	var $name = 'SofishActionTypes';

	function index() {
		$this->SofishActionType->recursive = 0;
		$this->set('sofishActionTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sofish action type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sofishActionType', $this->SofishActionType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SofishActionType->create();
			if ($this->SofishActionType->save($this->data)) {
				$this->Session->setFlash(__('The sofish action type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish action type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sofish action type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SofishActionType->save($this->data)) {
				$this->Session->setFlash(__('The sofish action type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish action type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SofishActionType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sofish action type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SofishActionType->delete($id)) {
			$this->Session->setFlash(__('Sofish action type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sofish action type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
