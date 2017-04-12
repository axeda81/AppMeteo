<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Ricontrolla le tue previsioni</h3>
            <?php 
              if(isset($messaggioerrore)) {
                echo '<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span>';
                echo $messaggioerrore;
              } ?>
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
    <?php echo form_open('site/conferma_dati', array('class' => 'form-horizontal form-label-left')); ?>
  <div class = "row">
    <div class ="col-md-8">
      <div class="x_panel">
        <div class="x_title">
          <h2> <small>Puoi salvare i tuoi dati nei seguenti formati: </small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Data previsione</th>
                <th>Ora previsione</th>
                <th>Zona</th>
                <th>Fascia Oraria</th>
                <th>Previsione</th>
                <th>Allerta</th>
              </tr>
            </thead>
            <tbody>
              <?php // Formattazione delle date 
                $oggi = date('d-m-Y', strtotime($dati_previsione[0]->Data)); 
                $domani = date('d-m-Y',strtotime($oggi.' +'."1".' days'));          
              ?>              
              <?php if(isset($previsioni)) : foreach($previsioni as $row): ?>
              <tr>
                <td><?php echo $oggi; ?> </td>
                <td><?php echo $dati_previsione[0]->Ora; ?> </td>
                <td><?php echo $row->zona; ?></td>
                <td>
                  <?php 
                    switch ($row->ID_fasciaoraria) {
                      case "1": echo "Dalle 12:00 alle 15:00 del "; echo $oggi; break;
                      case "2": echo "Dalle 15:00 alle 18:00 del "; echo $oggi; break;
                      case "3": echo "Dalle 18:00 alle 21:00 del "; echo $oggi; break;
                      case "4": echo "Dalle 21:00 alle 24:00 del "; echo $oggi; break;
                      case "5": echo "Dalle 00:00 alle 03:00 del "; echo $domani; break;
                      case "6": echo "Dalle 03:00 alle 06:00 del "; echo $domani; break;
                      case "7": echo "Dalle 06:00 alle 09:00 del "; echo $domani; break;
                      case "8": echo "Dalle 09:00 alle 12:00 del "; echo $domani; break;
                      case "9": echo "Dalle 12:00 alle 15:00 del "; echo $domani; break;
                      case "10": echo "Dalle 15:00 alle 18:00 del "; echo $domani; break;
                      case "11": echo "Dalle 18:00 alle 21:00 del "; echo $domani; break;
                      case "12": echo "Dalle 21:00 alle 24:00 del "; echo $domani; break;
                      default: break;
                    }
                  ?>
                </td>
                <td>
                  <?php 
                    switch ($row->ID_tipoprevisione) {
                      case "0": echo "Nessuna Precipitazione"; break;
                      case "1": echo "FS"; break;
                      case "2": echo "FD"; break;
                      default: break;
                    }
                  ?>                    
                </td>
                <td>
                  <?php 
                    switch ($row->ID_tipoprevisione) {
                      case "0": echo "Verde"; break;
                      case "1": echo "Gialla"; break;
                      case "2": echo "Arancione"; break;
                      default: break;
                    }
                  ?>
                </td>
              </tr> 
              <?php endforeach; ?>
              <?php else : ?>
              <h3> Non ci sono previsioni effettuate da questo utente. </h3>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>  
    </div>

    <div class = "col-md-4">
      <div class = "x_panel">
        <div class = "x_title">
          <h3> <small> Zone di vigilanza </small></h3>
        </div>
        <div class = "x_content">
          <img src="<?php echo base_url();?>images/Immagine.jpg">
        </div>
      </div>
    </div>
  </div>

  <!-- Pulsanti per confermare le previsioni o tornare indietro alla compilazione -->
  <div class="row">
    <div class ="col-md-12">                 
      <button type="submit" class="btn btn-success submit pull-right">Conferma previsioni</button>
        <?php echo anchor('site/ricompila_previsioni', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>

<!-- Datatables -->
<script>
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
            {
              extend: "copy",
              className: "btn-xs"
            },
            {
              extend: "csv",
              className: "btn-xs"
            },
            {
              extend: "excel",
              className: "btn-xs"
            },
            {
              extend: "print",
              className: "btn-xs"
            },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
      keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });

    $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
      'order': [[ 1, 'asc' ]],
      'columnDefs': [
        { orderable: false, targets: [0] }
      ]
    });
    $datatable.on('draw.dt', function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green'
      });
    });

    TableManageButtons.init();
  });
</script>