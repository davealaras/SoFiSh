<?php
class SofishObjectTypesController extends AppController {

	var $name = 'SofishObjectTypes';

	function index() {
		$this->SofishObjectType->recursive = 0;
		$this->set('sofishObjectTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sofish object type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sofishObjectType', $this->SofishObjectType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SofishObjectType->create();
			if ($this->SofishObjectType->save($this->data)) {
				$this->Session->setFlash(__('The sofish object type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish object type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sofish object type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SofishObjectType->save($this->data)) {
				$this->Session->setFlash(__('The sofish object type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sofish object type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SofishObjectType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sofish object type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SofishObjectType->delete($id)) {
			$this->Session->setFlash(__('Sofish object type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sofish object type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
