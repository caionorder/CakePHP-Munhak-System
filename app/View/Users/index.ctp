<legend>Administração de Usuários</legend>
<p><?php 
        echo $this->Html->link(
                                "Adicionar Usuario", 
                                array('action' => 'add'),
                                array(
                                    'class'=>'btn btn-success',
                                    'style'=>'float:right;margin-bottom:20px;'
                                    )
                            ); 
                            ?></p>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
    <tr>
        <th>Nome</th>
        <th>Usuário</th>
        <th>Nível</th>
        <th>Ações</th>
        <!-- <th>Created</th> -->
    </tr>

<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['nome']; ?></td>
        <td>
            <?php echo $user['User']['username'] //$this->Html->link($user['User']['username'], array('action' => 'view', $user['User']['id']));?>
        </td>
        <td>
            <?php echo ucfirst($user['User']['role']) //$this->Html->link($user['User']['role'], array('action' => 'view', $user['User']['id']));?>
        </td>
        <td>
            <?php 
            echo $this->Html->link('
                Editar', 
                array(
                        'action' => 'edit',
                        $user['User']['id']
                    ),
                array(
                        'class'=>array(
                                    'btn',
                                    'btn-info',
                                    'icon-edit'
                                )
                    )
                );
            ?>
            <?php echo $this->Form->postLink(
							                ' Delete',
							                array('action' => 'delete', $user['User']['id']),
							                array(
                                                'confirm' => 'você esta certo disso?',
                                                'class'=>array(
                                                        'btn',
                                                        'btn-danger',
                                                        'icon-trash'
                                                    )
                                                )
            )?>
            
        </td>
        <!-- <td><?php echo $user['User']['created']; ?></td> -->
    </tr>
<?php endforeach; ?>

</table>