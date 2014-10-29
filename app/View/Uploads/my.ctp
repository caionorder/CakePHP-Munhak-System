<legend>InformaçÕes de Arquivos</legend>
<p><?php 
        // echo $this->Html->link(
        //                         "Adicionar Arquivo", 
        //                         array('action' => 'add'),
        //                         array(
        //                             'class'=>'btn btn-success',
        //                             'style'=>'float:right;margin-bottom:20px;'
        //                             )
        //                     ); 
                            ?></p>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
    <tr>
        <th>Arquivo</th>
        <!-- <th>Usuário</th> -->
        <th>Ações</th>
        <th>Cadastrado</th>
    </tr>

<?php foreach ($uploads as $arquivo): ?>
    <tr>
        <td><?php echo $arquivo['Upload']['nome'] //$this->Html->link($arquivo['Upload']['nome'], array('action' => 'view', $arquivo['Upload']['id']));?></td>
        <!-- <td><?php echo $arquivo['User']['nome'] ?></td> -->
        <td>
            <?php 
                echo $this->Html->link(
                                        ' Visualizar', 
                                        '/upload/'.$arquivo['Upload']['arquivo'],
                                        array(
                                            'class'=>array(
                                                        'btn',
                                                        'btn-success',
                                                        'icon-view'
                                                    ),
                                            'target'=>'_blank'
                                            )
                                        );
            ?> 
            <?php 
                // echo $this->Html->link(
                //                         ' Editar', 
                //                         array('action' => 'edit', $arquivo['Upload']['id']),
                //                         array(
                //                             'class'=>array(
                //                                         'btn',
                //                                         'btn-info',
                //                                         'icon-edit'
                //                                     )
                //                             )
                //                         );
            ?> 
            <?php

                echo $this->Form->postLink(
							                'Delete',
							                array('action' => 'delete', $arquivo['Upload']['id']),
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
        <td><?php echo $this->Time->format('d/m/Y - h:i',$arquivo['Upload']['created']); ?></td>
    </tr>
<?php endforeach; ?>

</table>