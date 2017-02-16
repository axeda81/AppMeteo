<div class="right_col" role="main">
	<div class="">
		<div class="row">
    		<div class="page-title">
    			<div class ="col-md-12">
      				<div class="title_left">
        				<h3>Creazione di un nuovo utente</h3>        				
      				</div>
      			</div>
    		</div>
    	</div>
    	<div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  	<div class="x_content">
	                	<?php echo form_open('gestioneutenti/crea_nuovo_utente', array('class' => 'form-horizontal form-label-left')); ?>
		                <div class="form-group">
		                	<?php echo form_label('Nome', 'nome', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	                        <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'id' => 'nome', 'name' => 'nome')); ?>
	                        </div>
	                    </div>
		                <div class="form-group">
		                	<?php echo form_label('Cognome', 'cognome', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	                        <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'id' => 'cognome', 'name' => 'cognome')); ?>
	                        </div>
	                    </div>
		                <div class="form-group">
		                	<?php echo form_label('Tipo utente', 'tipoutente', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
		                	<div class="col-md-9 col-sm-9 col-xs-12">
		                	<?php 
		                		$options = array("0" => 'Meteorologo', "1" => 'Dirigente', "2" => 'Amministratore');
		                		echo form_dropdown('tipoutente', $options, "0", array('class'=>'form-control')); ?>
							</div>	                  	
		                </div>
		                <div class="form-group">
		                	<?php echo form_label('E-mail', 'email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	                        <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'id' => 'email', 'name' => 'email')); ?>
	                        </div>
	                    </div>
		                <div class="form-group">
		                	<?php echo form_label('Username', 'username', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	                        <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'id' => 'username', 'name' => 'username')); ?>
	                        </div>
	                    </div>
		                <div class="form-group">
		                	<?php echo form_label('Password', 'password', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	                        <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'id' => 'password', 'name' => 'password')); ?>
	                        </div>
	                    </div>
		                <div class="form-group">
		                	<?php echo form_label('Password', 'password2', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	                        <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'id' => 'password2', 'name' => 'password2')); ?>
	                        </div>
	                    </div>
	                   	<div class="ln_solid"></div>
					        <?php 
					          if(isset($messaggioerrore)) {
					          	echo '<div class="row">';
					            echo '<div class="col-md-9 alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ';
					            echo $messaggioerrore;
					            echo validation_errors('<p class="error">');
					            echo '</p></div></div>';
					          } 
					        ?>
	                    <div class="form-group">
	                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
	                        	<?php echo form_submit('submit', 'Salva', array('class' => 'btn btn-success submit pull-right')); ?>
        						<?php echo anchor('gestioneutenti/amministra_utenti', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
	                        	<?php echo form_close(); ?>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
		</div>
	</div>
</div>
