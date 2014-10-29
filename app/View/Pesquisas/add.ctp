<div class="form">
<?php echo $this->Form->create('Pesquisa',array('type' => 'file'));?>
    <fieldset>
        <legend><?php echo __('Adicionar Pesquisa'); ?></legend>
        <?php 
        echo $this->Form->input(
        	'nome',
        		array(
        			'label'=>'Nome da Pesquisa',
        			'class'=>'form-control',
	                'div'=> array(
	                    'class'=>'form-group'
	                        )
        		)
        	);
        echo $this->Form->input(
        	'arquivo',
        		array(
        			'label'=>'Arquivo (PDF)',
        			'type'=>'file',
        			'class'=>'form-control',
	                'div'=> array(
	                    'class'=>'form-group'
	                        )
        		)
        	);
        echo $this->Form->input(
        	'user_id',
        		array(
        			'label'=>'Selecione o Usuário',
        			'class'=>'form-control',
	                'div'=> array(
	                    'class'=>'form-group'
	                        )
        		)
        	);
        ?>
    </fieldset>
<?php 
    $options = array(
            'label'=>'Cadastrar',
            'class'=>array(
                'btn',
                'btn-default'
                ),
            'div'=>array(
                    'class'=>'form-group'
                )
        );
    echo $this->Form->end($options);
?>
</div>