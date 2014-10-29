<legend>Informações de Avisos</legend>
<p><?php 
        // echo $this->Html->link(
        //                         "Adicionar Aviso", 
        //                         array('action' => 'add'),
        //                         array(
        //                             'class'=>'btn btn-success',
        //                             'style'=>'float:right;margin-bottom:20px;'
        //                             )
        //                     ); 
                            ?></p>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
    <tr>
        <th>Titulo</th>
        <th>Conteudo</th>
        <th>Ações</th>
        <th>Cadastrado</th>
    </tr>

<?php foreach ($avisos as $arquivo): ?>
    <tr>
        <td><?php echo $arquivo['Aviso']['nome'] ?></td>
        <td><?php echo $arquivo['Aviso']['aviso'] ?></td>
        <td>
            <?php 
                echo $this->Html->link(
                                        ' Visualizar', 
                                        array('action' => 'view', $arquivo['Aviso']['id']),
                                        array(
                                            'class'=>array(
                                                        'btn',
                                                        'btn-success',
                                                        'icon-view'
                                                    )
                                            )
                                        );
            ?> 
            
            <?php

                echo $this->Form->postLink(
							                'Delete',
							                array('action' => 'delete', $arquivo['Aviso']['id']),
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
        <td><?php echo $this->Time->format('d/m/Y - h:i',$arquivo['Aviso']['created']); ?></td>
    </tr>
<?php endforeach; ?>

</table>