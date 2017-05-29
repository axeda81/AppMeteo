<!-- page content 

  Codifica dei nomi dei gruppi di radio button: ogni gruppo avrà name = "foXzY"
  con X = da 1 a 6, le varie fasce orarie: 1 = "Oggi 12-18", 6 = "Domani 18-24"
  e Y = da 1 a ...? le diverse zone nell'ordine in cui sono presentate nella view -->

<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class ="col-md-9">
        <div class="x_panel">
          <h3>Compilazione dati storici previsioni</h3>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <?php echo form_open('Site/aggiorna_dati', array('class' => 'form-horizontal form-label-left')); ?>
    <?php // Definizione variabili
      $zona60 = "Zona 60";
      $zona61 = "Zona 61";
      $zona62 = "Zona 62";
      $zona63 = "Zona 63";
      $zona64 = "Zona 64";
      $prev0 = "No temporali";
      $prev1 = "Temporali sparsi";
      $prev2 = "Temporali diffusi";
      $indice = 0; // Variabile che mi serve a tenere il "segno" in $previsioni, lo incremento dopo ogni gruppo di radio button 

      if(isset($fasceorarie)) : 
        $fascia1 = $fasceorarie[0]->fasciaoraria;
        $fascia2 = $fasceorarie[1]->fasciaoraria;
        $fascia3 = $fasceorarie[2]->fasciaoraria;
        $fascia4 = $fasceorarie[3]->fasciaoraria;
        $fascia5 = $fasceorarie[4]->fasciaoraria;
        $fascia6 = $fasceorarie[5]->fasciaoraria;
        $fascia7 = $fasceorarie[6]->fasciaoraria;
        $fascia8 = $fasceorarie[7]->fasciaoraria;
        $fascia9 = $fasceorarie[8]->fasciaoraria;
        $fascia10 = $fasceorarie[9]->fasciaoraria;
        $fascia11 = $fasceorarie[10]->fasciaoraria;
        $fascia12 = $fasceorarie[11]->fasciaoraria;
      endif;

    ?>

    <div class="x_content">

      <div class="col-xs-1">
        <!-- Nav tabs - uno per ogni zona -->
        <ul class="nav nav-tabs tabs-left">
          <li class="active"><a href="#tab60" data-toggle="tab"><h3> <small> <?php echo $zona60; ?> </small></h3></a>
          </li>
          <li><a href="#tab61" data-toggle="tab"><h3> <small> <?php echo $zona61; ?> </small></h3></a>
          </li>
          <li><a href="#tab62" data-toggle="tab"><h3> <small> <?php echo $zona62; ?> </small></h3></a>
          </li>
          <li><a href="#tab63" data-toggle="tab"><h3> <small> <?php echo $zona63; ?> </small></h3></a>
          </li>
          <li><a href="#tab64" data-toggle="tab"><h3> <small> <?php echo $zona64; ?> </small></h3></a>
          </li>          
        </ul>
      </div>
      <div class="col-xs-8">
        <!-- Tab panes - uno per ogni zona -->
      <div class="tab-content">
        <div class="tab-pane active" id="tab60">
          <div class="row">
            <div class ="col-md-12">
              <div class = "x_panel">
                <div class = "row">
                </br>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo1z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo1z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo1z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                      <?php if ($fuoriorario==false) $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo2z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo2z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo2z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                      <?php if ($fuoriorario==false) $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo3z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo3z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo3z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                      <?php if ($fuoriorario==false) $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo4z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo4z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo4z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                      <?php if ($fuoriorario==false) $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo5z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo5z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo5z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                      <?php $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo6z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo6z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo6z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>  
                </div>  
                </br>
                <div class = "row">
                </br></br>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo7z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo7z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo7z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo8z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo8z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo8z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo9z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo9z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo9z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo10z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo10z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo10z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo11z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo11z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo11z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>
                  <div class ="col-md-2">
                    <div class="form-group">
                      <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                      <div class="">
                        <div class="radio">
                          <label><input type="radio" name="fo12z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo12z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="fo12z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                        </div>
                      </div> 
                       <?php $indice++; ?>
                    </div>
                  </div>  
                </div>
                </br>
              </div>
            </div>
          </div>
        </div>

          <div class="tab-pane" id="tab61">
            <div class="row">
              <div class ="col-md-12">
                <div class = "x_panel">
                  <div class = "row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo1z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo2z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo3z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo4z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo5z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo6z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                  <div class = "row">
                  </br></br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo7z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo8z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo9z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo10z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo11z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo12z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                </div> 
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab62">
            <div class="row">
              <div class ="col-md-12">
                <div class = "x_panel">
                  <div class = "row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo1z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo2z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo3z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo4z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo5z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo6z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                  <div class = "row">
                  </br></br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo7z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo8z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo9z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo10z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo11z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo12z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                </div> 
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab63">
            <div class="row">
              <div class ="col-md-12">
                <div class = "x_panel">
                  <div class = "row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo1z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo2z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo3z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo4z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo5z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo6z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                  <div class = "row">
                  </br></br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo7z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo8z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo9z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo10z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo11z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo12z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                </div> 
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab64">
            <div class="row">
              <div class ="col-md-12">
                <div class = "x_panel">
                  <div class = "row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo1z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo2z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo3z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo4z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php if ($fuoriorario==false) $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo5z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo5z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo6z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo6z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                  <div class = "row">
                  </br></br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo7z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo7z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo8z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo8z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo9z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo9z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo10z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo10z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo11z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo11z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" name="fo12z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked "; ?> value = "1">  <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo12z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked "; ?> value = "2">  <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                        <?php $indice++; ?>
                      </div>
                    </div>  
                  </div>
                  </br>
                </div> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="x_panel">
                <div class="form-group">
                  <h5>Sei di turno oggi? </h5>
                  <?php 
                    if(isset($inTurno)) : 
                  ?>
                      SI <input type="radio" name="turno" <?php if ($inTurno[0] == "1") echo "checked "; ?> value = "1" />
                      NO <input type="radio" name="turno" <?php if ($inTurno[0] == "0") echo "checked "; ?> value = "0" />
                  <?php 
                    endif;
                  ?>
                </div>             
              </div>
            </div>
            <div class="col-md-8">
              <div class="x_panel">
                <div class="form-group">
                  <?php echo form_submit('submit', 'Rivedi e conferma dati', array('class' => 'btn btn-success submit pull-right')); ?>
                  <?php echo anchor('archivio/inserisciDati', 'Reset', array('class' => 'btn btn-primary pull-right')); ?>
                  <?php echo anchor('Archivio/mostra_menu_archivio', 'Indietro', array('class' => 'btn btn-default pull-right')); ?>

                  <?php echo form_close(); ?>
                </div> 
              </div>     
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-3">
        <div class = "x_panel">
          <div class = "x_title">
            <h3> <small> Mappa zone di vigilanza </small></h3>
          </div>
          <div class = "x_content pull-right">
            <img src="<?php echo base_url();?>images/Immagine.jpg">
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<!-- /page content -->