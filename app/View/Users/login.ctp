<div class="login-box">
<div class="header">Sistema</div>

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('class'=>'form-horizontal login'));?>
    <fieldset class="col-sm-12">
        <div class="form-group">
            <div class="controls row">
                <?php
                	echo $this->Form->input('username',
                		array(
                			'class'=>'form-control',
                			'placeholder'=>'Usuário',
                			'label'=>'Usuário',
                			'div'=>array(
                				'class'=>'input-group col-sm-12'
                				)
                			)
                		);
                ?>
            </div>
        </div>

        <div class="form-group">
            <div class="controls row">
            	<?php
                	echo $this->Form->input('password',
                		array(
                			'class'=>'form-control',
                			'placeholder'=>'Senha',
                			'label'=>'Senha',
                			'div'=>array(
                				'class'=>'input-group col-sm-12'
                				)
                			)
                		);
                ?>
            </div>
        </div>

        <div class="row">

            <?php 
            $options = array(
			            'label'=>'Login',
			            'class'=>array(
			                'btn',
			                'btn-lg',
			                'btn-primary',
			                'col-xs-12'
			                ),
			            'div'=>array(
			                    'class'=>'form-group'
			                )
			        );


            echo $this->Form->end($options);?>
        </div>

    </fieldset>	

</form>
</div>