<?php

class AvisosController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
    }
	
	public function index() {
        $this->Aviso->recursive = 0;
        $this->set('avisos', $this->paginate());
        $list = $this->Aviso->User->find('list', array(
            'fields' => array('User.id', 'User.nome'),
            'recursive' => 0
        ));;

        $this->set('users', $list);
    }

    public function my(){
        $this->Aviso->recursive = 0;
        $list = $this->Aviso->find('all', 
                        array('conditions' => array(
                          'User.id'=>$this->Auth->user('id')
                        ))
                    );
        $this->set('avisos',$list);
    }


    public function view($id = null) {
        $this->Aviso->id = $id;
        if (!$this->Aviso->exists()) {
            throw new NotFoundException(__('Aviso invalido'));
        }
        $list = $this->Aviso->User->find('list', array(
            'fields' => array('User.id', 'User.nome'),
            'recursive' => 0
        ));;

        $this->set('users', $list);
        $this->set('aviso', $this->Aviso->read(null, $id));
    }

    public function add() {
    	$list = $this->Aviso->User->find('list', array(
	        'fields' => array('User.id', 'User.nome'),
	        'recursive' => 0
	    ));;

    	$this->set('users', $list);

        if ($this->request->is('post')) {
            $this->Aviso->create();

            if ($this->Aviso->save($this->request->data)) {

                $this->Session->setFlash('Aviso enviado com sucesso.','default',array('class'=>'alert alert-success'));
                $this->redirect(array('action' => 'index'));

            } else {
                $this->Session->setFlash('Erro tente novamente.','default',array('class'=>'alert alert-danger'));
            }
        }
    }

    public function edit($id = null) {
        $this->Aviso->id = $id;

        $list = $this->Aviso->User->find('list', array(
	        'fields' => array('User.id', 'User.nome'),
	        'recursive' => 0
	    ));;

    	$this->set('users', $list);

        
        if (!$this->Aviso->exists()) {
            throw new NotFoundException(__('Aviso invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
			
            if ($this->Aviso->save($this->request->data)) {
                $this->Session->setFlash(__('Aviso salvo'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro tente novamente mais tarde.','default',array('class'=>'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Aviso->read(null, $id);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Aviso->id = $id;
        if (!$this->Aviso->exists()) {
            throw new NotFoundException(__('Aviso invalido'));
        }
        if ($this->Aviso->delete()) {
            $this->Session->setFlash('Aviso excluido','default',array('class'=>'alert alert-success'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Erro, tente novamente mais tarde','default',array('class'=>'alert alert-danger'));
        $this->redirect(array('action' => 'index'));
    }

}