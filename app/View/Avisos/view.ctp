<legend><?php echo h($aviso['Aviso']['nome']); ?></legend>
<p><small>Cliente: <?php echo $aviso['User']['nome']; ?></small></p>


<?php echo nl2br($aviso['Aviso']['aviso']); ?>