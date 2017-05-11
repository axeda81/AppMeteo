<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Visualizza tutte le previsioni - <small><i> in forma anonima </i></small></h3>
          </div>
        </div>
      </div>
      <div class ="col-md-3">
        <div class="pull-right">
          <?php setlocale(LC_TIME, 'ita', 'it_IT');?>
          <h3><?php echo strftime("%a %d %B %Y"); ?></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <?php echo form_open('archivio/esegui_ricerca_tutto', array('class' => 'form-horizontal form-label-left')); ?>
  <div class = "row">
    <div class ="col-md-9">
      <div class="x_panel">
        <div class="x_content">    
          <div class = "row">
            <div class="well" style="overflow: auto">
              <div class="col-md-4">
                <?php echo form_label('Scegli il periodo', 'daterange', array('class' => 'control-label')); ?>
              </div>
              <div class="col-md-8">
                <?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'name' => 'daterange', 'style' => 'background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%')); ?>
              </div>
            </div>
          </div>
          <div class = "row">
            <div class="well" style="overflow: auto">
              <div class="col-md-4">
                <?php echo form_label('Scegli la zona che ti interessa', 'select_zona[]', array('class' => 'control-label')); ?>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <?php 
                    $options = array("all" => 'Tutte', "60" => '60', "61" => '61', "62" => '62', "63" => '63', "64" => '64');
                    echo form_dropdown('select_zona[]', $options, "all", array('class'=>'form-control select2_multiple', 'multiple' => 'true')); ?>
                </div>
              </div>
            </div>
          </div>
          <div class = "row">
            <div class="well" style="overflow: auto">
              <div class="col-md-4">
                <?php echo form_label('Scegli il tipo di allerta', 'select_allerta[]', array('class' => 'control-label')); ?>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <?php 
                    $options = array("all" => 'Tutte', "0" => 'Verde', "1" => 'Gialla', "2" => 'Arancione');
                    echo form_dropdown('select_allerta[]', $options, "all", array('class'=>'form-control select2_multiple', 'multiple' => 'true')); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Pulsanti per confermare le previsioni o tornare indietro alla compilazione -->
          <div class="row">
            <div class="col-md-6">
              <div class="checkbox">
                <label>
                  <input type="checkbox" class="flat" checked="checked" name="miePrevisioni"> Mostra anche le mie previsioni
                </label>
              </div>
            </div>
            <div class ="col-md-6">                 
              <?php echo form_submit('submit', 'Cerca', array('class' => 'btn btn-success submit pull-right')); ?>
              <?php echo anchor('archivio/ricerca_tutto', 'Clear', array('class' => 'btn btn-primary pull-right')); ?>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class = "col-md-3">
      <div class = "x_panel">
        <div class = "x_title">
          <h3><small> Mappa zone di vigilanza </small></h3>
        </div>
        <div class = "x_content">
          <img src="../../images/Immagine.jpg">
        </div>
      </div>
    </div>
  </div>    
</div>

<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url();?>vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-daterangepicker -->

<!-- <script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script> -->

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('input[name="daterange"]').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'));
    }

    $('input[name="daterange"]').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Oggi': [moment(), moment()],
           'Ieri': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Ultima settimana': [moment().subtract(6, 'days'), moment()],
           'Ultimi 30 giorni': [moment().subtract(29, 'days'), moment()],
           'Questo mese': [moment().startOf('month'), moment().endOf('month')],
           'Scorso mese': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        locale: {
          "format": "DD/MM/YYYY",
          "separator": " - ",
          "applyLabel": "OK",
          "cancelLabel": "Cancel",  
          "customRangeLabel": "Personalizza"      
       }
    }, cb);

    cb(start, end);
    
});

</script>
