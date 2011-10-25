<?php
class ProfilesController extends AppController {

	var $name = 'Profiles';

	function index() {
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid profile', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('profile', $this->Profile->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Profile->create();
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Profile->User->find('list');
		$sofishObjects = $this->Profile->SofishObject->find('list');
		$pictures = $this->Profile->Picture->find('list');
		$this->set(compact('users', 'sofishObjects', 'pictures'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid profile', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Profile->read(null, $id);
		}
		$users = $this->Profile->User->find('list');
		$sofishObjects = $this->Profile->SofishObject->find('list');
		$pictures = $this->Profile->Picture->find('list');
		$this->set(compact('users', 'sofishObjects', 'pictures'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for profile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Profile->delete($id)) {
			$this->Session->setFlash(__('Profile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Profile was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
