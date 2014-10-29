<div class="users form">
<?php echo $this->Form->create('User',array('action','edit'));?>
    <fieldset>
        <legend><?php echo __('Editar Usuário'); ?></legend>
        <?php 
        echo $this->Form->input('nome',
            array(
                'label'=>'Nome',
                'class'=>'form-control',
                'div'=> array(
                    'class'=>'form-group'
                        )
                )
            );
        echo $this->Form->input('username',
            array(
                'label'=>'Usuário',
                'class'=>'form-control',
                'div'=> array(
                    'class'=>'form-group'
                        )
                )
            );
        echo $this->Form->input('password',
            array(
                'label'=>'Senha',
                'class'=>'form-control',
                'div'=> array(
                    'class'=>'form-group'
                        )
                )
            );
        echo $this->Form->input('role', 
            array(
            'options' => array('admin' => 'Admin', 'cliente' => 'Cliente'),
            'label'=>'Nivel',
            'class'=>'form-control',
            'div'=> array(
                'class'=>'form-group'
                    )
        ));
    ?>
    </fieldset>
<?php 
    $options = array(
            'label'=>'Atualizar',
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