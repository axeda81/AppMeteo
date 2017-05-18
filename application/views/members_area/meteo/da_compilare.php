<!-- page content 

  Codifica dei nomi dei gruppi di radio button: ogni gruppo avrà name = "foXzY"
  con X = da 1 a 12, le varie fasce orarie: 1 = "Oggi 12-15", ... , 12 = "Domani 21-24"
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

    <?php // Definizione variabili
      $zona60 = "Zona 60";
      $zona61 = "Zona 61";
      $zona62 = "Zona 62";
      $zona63 = "Zona 63";
      $zona64 = "Zona 64";

      $prev0 = "No temporali";
      $prev1 = "Temporali sparsi";
      $prev2 = "Temporali diffusi";

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

    <?php echo form_open('Site/salva_dati', array('class' => 'form-horizontal form-label-left')); ?>

    <div class="x_content">
      <div class="row">

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
                              <label><input type="radio" checked name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled"; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled"; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled"; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled"; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled"; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled"; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo5z1" <?php if (isset($fo5z1) && $fo5z1=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z1" <?php if (isset($fo5z1) && $fo5z1=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z1" <?php if (isset($fo5z1) && $fo5z1=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo6z1" <?php if (isset($fo6z1) && $fo6z1=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z1" <?php if (isset($fo6z1) && $fo6z1=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z1" <?php if (isset($fo6z1) && $fo6z1=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>  
                    </div>
                    </br></br></br>
                    <div class = "row">
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo7z1" <?php if (isset($fo7z1) && $fo7z1=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z1" <?php if (isset($fo7z1) && $fo7z1=="1") echo "checked "; ;?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z1" <?php if (isset($fo7z1) && $fo7z1=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo8z1" <?php if (isset($fo8z1) && $fo8z1=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z1" <?php if (isset($fo8z1) && $fo8z1=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z1" <?php if (isset($fo8z1) && $fo8z1=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo9z1" <?php if (isset($fo9z1) && $fo9z1=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z1" <?php if (isset($fo9z1) && $fo9z1=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z1" <?php if (isset($fo9z1) && $fo9z1=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo10z1" <?php if (isset($fo10z1) && $fo10z1=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z1" <?php if (isset($fo10z1) && $fo10z1=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z1" <?php if (isset($fo10z1) && $fo10z1=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo11z1" <?php if (isset($fo11z1) && $fo11z1=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z1" <?php if (isset($fo11z1) && $fo11z1=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z1" <?php if (isset($fo11z1) && $fo11z1=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo12z1" <?php if (isset($fo12z1) && $fo12z1=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z1" <?php if (isset($fo12z1) && $fo12z1=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z1" <?php if (isset($fo12z1) && $fo12z1=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>  
                    </div>
                    </br></br>
                  </div> 
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab61">
              <div class="row">
                <div class ="col-md-12">
                  <div class = "x_panel">
                    <div class="row">
                    </br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo5z2" <?php if (isset($fo5z2) && $fo5z2=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?></label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z2" <?php if (isset($fo5z2) && $fo5z2=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z2" <?php if (isset($fo5z2) && $fo5z2=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo6z2" <?php if (isset($fo6z2) && $fo6z2=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z2" <?php if (isset($fo6z2) && $fo6z2=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z2" <?php if (isset($fo6z2) && $fo6z2=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div> 
                    </div>
                    </br></br></br>
                    <div class="row">
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo7z2" <?php if (isset($fo7z2) && $fo7z2=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z2" <?php if (isset($fo7z2) && $fo7z2=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z2" <?php if (isset($fo7z2) && $fo7z2=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>              
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo8z2" <?php if (isset($fo8z2) && $fo8z2=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z2" <?php if (isset($fo8z2) && $fo8z2=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z2" <?php if (isset($fo8z2) && $fo8z2=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo9z2" <?php if (isset($fo9z2) && $fo9z2=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z2" <?php if (isset($fo9z2) && $fo9z2=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z2" <?php if (isset($fo9z2) && $fo9z2=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo10z2" <?php if (isset($fo10z2) && $fo10z2=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z2" <?php if (isset($fo10z2) && $fo10z2=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z2" <?php if (isset($fo10z2) && $fo10z2=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo11z2" <?php if (isset($fo11z2) && $fo11z2=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?></label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z2" <?php if (isset($fo11z2) && $fo11z2=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z2" <?php if (isset($fo11z2) && $fo11z2=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo12z2" <?php if (isset($fo12z2) && $fo12z2=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z2" <?php if (isset($fo12z2) && $fo12z2=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z2" <?php if (isset($fo12z2) && $fo12z2=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div> 
                    </div>
                    </br></br>
                  </div> 
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab62">
              <div class="row">
                <div class ="col-md-12">
                  <div class = "x_panel">
                    <div class="row">
                    </br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo5z3" <?php if (isset($fo5z3) && $fo5z3=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z3" <?php if (isset($fo5z3) && $fo5z3=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z3" <?php if (isset($fo5z3) && $fo5z3=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo6z3" <?php if (isset($fo6z3) && $fo6z3=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z3" <?php if (isset($fo6z3) && $fo6z3=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z3" <?php if (isset($fo6z3) && $fo6z3=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div> 
                    </div> 
                    </br>
                    <div class="row">
                    </br></br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo7z3" <?php if (isset($fo7z3) && $fo7z3=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z3" <?php if (isset($fo7z3) && $fo7z3=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z3" <?php if (isset($fo7z3) && $fo7z3=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo8z3" <?php if (isset($fo8z3) && $fo8z3=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z3" <?php if (isset($fo8z3) && $fo8z3=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z3" <?php if (isset($fo8z3) && $fo8z3=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo9z3" <?php if (isset($fo9z3) && $fo9z3=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z3" <?php if (isset($fo9z3) && $fo9z3=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z3" <?php if (isset($fo9z3) && $fo9z3=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo10z3" <?php if (isset($fo10z3) && $fo10z3=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z3" <?php if (isset($fo10z3) && $fo10z3=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z3" <?php if (isset($fo10z3) && $fo10z3=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo11z3" <?php if (isset($fo11z3) && $fo11z3=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z3" <?php if (isset($fo11z3) && $fo11z3=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z3" <?php if (isset($fo11z3) && $fo11z3=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo12z3" <?php if (isset($fo12z3) && $fo12z3=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z3" <?php if (isset($fo12z3) && $fo12z3=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z3" <?php if (isset($fo12z3) && $fo12z3=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div> 
                    </div> 
                    </br></br>
                  </div> 
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab63">
              <div class="row">
                <div class ="col-md-12">
                  <div class = "x_panel">
                    <div class="row">
                    </br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo5z4" <?php if (isset($fo5z4) && $fo5z4=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z4" <?php if (isset($fo5z4) && $fo5z4=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z4" <?php if (isset($fo5z4) && $fo5z4=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo6z4" <?php if (isset($fo6z4) && $fo6z4=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z4" <?php if (isset($fo6z4) && $fo6z4=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z4" <?php if (isset($fo6z4) && $fo6z4=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div> 
                    </div> 
                    </br>
                    <div class="row">
                    </br></br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo7z4" <?php if (isset($fo7z4) && $fo7z4=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z4" <?php if (isset($fo7z4) && $fo7z4=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z4" <?php if (isset($fo7z4) && $fo7z4=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo8z4" <?php if (isset($fo8z4) && $fo8z4=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z4" <?php if (isset($fo8z4) && $fo8z4=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z4" <?php if (isset($fo8z4) && $fo8z4=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo9z4" <?php if (isset($fo9z4) && $fo9z4=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z4" <?php if (isset($fo9z4) && $fo9z4=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z4" <?php if (isset($fo9z4) && $fo9z4=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo10z4" <?php if (isset($fo10z4) && $fo10z4=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z4" <?php if (isset($fo10z4) && $fo10z4=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z4" <?php if (isset($fo10z4) && $fo10z4=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo11z4" <?php if (isset($fo11z4) && $fo11z4=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z4" <?php if (isset($fo11z4) && $fo11z4=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z4" <?php if (isset($fo11z4) && $fo11z4=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo12z4" <?php if (isset($fo12z4) && $fo12z4=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z4" <?php if (isset($fo12z4) && $fo12z4=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z4" <?php if (isset($fo12z4) && $fo12z4=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div> 
                    </div> 
                    </br></br>
                  </div> 
                </div>
              </div>            
            </div>
            <div class="tab-pane" id="tab64">
              <div class="row">
                <div class ="col-md-12">
                  <div class = "x_panel">
                    <div class="row">
                    </br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="0") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="1") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="2") echo "checked "; if ($fuoriorario=="true") echo "disabled";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia5; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo5z5" <?php if (isset($fo5z5) && $fo5z5=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z5" <?php if (isset($fo5z5) && $fo5z5=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo5z5" <?php if (isset($fo5z5) && $fo5z5=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia6; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo6z5" <?php if (isset($fo6z5) && $fo6z5=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z5" <?php if (isset($fo6z5) && $fo6z5=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo6z5" <?php if (isset($fo6z5) && $fo6z5=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>  
                    </div>  
                    </br>
                    <div class="row">
                    </br></br>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia7; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo7z5" <?php if (isset($fo7z5) && $fo7z5=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z5" <?php if (isset($fo7z5) && $fo7z5=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo7z5" <?php if (isset($fo7z5) && $fo7z5=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia8; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo8z5" <?php if (isset($fo8z5) && $fo8z5=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z5" <?php if (isset($fo8z5) && $fo8z5=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo8z5" <?php if (isset($fo8z5) && $fo8z5=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia9; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo9z5" <?php if (isset($fo9z5) && $fo9z5=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z5" <?php if (isset($fo9z5) && $fo9z5=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo9z5" <?php if (isset($fo9z5) && $fo9z5=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia10; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo10z5" <?php if (isset($fo10z5) && $fo10z5=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z5" <?php if (isset($fo10z5) && $fo10z5=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo10z5" <?php if (isset($fo10z5) && $fo10z5=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia11; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo11z5" <?php if (isset($fo11z5) && $fo11z5=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z5" <?php if (isset($fo11z5) && $fo11z5=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo11z5" <?php if (isset($fo11z5) && $fo11z5=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>
                      <div class ="col-md-2">
                        <div class="form-group">
                          <label class="control-label text-navy"><?php echo $fascia12; ?></label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" checked name="fo12z5" <?php if (isset($fo12z5) && $fo12z5=="0") echo "checked ";?> value = "0"> <?php echo $prev0; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z5" <?php if (isset($fo12z5) && $fo12z5=="1") echo "checked ";?> value = "1"> <?php echo $prev1; ?> </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="fo12z5" <?php if (isset($fo12z5) && $fo12z5=="2") echo "checked ";?> value = "2"> <?php echo $prev2; ?> </label>
                            </div>
                          </div> 
                        </div>
                      </div>  
                    </div>
                    </br></br>             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="x_panel">
                <div class="form-group">
                  <h5>Sei di turno oggi? </h5>
                    SI <input type="radio" name="turno" id="turnoS" value="1" required /> 
                    NO <input type="radio" name="turno" id="turnoN" value="0" />
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="x_panel">
                <div class="form-group">
                  <?php echo form_submit('submit', 'Rivedi e conferma previsioni', array('class' => 'btn btn-success submit pull-right')); ?>
                  <?php echo anchor('Site/meteorologo', 'Reset', array('class' => 'btn btn-primary pull-right')); ?>           
                  <?php echo form_close(); ?>
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
</div>

<!-- /page content -->