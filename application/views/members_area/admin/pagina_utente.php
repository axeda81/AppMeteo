<div class="right_col" role="main">
	<div class="">
		<div class="row">
			<div class ="col-md-6">
				<div class="x_panel">
  				<h3>Modifica profilo utente </h3>        				
				</div>
			</div>
		</div>
		<div class="row">
	    <div class="col-md-6 col-xs-12">
	      <div class="x_panel">
        	<div class="x_content">
      		<br />
        		<?php if (isset($dati_utente)) : ?>
        		<?php $nomeFunzioneSubmit = 'gestioneutenti/salva_modifiche_utente/'.$dati_utente[0]->ID; ?>
        		<?php echo form_open($nomeFunzioneSubmit, array('class' => 'form-horizontal form-label-left')); ?>
          	<div class="form-group">
          		<?php echo form_label('Nome', 'nome', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'placeholder'=> $dati_utente[0]->nome, 'id' => 'nome', "required" => "required", 'name' => 'nome', 'value' => $dati_utente[0]->nome)); set_value('nome', $dati_utente[0]->nome); ?>
              </div>
            </div>
          	<div class="form-group">
          	<?php echo form_label('Cognome', 'cognome', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'placeholder'=> $dati_utente[0]->cognome, 'id' => 'cognome', "required" => "required", 'name' => 'cognome', 'value' => $dati_utente[0]->cognome)); set_value('cognome', $dati_utente[0]->cognome); ?>
              </div>
            </div>
	          <div class="form-group">
	          	<?php echo form_label('Tipo utente', 'tipo', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	          	<div class="col-md-9 col-sm-9 col-xs-12">
	          		<?php 
	          		$options = array("0" => 'Meteorologo', "1" => 'Dirigente', "2" => 'Amministratore');
	          		echo form_dropdown('tipo', $options, $dati_utente[0]->tipo, array('class'=>'form-control')); ?>
							</div>	                  	
	          </div>
	          <div class="form-group">
	          	<?php echo form_label('E-mail', 'email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	            <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'placeholder'=> $dati_utente[0]->email, 'id' => 'email', "required" => "required", 'name' => 'email', 'value' => $dati_utente[0]->email)); set_value('email', $dati_utente[0]->email); ?>
	            </div>
	          </div>
          	<div class="form-group">
          		<?php echo form_label('Username', 'username', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'placeholder'=> $dati_utente[0]->username, 'id' => 'username', "required" => "required", 'name' => 'username', 'value' => $dati_utente[0]->username)); set_value('username', $dati_utente[0]->username); ?>
              </div>     
							<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'placeholder'=> $dati_utente[0]->ID, 'id' => 'id_utente', 'name' => 'id_utente', 'value' => $dati_utente[0]->ID, 'hidden' => 'true')); set_value('id_utente', $dati_utente[0]->ID); ?>
						</div> 
	          <div class="form-group">
	          	<?php echo form_label('Password', 'password', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	            <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'placeholder'=> '', 'id' => 'password', 'name' => 'password'));  ?>	
	            </div>
	          </div>  
          	<div class="form-group">
          		<?php echo form_label('Conferma password', 'password2', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'placeholder'=> '', 'id' => 'password2', 'name' => 'password2'));  ?>
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
              	<?php echo form_submit('submit', 'Salva le modifiche', array('class' => 'btn btn-success submit pull-right')); ?>
 								<?php echo anchor('gestioneutenti/elenco_utenti', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
              </div>
            </div>
            <?php echo form_close(); ?>
      			<?php else : ?>
      			<h3> Non abbiamo trovato i dati dell'utente. </h3>
      			<?php endif; ?>
        	</div>
	      </div>
	    </div>
		</div>
	</div>
</div>
