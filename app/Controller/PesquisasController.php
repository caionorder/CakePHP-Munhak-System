<?php

class PesquisasController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
    }
	
	public function index() {
        $this->Pesquisa->recursive = 0;
        $this->set('pesquisas', $this->paginate());
        $list = $this->Pesquisa->User->find('list', array(
            'fields' => array('User.id', 'User.nome'),
            'recursive' => 0
        ));;

        $this->set('users', $list);
    }

    public function my(){
        $this->Pesquisa->recursive = 0;
        $list = $this->Pesquisa->find('all', 
                        array('conditions' => array(
                          'User.id'=>$this->Auth->user('id')
                        ))
                    );
        $this->set('pesquisas',$list);
    }

    public function view($id = null) {
        $this->Pesquisa->id = $id;
        if (!$this->Pesquisa->exists()) {
            throw new NotFoundException(__('Arquivo invalido'));
        }
        $list = $this->Pesquisa->User->find('list', array(
            'fields' => array('User.id', 'User.nome'),
            'recursive' => 0
        ));;

        $this->set('users', $list);
        $this->set('pesquisa', $this->Pesquisa->read(null, $id));
    }

    public function add() {
    	$list = $this->Pesquisa->User->find('list', array(
	        'fields' => array('User.id', 'User.nome'),
	        'recursive' => 0
	    ));;

    	$this->set('users', $list);

        if ($this->request->is('post')) {
            $this->Pesquisa->create();

            // Inicio Upload
            $extensao = substr($this->request->data['Pesquisa']['arquivo']['name'], -3);
            $novoNome = md5(time() . 'batman') . '.' . $extensao;
            $filename = WWW_ROOT. DS . 'upload'.DS.$novoNome;
            move_uploaded_file($this->data['Pesquisa']['arquivo']['tmp_name'],$filename);
            $this->request->data['Pesquisa']['arquivo'] = $novoNome;
            // Fim Upload

            if ($this->Pesquisa->save($this->request->data)) {

                $this->Session->setFlash('Arquivo enviado com sucesso.','default',array('class'=>'alert alert-success'));
                $this->redirect(array('action' => 'index'));

            } else {
                $this->Session->setFlash('Erro tente novamente.','default',array('class'=>'alert alert-danger'));
            }
        }
    }

    public function edit($id = null) {
        $this->Pesquisa->id = $id;

        $list = $this->Pesquisa->User->find('list', array(
	        'fields' => array('User.id', 'User.nome'),
	        'recursive' => 0
	    ));;

    	$this->set('users', $list);

        
        if (!$this->Pesquisa->exists()) {
            throw new NotFoundException(__('Arquivo invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
			
			// Inicio Upload
            $extensao = substr($this->request->data['Pesquisa']['arquivo']['name'], -3);
            $novoNome = md5(time() . 'batman') . '.' . $extensao;
            $filename = WWW_ROOT. DS . 'upload'.DS.$novoNome;
            move_uploaded_file($this->data['Pesquisa']['arquivo']['tmp_name'],$filename);
            $this->request->data['Pesquisa']['arquivo'] = $novoNome;
            // Fim Upload


            if ($this->Pesquisa->save($this->request->data)) {
                $this->Session->setFlash('Arquivo salvo','default',array('class'=>'alert alert-success'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro tente novamente mais tarde.','default',array('class'=>'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Pesquisa->read(null, $id);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Pesquisa->id = $id;
        if (!$this->Pesquisa->exists()) {
            throw new NotFoundException(__('Arquivo invalido'));
        }
        if ($this->Pesquisa->delete()) {
            $this->Session->setFlash('Arquivo excluido','default',array('class'=>'alert alert-success'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Erro, tente novamente mais tarde','default',array('class'=>'alert alert-danger'));
        $this->redirect(array('action' => 'index'));
    }

}