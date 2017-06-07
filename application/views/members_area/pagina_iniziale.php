<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <h3>Home page</h3>
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
                  <a style="float: none;" id="appTemporali">
                    <i class="fa fa-umbrella"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Bollettino Temporali</h3>
            <p>
              Previsioni sui temporali.
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
                  <a style="float: none;" id="app2">
                    <i class="fa fa-question"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Applicazione 2</h3>
            <p>
              Descrizione applicazione 2.
            </p>
          </div>
        </div>
      </div>         
    </div>

    <div class="row">
      <div class="col-md-3 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="profilo">
                    <i class="fa fa-user"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Il tuo profilo</h3>
            <p>
              Vedi o modifica i tuoi dati personali.
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
                  <a style="float: none;" id="app3">
                    <i class="fa fa-question"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Applicazione 3</h3>
            <p>
              Descrizione applicazione 3.
            </p>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#appTemporali').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/site/members_area_temporali");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#app2').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/site/members_area");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#app3').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/site/members_area");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#profilo').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/gestioneutenti/mostra_profilo");
    })
  });
</script>