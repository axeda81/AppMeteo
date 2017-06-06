<div class="right_col" role="main" >
  <div class="row">
    <div class ="col-md-8">
      <div class="x_panel">
        <h3>Compilazione previsioni</h3>
         <?php 
          if(isset($messaggioerrore))  {
            echo '<div class="row"><div class="col-md-6">';
            echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
            echo $messaggioerrore;
            echo '</div></div></div>';
          } 
        ?>                     
      </div>
      <div class="clearfix"></div>
      <div class="x_panel">
        <div class="x_content">
          <?php echo form_open('site/conferma_dati', array('class' => 'form-horizontal form-label-left')); ?>
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
                      case "0": echo "No temporali"; break;
                      case "1": echo "Temporali sparsi"; break;
                      case "2": echo "Temporali diffusi"; break;
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
          <div class="clearfix"></div>
          <?php if(isset($previsioni)) : ?>
            <?php if(isset($inTurno)) : ?>
              <div class = "row">
                <div class = "x_title"></div>
                <div class = "col-md-3">
                  <p class = "text-muted well well-sm no-shadow">
                    <?php
                      if ($inTurno == 1) {echo "Oggi sei di turno"; }
                      else if ($inTurno == 0) {echo "Oggi non sei di turno"; }
                    ?>
                  </p>
                </div>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <!-- Pulsanti per confermare le previsioni o tornare indietro alla compilazione -->
        <div class="row">
          <div class ="col-md-12">                 
            <button type="submit" class="btn btn-success submit pull-right">Conferma previsioni</button>
            <?php echo anchor('site/ricompila_previsioni', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
            <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target=".bs-example-modal-sm">Annulla previsioni</button> 
            <!-- Modal che appare per chiedere conferma dell'annullamento delle previsioni -->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">Conferma annullamento</h4>
                  </div>
                  <div class="modal-body">
                    <p>Vuoi davvero annullare le tue previsioni di oggi? L'operazione non è reversibile. </p>
                  </div>
                  <div class="modal-footer">           
                    <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                    <?php echo anchor('site/annulla_previsioni', 'SI', array('class' => 'btn btn-primary')); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
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
</div>

<!-- Datatables -->
<script>
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({

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

