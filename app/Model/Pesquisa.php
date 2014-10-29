<?php
class Pesquisa extends AppModel{
	public $name = 'Pesquisa';

	public $belongsTo = array('User');

	public $validate = array(
        'nome' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A nome is required'
            )
        ),
        'arquivo' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A arquivo is required'
            )
        ),
        'users_id' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter a valid user',
                'allowEmpty' => false
            )
        )
    );
	
	

}