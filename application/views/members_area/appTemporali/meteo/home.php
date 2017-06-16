<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <h3>Home page meteorologo</h3>
          <div class="bs-example-popovers">
            <?php 
              if(isset($messaggio))  {
                echo '<div class="row"><div class="col-md-9"><div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.$messaggio.'</div></div></div>';
              } 
              else if(isset($messaggioerrore))  {
                echo '<div class="row"><div class="col-md-9"><div class="alert alert-danger alert-dismissible fade in" role="alert">
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
                  <a style="float: none;" id="faiPrevisioni">
                    <i class="fa fa-cloud"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Le tue previsioni</h3>
            <p>
              Fai le tue previsioni sulle precipitazioni di oggi e domani.
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
                  <a style="float: none;" id="archivioPrevisioni">
                    <i class="fa fa-archive"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Archivio previsioni</h3>
            <p>
              Rivedi tutte le previsioni o inserisci dati storici.
            </p>
          </div>
        </div>
      </div>       
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#faiPrevisioni').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/site/meteorologo");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#archivioPrevisioni').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/archivio/mostra_menu_archivio");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#previsioniTutti').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/Ricerche/ricerca_tutto");
    })
  });
</script>