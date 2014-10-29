<legend>Informações de Pesquisas</legend>
<p><?php 
        // echo $this->Html->link(
        //                         "Adicionar Pesquisa", 
        //                         array('action' => 'add'),
        //                         array(
        //                             'class'=>'btn btn-success',
        //                             'style'=>'float:right;margin-bottom:20px;'
        //                             )
        //                     ); 
                            ?></p>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
    <tr>
        <th>Pesquisa</th>
        <!-- <th>Usuário</th> -->
        <th>Ações</th>
        <th>Cadastrado</th>
    </tr>

<?php foreach ($pesquisas as $arquivo): ?>
    <tr>
        <td><?php echo $arquivo['Pesquisa']['nome'] ?></td>
        <!-- <td><?php echo $arquivo['User']['nome'] ?></td> -->
        <td>
            <?php 
                echo $this->Html->link(
                                        ' Visualizar', 
                                        '/pesquisas/view/'.$arquivo['Pesquisa']['id'],
                                        array(
                                            'class'=>array(
                                                        'btn',
                                                        'btn-success',
                                                        'icon-view'
                                                    ),
                                            )
                                        );
            ?> 
            
            <?php

                echo $this->Form->postLink(
							                'Delete',
							                array('action' => 'delete', $arquivo['Pesquisa']['id']),
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
        <td><?php echo $this->Time->format('d/m/Y - h:i',$arquivo['Pesquisa']['created']); ?></td>
    </tr>
<?php endforeach; ?>

</table>