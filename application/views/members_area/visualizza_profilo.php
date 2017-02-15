<div class="right_col" role="main">
	<div class="">
		<div class="row">
    		<div class="page-title">
    			<div class ="col-md-12">
      				<div class="title_left">
        				<h3>Visualizza il tuo profilo</h3>
			            <?php 
			              if(isset($messaggio))  {
			                echo '<div class="alert alert-success" role="alert"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="sr-only"></span>';
			                echo $messaggio;
			              } 
			            ?>         				
      				</div>
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
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" disabled placeholder="<?php echo $dati_utente[0]->nome; ?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cognome</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" disabled placeholder="<?php echo $dati_utente[0]->cognome; ?>">
	                    	</div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo utente</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                       		<?php 
		                    		switch ($dati_utente[0]->tipo) {
		                      			case "0": $tipo = "Meteorologo"; break;
		                      			case "1": $tipo = "Dirigente"; break;
		                      			case "2": $tipo = "Amministratore"; break;
				                    	default: break;
		                    		}
		                  		?>
	                          <input type="text" class="form-control" disabled placeholder="<?php echo $tipo; ?>">
	                    	</div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
	                        <div class="col-md-9 col-sm-9 col-xs-12">
	                          <input type="text" class="form-control" disabled placeholder="<?php echo $dati_utente[0]->email; ?>">
	                    	</div>
	                    </div>
	                    <div class="ln_solid"></div>
	                    <div class="form-group">
	                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
		        				<button type="submit" class="btn btn-success submit pull-right">Cambia password</button>
		       					<?php echo anchor('site/members_area', 'Torna alla home', array('class' => 'btn btn-primary pull-right')); ?>
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
