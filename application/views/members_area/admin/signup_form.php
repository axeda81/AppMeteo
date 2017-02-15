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
				        <br />

	                	<?php echo form_open('gestioneutenti/crea_nuovo_utente', array('class' => 'form-horizontal form-label-left')); ?>
		                <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" name="nome">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cognome</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" name="cognome">
	                    	</div>
	                    </div>
		                <div class="form-group">
		                	<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo utente</label>
		                	<div class="col-md-9 col-sm-9 col-xs-12">
		                  		<select class="form-control" id="tipo_utente" name="tipoutente">
		                    		<option value="0">Meteorologo</option>
		                    		<option value="1">Dirigente</option>
		                    		<option value="2">Amministratore</option>
		                  		</select>
		                  	</div>
		                </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" placeholder="" name="email">
	                    	</div>
	                    </div>    
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" placeholder="" name="username">
	                    	</div>
	                    </div>	                                
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="password" class="form-control" placeholder="" name="password">
	                    	</div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Conferma password</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="password" class="form-control" placeholder="" name="password2">
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
		        				<button type="submit" class="btn btn-success submit pull-right">Conferma</button>
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
