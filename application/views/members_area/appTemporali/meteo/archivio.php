<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-9 col-xs-12">
        <div class="x_panel">
          <h3>Archivio previsioni</h3>
          <div class="bs-example-popovers">
            <?php 
              if(isset($messaggio))  {
                echo '<div class="row"><div class="col-md-6"><div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.$messaggio.'</div></div></div>';
              } 
              else if(isset($messaggioerrore))  {
                echo '<div class="row"><div class="col-md-6"><div class="alert alert-danger alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.$messaggioerrore.'</div></div></div>';
   
              }     
            ?> 
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-3 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="rivediPrevisioni">
                    <i class="fa fa-database"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Archivio tue previsioni</h3>
            <p>
              Rivedi tutte le previsioni che hai fatto.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="previsioniTutti">
                    <i class="fa fa-book"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Confronto previsioni</h3>
            <p>
              Vedi le previsioni di tutti gli utenti, in forma anonima.
            </p>
          </div>
        </div>
      </div>      
      <div class="col-md-3 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="inserisciDati">
                    <i class="fa fa-plus-square"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Inserisci dati </h3>
            <p>
              Inserisci dati storici relativi a tue previsioni.
            </p>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#rivediPrevisioni').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/archivio/ricercaperutente");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#previsioniTutti').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/archivio/ricerca_tutto");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#inserisciDati').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/archivio/inserisci_dati_storici");
    })
  });
</script>