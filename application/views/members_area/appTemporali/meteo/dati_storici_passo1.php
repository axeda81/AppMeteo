<!-- page content -->

<div class="right_col" role="main">
  <div class="row">
    <div class ="col-md-8 col-xs-12">
      <div class="x_panel">
        <h3>Compilazione dati storici previsioni </h3><h4><small class="pull-left"><i> Passo 1 - inserisci data e ora della previsione ed indica se eri di turno o no. </i></small></h4>
        <?php 
          if(isset($messaggioerrore))  {
            echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
            echo $messaggioerrore;
            echo '</div>';
          } 
        ?>         
      </div>
      <div class="clearfix"></div>

      <?php echo form_open('Archivio/salva_dati_storici_passo1', array('class' => 'form-horizontal form-label-left')); ?>

      <div class="x_content">
        <div class="row">
          <div class="col-md-6">
            <div class="x_panel">
              <h5>Eri di turno? </h5>
              <div class="radio">
                <label>
                  <input type="radio" required value="1" id="turnoS" name="inTurno"> SI
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" value="0" id="turnoN" name="inTurno"> NO
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="x_panel">
              <div class="form-group">
                <h5>Data e ora delle previsioni: </h5></br>
                <div class="input-append date form_datetime">
                  <input size="20" type="text" placeholder="Seleziona data e ora..." name="dataeora" required />
                  <span class="add-on"><i class="icon-th"></i></span>
                  <span class="add-on"><i class="icon-remove"></i></span>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="form-group">
                <?php echo form_submit('submit', 'Avanti', array('class' => 'btn btn-success submit pull-right')); ?>
                <?php echo anchor('Archivio/reset_dati_storici_passo1', 'Reset', array('class' => 'btn btn-primary pull-right')); ?>
                <?php echo anchor('Archivio/mostra_menu_archivio', 'Indietro', array('class' => 'btn btn-default pull-right')); ?>          
                <?php echo form_close(); ?>
              </div> 
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>vendors/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo base_url();?>vendors/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>vendors/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.it.js"></script>   
 
<script type="text/javascript">
  $(".form_datetime").datetimepicker({
      format: "dd/mm/yyyy - hh:ii",
      autoclose: true,
      language: "it",
      forceParse: false,
      startDate: "2016-12-01 00:00",
      initialDate: "2016-12-01 00:00",
      minuteStep: 5        
  });
</script>   
