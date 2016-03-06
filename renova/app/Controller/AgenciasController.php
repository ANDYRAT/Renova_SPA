<?php
App::uses('AppController', 'Controller');
/**
 * Agencias Controller
 *
 * @property Agencia $Agencia
 * @property PaginatorComponent $Paginator
 */
class AgenciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Agencia->recursive = 0;
		$this->set('agencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agencia->exists($id)) {
			throw new NotFoundException(__('Invalid agencia'));
		}
		$options = array('conditions' => array('Agencia.' . $this->Agencia->primaryKey => $id));
		$this->set('agencia', $this->Agencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agencia->create();
			if ($this->Agencia->save($this->request->data)) {
				$this->Session->setFlash(__('Se agrego correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La agencia no se pudo agregar.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agencia->exists($id)) {
			throw new NotFoundException(__('Invalid agencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agencia->save($this->request->data)) {
				$this->Session->setFlash(__('Se actualizo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo actualizar.'));
			}
		} else {
			$options = array('conditions' => array('Agencia.' . $this->Agencia->primaryKey => $id));
			$this->request->data = $this->Agencia->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agencia->id = $id;
		if (!$this->Agencia->exists()) {
			throw new NotFoundException(__('Invalid agencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Agencia->delete()) {
			$this->Session->setFlash(__('Se elimino correctamente.'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
