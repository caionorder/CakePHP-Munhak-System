<legend>Olá <?php echo AuthComponent::user('nome') ?></legend>
<!-- <span class="small">Seja bem vindo!</span> -->

<div class="row">
	<div class="col-lg-12">			
		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-bullhorn"></i>Avisos</h2>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
						<?php 
							if(!count($avisos) >= 1){
								echo "<li style=\"padding-bottom:10px;\">";
								echo "Sem avisos no momento.";
								echo "</li>";
							} 
						?>
							<?php foreach ($avisos as $aviso) { ?>										
							<li style="padding-bottom:10px;">
								<a href="/sistema/avisos/view/<?php echo $aviso['Aviso']['id']; ?>">
									<i class="icon-comment" style="margin-right:10px;"></i>  <?php echo $aviso['Aviso']['nome']; ?> - <?php echo $aviso['Aviso']['aviso']; ?>
								</a>
							</li>

							<?php } ?>

						</ul>
					</div>
				</div>
			</div>



			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-search"></i>Pesquisas</h2>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<?php 
								if(!count($pesquisas) >= 1){
									echo "<li style=\"padding-bottom:10px;\">";
									echo "Sem pesquisas no momento.";
									echo "</li>";
								} 
							?>
							<?php foreach ($pesquisas as $pesquisa) { ?>	
							<li style="padding-bottom:10px;">
								<a href="/sistema/pesquisas/view/<?php echo $pesquisa['Pesquisa']['id'] ?> ">
									<i class="icon-search" style="margin-right:10px;"></i>  
									<?php echo $pesquisa['Pesquisa']['nome'] ?>                            
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			

			<div style="clear:both" class="col-lg-12 col-md-12 col-sm-12">
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-file"></i>Arquivos</h2>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<?php 
								if(!count($uploads) >= 1){
									echo "<li style=\"padding-bottom:10px;\">";
									echo "Sem arquivos no momento.";
									echo "</li>";
								} 
							?>
							<?php foreach ($uploads as $upload) { ?>
							<li style="padding-bottom:10px;">
								<a href="/sistema/upload/<?php echo $upload['Upload']['arquivo'] ?>" target="_blank">
									<i class="icon-file" style="margin-right:10px;"></i>  
									<?php echo $upload['Upload']['nome'] ?>                              
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>

		</div><!--/row-->	
	</div><!--/col-->		
</div>