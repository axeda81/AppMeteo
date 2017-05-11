<!-- page content 

  Codifica dei nomi dei gruppi di radio button: ogni gruppo avrà name = "foXzY"
  con X = da 1 a 6, le varie fasce orarie: 1 = "Oggi 12-18", 6 = "Domani 18-24"
  e Y = da 1 a ...? le diverse zone nell'ordine in cui sono presentate nella view -->

<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Compilazione previsioni</h3>
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

    <div class = "row">
      <div class ="col-md-9">

        <!-- ZONA 60 -->
        <div class="row">
          <div class ="col-md-12">
            <div class = "x_panel">
              <div class="x_title">
                <h3> <small> <?php echo $zona60; ?> </small></h3>
              </div>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo2z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo3z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo4z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo5z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo6z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                     <?php $indice++; ?>
                  </div>
                </div>  
              </div>
              </br>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo8z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo9z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo10z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo11z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo12z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z1" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                     <?php $indice++; ?>
                  </div>
                </div>  
              </div>
            </div> 
          </div>
        </div>

        <!-- ZONA 61 -->
        <div class="row">
          <div class ="col-md-12">
            <div class = "x_panel">
              <div class="x_title">
                <h3> <small> <?php echo $zona61; ?> </small></h3>
              </div>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo2z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo3z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo4z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo5z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo6z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
              </br>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo8z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo9z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo10z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo11z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo12z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z2" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
            </div> 
          </div>
        </div>

        <!-- ZONA 62 -->
        <div class="row">
          <div class ="col-md-12">
            <div class = "x_panel">
              <div class="x_title">
                <h3> <small> <?php echo $zona62; ?> </small></h3>
              </div>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo2z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo3z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo4z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo5z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo6z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
              </br>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo8z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo9z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo10z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo11z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo12z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z3" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
            </div> 
          </div>
        </div>

        <!-- ZONA 63 -->
        <div class="row">
          <div class ="col-md-12">
            <div class = "x_panel">
              <div class="x_title">
                <h3> <small> <?php echo $zona63; ?> </small></h3>
              </div>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo2z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo3z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo4z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo5z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo6z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
              </br>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo8z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo9z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo10z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo11z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo12z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z4" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
            </div> 
          </div>
        </div>

        <!-- ZONA 64 -->
        <div class="row">
          <div class ="col-md-12">
            <div class = "x_panel">
              <div class="x_title">
                <h3> <small> <?php echo $zona64; ?> </small></h3>
              </div>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo1z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo2z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo2z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo3z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo3z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo4z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo4z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; if ($fuoriorario==true) echo "disabled";?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo5z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo5z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo6z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo6z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
              </br>
              <div class = "row">
                <div class ="col-md-2">
                  <div class="form-group">
                    <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                    <div class="">
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo7z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo8z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo8z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo9z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo9z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo10z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo10z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo11z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo11z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
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
                        <label><input type="radio" class="flat" name="fo12z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 0) echo "checked"; ?> value = "0"> <?php echo $prev0; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 1) echo "checked"; ?> value = "1">  <?php echo $prev1; ?> </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" class="flat" name="fo12z5" <?php if ($previsioni[$indice]->ID_tipoprevisione == 2) echo "checked"; ?> value = "2">  <?php echo $prev2; ?> </label>
                      </div>
                    </div> 
                    <?php $indice++; ?>
                  </div>
                </div>  
              </div>
            </div> 
          </div>
        </div>

      </div>

      <div class = "col-md-3">
        <div class = "x_panel">
          <div class = "x_title">
            <h3> <small> Mappa zone di vigilanza </small></h3>
          </div>
          <div class = "x_content">
            <img src="<?php echo base_url();?>images/Immagine.jpg">
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="x_panel">
          <div class="form-group">
           <div class="x_title">
              <h3> <small> Sei di turno oggi? </small></h3> 
           </div> 
            <p>
              <?php 
                if(isset($inTurno)) : 
              ?>
                  SI <input type="radio" class="flat" name="turno" <?php if ($inTurno[0] == "1") echo "checked"; ?> value = "1" />
                  NO <input type="radio" class="flat" name="turno" <?php if ($inTurno[0] == "0") echo "checked"; ?> value = "0" />
              <?php 
                endif;
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="x_panel">
          <div class="form-group">
            <button type="submit" class="btn btn-success submit pull-right">Rivedi e conferma previsioni</button>
            <button type="reset" class="btn btn-primary pull-right">Clear</button>
            <?php echo form_close(); ?>
          </div> 
        </div>     
      </div>
    </div>
  </div>
</div>

<!-- /page content -->