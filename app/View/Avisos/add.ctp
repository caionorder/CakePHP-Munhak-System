<div class="form">
<?php echo $this->Form->create('Aviso');?>
    <fieldset>
        <legend><?php echo __('Adicionar Aviso'); ?></legend>
        <?php 
        echo $this->Form->input(
        	'nome',
        		array(
        			'label'=>'Titulo',
        			'class'=>'form-control',
	                'div'=> array(
	                    'class'=>'form-group'
	                        )
        		)
        	);
        echo $this->Form->input(
        	'aviso',
        		array(
        			'label'=>'Aviso',
        			'type'=>'textarea',
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