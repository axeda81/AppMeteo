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
    <?php echo form_open('site/salva_dati', array('class' => 'form-horizontal form-label-left')); ?>
    <?php // Definizione variabili
      $zona60 = "Zona 60";
      $zona61 = "Zona 61";
      $zona62 = "Zona 62";
      $zona63 = "Zona 63";
      $zona64 = "Zona 64";
      $fascia1 = "Oggi 12:00 - 18:00";
      $fascia2 = "Oggi 18:00 - 24:00";
      $fascia3 = "Domani 00:00 - 06:00";
      $fascia4 = "Domani 06:00 - 12:00";
      $fascia5 = "Domani 12:00 - 18:00";
      $fascia6 = "Domani 18:00 - 24:00";
      $prev0 = "No temporali";
      $prev1 = "Temporali sparsi";
      $prev2 = "Temporali diffusi";
    ?>

    <div class = "row">
      <div class ="col-md-8">

        <!-- ZONA 60 -->
        <div class="row">
          <div class ="col-md-12">
            <div class = "x_panel">
              <div class="x_title">
                <h3> <small> <?php echo $zona60; ?> </small></h3>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo5z1" <?php if (isset($fo5z1) && $fo5z1=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z1" <?php if (isset($fo5z1) && $fo5z1=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z1" <?php if (isset($fo5z1) && $fo5z1=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo6z1" <?php if (isset($fo6z1) && $fo6z1=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z1" <?php if (isset($fo6z1) && $fo6z1=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z1" <?php if (isset($fo6z1) && $fo6z1=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
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
                <h3> <small> <?php echo $zona61; ?>  </small></h3>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo5z2" <?php if (isset($fo5z2) && $fo5z2=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z2" <?php if (isset($fo5z2) && $fo5z2=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z2" <?php if (isset($fo5z2) && $fo5z2=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo6z2" <?php if (isset($fo6z2) && $fo6z2=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z2" <?php if (isset($fo6z2) && $fo6z2=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z2" <?php if (isset($fo6z2) && $fo6z2=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
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
                <h3> <small> <?php echo $zona62; ?>  </small></h3>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo5z3" <?php if (isset($fo5z3) && $fo5z3=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z3" <?php if (isset($fo5z3) && $fo5z3=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z3" <?php if (isset($fo5z3) && $fo5z3=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo6z3" <?php if (isset($fo6z3) && $fo6z3=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z3" <?php if (isset($fo6z3) && $fo6z3=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z3" <?php if (isset($fo6z3) && $fo6z3=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
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
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo5z4" <?php if (isset($fo5z4) && $fo5z4=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z4" <?php if (isset($fo5z4) && $fo5z4=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z4" <?php if (isset($fo5z4) && $fo5z4=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo6z4" <?php if (isset($fo6z4) && $fo6z4=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z4" <?php if (isset($fo6z4) && $fo6z4=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z4" <?php if (isset($fo6z4) && $fo6z4=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
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
                <h3> <small> <?php echo $zona64; ?>  </small></h3>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="0") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="1") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="2") echo "checked"; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo5z5" <?php if (isset($fo5z5) && $fo5z5=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z5" <?php if (isset($fo5z5) && $fo5z5=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo5z5" <?php if (isset($fo5z5) && $fo5z5=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>
              <div class ="col-md-2">
                <div class="form-group">
                  <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                  <div class="">
                    <div class="radio">
                      <label><input type="radio" class="flat" checked name="fo6z5" <?php if (isset($fo6z5) && $fo6z5=="0") echo "checked";?> value = "0"> <?php echo $prev0; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z5" <?php if (isset($fo6z5) && $fo6z5=="1") echo "checked";?> value = "1"> <?php echo $prev1; ?> </label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" class="flat" name="fo6z5" <?php if (isset($fo6z5) && $fo6z5=="2") echo "checked";?> value = "2"> <?php echo $prev2; ?> </label>
                    </div>
                  </div> 
                </div>
              </div>   
            </div> 
          </div>
        </div>
      </div>

      <div class = "col-md-4">
        <div class = "x_panel">
          <div class = "x_title">
            <h3> <small> Zone di vigilanza </small></h3>
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
              SI <input type="radio" class="flat" name="turno" id="turnoS" value="SI" required /> 
              NO <input type="radio" class="flat" name="turno" id="turnoN" value="NO" />
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