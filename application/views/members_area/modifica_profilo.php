<div class="right_col" role="main">
	<div class="">
		<div class="row">
			<div class ="col-md-6">
				<div class="x_panel">
  				<h3>Cambia la tua password</h3>        				
				</div>
  		</div>
    </div>
  	<div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
         	<div class="x_content">
			      <br />
           	<?php if (isset($dati_utente)) : ?>
           	<?php echo form_open('gestioneutenti/salva_profilo', array('class' => 'form-horizontal form-label-left')); ?>
	          <div class="form-group">
	           	<?php echo form_label('Nome', 'nome', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'disabled' => 'true', 'placeholder'=> $dati_utente[0]->nome, 'id' => 'nome', 'name' => 'nome', 'value' => $dati_utente[0]->nome)); set_value('nome', $dati_utente[0]->nome); ?>
              </div>
            </div>
	          <div class="form-group">
	           	<?php echo form_label('Cognome', 'cognome', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'disabled' => 'true', 'placeholder'=> $dati_utente[0]->cognome, 'id' => 'cognome', 'name' => 'cognome', 'value' => $dati_utente[0]->cognome)); set_value('nome', $dati_utente[0]->cognome); ?>
              </div>
            </div>
	          <div class="form-group">
	           	<?php echo form_label('Tipo utente', 'tipo', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
	           	<div class="col-md-9 col-sm-9 col-xs-12">
	             	<?php 
	                		$options = array("0" => 'Meteorologo', "1" => 'Dirigente', "2" => 'Amministratore');
	                		echo form_dropdown('tipo', $options, $dati_utente[0]->tipo, array('class'=>'form-control', 'disabled' => 'true')); ?>
							</div>	                  	
	        	</div>
	          <div class="form-group">
	           	<?php echo form_label('E-mail', 'email', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'disabled' => 'true', 'placeholder'=> $dati_utente[0]->email, 'id' => 'email', 'name' => 'email', 'value' => $dati_utente[0]->email)); set_value('nome', $dati_utente[0]->email); ?>
              </div>
            </div>
	          <div class="form-group">
	           	<?php echo form_label('Vecchia password', 'oldPassword', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'id' => 'oldPassword', 'name' => 'oldPassword')); ?>
              </div>
            </div>
	          <div class="form-group">
	           	<?php echo form_label('Nuova password', 'newPassword', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'id' => 'newPassword', 'name' => 'newPassword')); ?>
              </div>
            </div>                    
	          <div class="form-group">
	           	<?php echo form_label('Conferma nuova password', 'newPassword2', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
              <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'password', 'class'=>'form-control', 'id' => 'newPassword2', 'name' => 'newPassword2')); ?>
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
	        			<?php echo form_submit('submit', 'Conferma', array('class' => 'btn btn-success submit pull-right')); ?>
	       				<?php echo anchor('gestioneutenti/mostra_profilo', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
               	<?php echo form_close(); ?>
              </div>
            </div>
            <?php else : ?>
            	<h3> Non abbiamo trovato i tuoi dati. </h3>
            <?php endif; ?>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>


            <?php 
              if(isset($messaggio))  {
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
                echo $messaggio;
                echo '</div></div>';
              } 
            ?> 
            <?php 
              if(isset($messaggioerrore))  {
                echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
                echo $messaggioerrore;
                echo '</div></div>';
              } 
            ?> 