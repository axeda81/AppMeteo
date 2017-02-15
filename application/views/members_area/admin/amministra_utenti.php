<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Gestione Utenti</h3>
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
                  <a style="float: none;" id="creaNuovoUtente">
                    <i class="fa fa-user"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Crea nuovo utente</h3>
            <p>
              Aggiungi un nuovo utente al sistema.
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
                  <a style="float: none;" id="modificaUtenti">
                    <i class="fa fa-edit"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Modifica/Elimina Utenti</h3>
            <p>
              Modifica o elimina uno o più utenti dal sistema.
            </p>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#creaNuovoUtente').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/gestioneutenti/crea");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#modificaUtenti').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/gestioneutenti/elenco_utenti");
    })
  });
</script>
