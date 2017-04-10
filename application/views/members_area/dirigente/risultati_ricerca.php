<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Risultati della ricerca</h3>
            <?php 
              if(!isset($result))  {
                echo '<div class="alert alert-warning" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span>';
                echo "La ricerca non ha prodotto risultati. ";
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
                <th>In turno</th>
                <th>Zona</th>
                <th>Fascia Oraria</th>
                <th>Previsione</th>
                <th>Allerta</th>
                <th>Utente</th>
              </tr>
            </thead>
            <tbody>        
              <?php if(isset($result)) : foreach($result as $row): 
                $oggi = date('d-m-Y', strtotime($row->Data)); 
                $domani = date('d-m-Y',strtotime($oggi.' +'."1".' days'));          
              ?>
              <tr>
                <td><?php echo $oggi ?> </td>
                <td><?php echo $row->Ora; ?> </td>
                <td><?php 
                    if($row->inTurno == "0") echo "NO";
                    else echo "SI";
                ?> </td>
                <td><?php echo $row->zona; ?></td>
                <td>
                  <?php 
                    switch ($row->ID_fasciaoraria) {
                      case "1": echo "Dalle 12:00 alle 18:00 del "; echo $oggi; break;
                      case "2": echo "Dalle 18:00 alle 24:00 del "; echo $oggi; break;
                      case "3": echo "Dalle 00:00 alle 06:00 del "; echo $domani; break;
                      case "4": echo "Dalle 06:00 alle 12:00 del "; echo $domani; break;
                      case "5": echo "Dalle 12:00 alle 18:00 del "; echo $domani; break;
                      case "6": echo "Dalle 18:00 alle 24:00 del "; echo $domani; break;
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
                <td>
                  <?php
                    $utente = $this->utenti_model->nome_da_id($row->ID_utente); 
                    echo "$utente->Nome $utente->Cognome";
                   ?>
                </td>
              </tr> 
              <?php endforeach; ?>
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
    <!-- Pulsanti per confermare le previsioni o tornare indietro alla compilazione -->
    <div class="row">
      <div class ="col-md-8">                 
        <?php echo anchor('archivio/ricercadirigente', 'Nuova ricerca', array('class' => 'btn btn-success pull-right')); ?>
        <?php echo anchor('site/members_area', 'Torna alla home', array('class' => 'btn btn-primary pull-right')); ?>
      </div>
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
