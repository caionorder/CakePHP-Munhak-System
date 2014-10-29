<?php echo $this->element('header');?>
<?php echo $this->element('menu');?>

<!-- start: Content -->
<div id="content" class="
		<?php 
        if(AuthComponent::user('id')) { ?>
        	col-lg-10 col-sm-11 
        	<?php } else { ?>
        	col-sm-12 full
        <?php } ?>">


    <div class="row">
        <div class="col-sm-12">
			<?php echo $this->Session->flash(); ?>	
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

</div>
<!-- end: Content -->
			
<?php echo $this->element('footer');?>