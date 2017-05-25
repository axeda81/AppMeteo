<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class ="col-md-8">
        <div class="x_panel">
          <h3>Elenco degli utenti presenti</h3>    
            <?php 
            if(isset($messaggio))  {
                echo '<div class="row">';
                echo '<div class="col-md-9 alert alert-success fade in" role="alert"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>';
                echo $messaggio;
                echo '</div></div>';
              } 
            ?> 
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class = "row">
    <div class ="col-md-8">
      <div class="x_panel">
        <div class="x_content">
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
                  <a href="<?php echo base_url().'index.php/gestioneutenti/elimina/'.$row->ID; ?>"><i class="fa fa-trash"></i></a>
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
        </div>
      </div>  
    </div>
    <!-- Pulsanti per confermare o tornare indietro alla compilazione -->
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