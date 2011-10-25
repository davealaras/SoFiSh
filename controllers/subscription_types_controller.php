<?php
class SubscriptionTypesController extends AppController {

	var $name = 'SubscriptionTypes';

	function index() {
		$this->SubscriptionType->recursive = 0;
		$this->set('subscriptionTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subscription type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscriptionType', $this->SubscriptionType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubscriptionType->create();
			if ($this->SubscriptionType->save($this->data)) {
				$this->Session->setFlash(__('The subscription type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subscription type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubscriptionType->save($this->data)) {
				$this->Session->setFlash(__('The subscription type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubscriptionType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subscription type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubscriptionType->delete($id)) {
			$this->Session->setFlash(__('Subscription type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subscription type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
