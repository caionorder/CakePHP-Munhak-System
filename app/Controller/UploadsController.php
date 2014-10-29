<?php

class UploadsController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
    }
	
	public function index() {
        $this->Upload->recursive = 0;
        $this->set('uploads', $this->paginate());
        $list = $this->Upload->User->find('list', array(
            'fields' => array('User.id', 'User.nome'),
            'recursive' => 0
        ));;

        $this->set('users', $list);
    }

    public function my(){
        $this->Upload->recursive = 0;
        $list = $this->Upload->find('all', 
                        array('conditions' => array(
                          'User.id'=>$this->Auth->user('id')
                        ))
                    );
        $this->set('uploads',$list);
    }

    public function view($id = null) {
        $this->Upload->id = $id;
        if (!$this->Upload->exists()) {
            throw new NotFoundException(__('Arquivo invalido'));
        }
        $this->set('upload', $this->Upload->read(null, $id));
    }

    public function add() {
    	$list = $this->Upload->User->find('list', array(
	        'fields' => array('User.id', 'User.nome'),
	        'recursive' => 0
	    ));;

    	$this->set('users', $list);

        if ($this->request->is('post')) {
            $this->Upload->create();

            // Inicio Upload
            $extensao = substr($this->request->data['Upload']['arquivo']['name'], -3);
            $novoNome = md5(time() . 'batman') . '.' . $extensao;
            $filename = WWW_ROOT. DS . 'upload'.DS.$novoNome;
            move_uploaded_file($this->data['Upload']['arquivo']['tmp_name'],$filename);
            $this->request->data['Upload']['arquivo'] = $novoNome;
            // Fim Upload

            if ($this->Upload->save($this->request->data)) {

                $this->Session->setFlash('Arquivo enviado com sucesso.','default',array('class'=>'alert alert-success'));
                $this->redirect(array('action' => 'index'));

            } else {
                $this->Session->setFlash('Erro tente novamente.','default',array('class'=>'alert alert-danger'));
            }
        }
    }

    public function edit($id = null) {
        $this->Upload->id = $id;

        $list = $this->Upload->User->find('list', array(
	        'fields' => array('User.id', 'User.nome'),
	        'recursive' => 0
	    ));;

    	$this->set('users', $list);

        
        if (!$this->Upload->exists()) {
            throw new NotFoundException(__('Arquivo invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
			
			// Inicio Upload
            $extensao = substr($this->request->data['Upload']['arquivo']['name'], -3);
            $novoNome = md5(time() . 'batman') . '.' . $extensao;
            $filename = WWW_ROOT. DS . 'upload'.DS.$novoNome;
            move_uploaded_file($this->data['Upload']['arquivo']['tmp_name'],$filename);
            $this->request->data['Upload']['arquivo'] = $novoNome;
            // Fim Upload


            if ($this->Upload->save($this->request->data)) {
                $this->Session->setFlash(__('Arquivo salvo'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro tente novamente mais tarde.','default',array('class'=>'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Upload->read(null, $id);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Upload->id = $id;
        if (!$this->Upload->exists()) {
            throw new NotFoundException(__('Arquivo invalido'));
        }
        if ($this->Upload->delete()) {
            $this->Session->setFlash('Arquivo excluido','default',array('class'=>'alert alert-success'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Erro, tente novamente mais tarde','default',array('class'=>'alert alert-danger'));
        $this->redirect(array('action' => 'index'));
    }

}