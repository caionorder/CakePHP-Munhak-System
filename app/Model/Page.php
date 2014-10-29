<?php

class Page extends AppModel{

	public $name = 'Page';

	public $belongsTo = array(
							'User',
							'Aviso',
							'Pesquisa',
							'Upload',
							);

}