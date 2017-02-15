<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Home page meteorologo</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-4 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="faiPrevisioni">
                    <i class="fa fa-sun-o"></i>
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
      <div class="col-md-4 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="rivediPrevisioni">
                    <i class="fa fa-archive"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Archivio previsioni</h3>
            <p>
              Rivedi tutte le previsioni che hai fatto.
            </p>
          </div>
        </div>
      </div>      
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-12 widget widget_tally_box">
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
            <h3 class="name">Il tuo profilo </h3>
            <p>
              Vedi o modifica i tuoi dati personali.
            </p>
          </div>
        </div>
      </div>  
      <div class="col-md-4 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="previsioniTutti">
                    <i class="fa fa-folder-o"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Confronto previsioni</h3>
            <p> Vedi le previsioni di tutti gli utenti, in forma anonima.</p>
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
    $('#rivediPrevisioni').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/archivio/ricercaperutente");
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

<script type="text/javascript">
  $(document).ready(function() {
    $('#previsioniTutti').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/archivio/ricerca_tutti");
    })
  });
</script>