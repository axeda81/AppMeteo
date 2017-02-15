<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Elenco degli utenti presenti</h3>    
              <?php 
                if(isset($messaggio))  {
                  echo '<div class="row">';
                  echo '<div class="col-md-9 alert alert-success" role="alert"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="sr-only"></span>';
                  echo $messaggio;
                  echo '</div></div>';
                } 
              ?>                  
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
        <div class="x_content">
          <?php echo form_open();?>
            <table id="datatable-checkbox" class="table table-striped table-bordered">
              <thead>
                	<tr>
                		<th>Azioni</th>
                  	<th>Nome</th>
                  	<th>Cognome</th>
                  	<th>Username</th>
                  	<th>Tipo utente</th>
                	</tr>
              </thead>
              <tbody>
              	<?php if(isset($users)) : foreach($users as $row): ?> 
              	   <tr>
                    <td> 
                      <a href="<?php echo base_url().'index.php/gestioneutenti/visualizza_utente/'.$row->ID; ?>"><i class="fa fa-edit"></i>&nbsp;</a>
                      <a href="<?php echo base_url().'index.php/gestioneutenti/elimina/'.$row->ID; ?>"><i class="fa fa-trash"></i>&nbsp;</a>
                    </td>  
                    <td><?php echo $row->nome; ?> </td>
                    <td><?php echo $row->cognome; ?> </td>
                    <td><?php echo $row->username; ?> </td>
                    <td>                  
  	                  <?php 
  		                  switch ($row->tipo) {
  		                    case "0": echo "Meteorologo"; break;
  		                    case "1": echo "Dirigente"; break;
  		                    case "2": echo "Amministratore"; break;
  		                    default: break;
  		                  }
  	                	?> 
                    </td>
                  </tr>
                <?php endforeach; ?>
  				      <?php else : ?>
  					       <h3> Non ci sono utenti a parte l'amministratore. </h3>
  				      <?php endif; ?>
              </tbody>
            </table>
          <?php echo form_close(); ?>
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
        <?php echo anchor('gestioneutenti/amministra_utenti', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
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
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
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
        	'select': true,
          	'order': [[ 1, 'asc' ]],
          	'columnDefs': [{ orderable: false, targets: [0] }]       
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>