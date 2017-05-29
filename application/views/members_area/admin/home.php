<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-6">
        <div class="x_panel">
          <h3>Home page amministrazione</h3>
          <?php 
          if(isset($messaggio))  {
              echo '<div class="row">';
              echo '<div class="col-md-6 alert alert-success fade in" role="alert"> 
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
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-3 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="gestioneUtenti">
                    <i class="fa fa-archive"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Gestione utenti</h3>
            <p>
              Vedi o modifica gli utenti esistenti, crea o elimina utenti.
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
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#gestioneUtenti').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/gestioneutenti/amministra_utenti");
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
