<div class="right_col" role="main">
	<div class="">
		<div class="row">
			<div class ="col-md-6">
				<div class="x_panel">
  				<h3>Visualizza il tuo profilo</h3>
          <?php 
            if(isset($messaggio))  {
              echo '<div class="row"><div class="col-md-6">';
              echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
              echo $messaggio;
              echo '</div></div></div>';
            } 
          ?> 
				</div>
  		</div>
    </div>
    <div class="clearfix"></div>
  	<div class="row">
	    <div class="col-md-6 col-xs-12">
        <div class="x_panel">
        	<div class="x_content">
	        	<br />
	        	<?php if (isset($dati_utente)) : ?>
	        	<?php echo form_open('gestioneutenti/modifica_profilo', array('class' => 'form-horizontal form-label-left')); ?>
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
	          <div class="ln_solid"></div>
	          <div class="form-group">
	            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
	            <?php echo form_submit('submit', 'Cambia password', array('class' => 'btn btn-success submit pull-right')); ?>
	 						<?php echo anchor('site/members_area', 'Indietro', array('class' => 'btn btn-default pull-right')); ?>
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
