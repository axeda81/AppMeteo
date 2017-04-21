<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Vuoi davvero eliminare le tue previsioni di oggi?</h3>
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
  <?php echo form_open('site/annulla_previsioni', array('class' => 'form-horizontal form-label-left')); ?>
  <div class="row">
    <div class ="col-md-4">                 
      <button type="submit" class="btn btn-danger submit pull-left">Conferma</button>
        <?php echo anchor('site/ricompila_previsioni', 'No', array('class' => 'btn btn-primary pull-left')); ?>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>