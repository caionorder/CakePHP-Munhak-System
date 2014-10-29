<div class="form">
<?php echo $this->Form->create('Upload',array('type' => 'file','action','edit'));?>
    <fieldset>
        <legend><?php echo __('Adicionar Arquivo'); ?></legend>
        <?php 
        echo $this->Form->input(
        	'nome',
        		array(
        			'label'=>'Nome do Arquivo',
        			'class'=>'form-control',
	                'div'=> array(
	                    'class'=>'form-group'
	                        )
        		)
        	);
        echo $this->Form->input(
        	'arquivo',
        		array(
        			'label'=>'Arquivo',
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
            'label'=>'Salvar',
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