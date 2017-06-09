<!-- page content -->

<div class="right_col" role="main">
  <div class="row">
    <div class ="col-md-8">
      <div class="x_panel">
        <h3>Compilazione dati storici previsioni </h3><h4><small class="pull-left"><i> Passo 2 - inserisci le previsioni. </i></small></h4>
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
        endif;
				
				// $fuoriOrario $numFasceOrarie
				echo form_open('Archivio/conferma_dati_storici', array('class' => 'form-horizontal form-label-left')); 
			?>

 			<div class="x_content">
        <div class="row">
          <div class="col-md-2 col-xs-2">
            <!-- Nav tabs - uno per ogni zona -->
            <ul class="nav nav-tabs tabs-left">
              <li class="active"><a href="#tab60" data-toggle="tab"><h4> <?php echo $zona60; ?> </h4></a>
              </li>
              <li><a href="#tab61" data-toggle="tab"><h4> <?php echo $zona61; ?> </h4></a>
              </li>
              <li><a href="#tab62" data-toggle="tab"><h4> <?php echo $zona62; ?> </h4></a>
              </li>
              <li><a href="#tab63" data-toggle="tab"><h4> <?php echo $zona63; ?> </h4></a>
              </li>
              <li><a href="#tab64" data-toggle="tab"><h4> <?php echo $zona64; ?> </h4></a>
              </li>          
            </ul>
          </div>
          <div class="col-xs-10">
            <!-- Tab panes - uno per ogni zona -->
            <div class="tab-content">
              <div class="tab-pane active" id="tab60">
                <div class="x_panel">
                  <div class = "row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z1" <?php if (isset($fo1z1) && $fo1z1=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z1" <?php if (isset($fo2z1) && $fo2z1=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="0") echo "checked ";  ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="1") echo "checked ";  ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z1" <?php if (isset($fo3z1) && $fo3z1=="2") echo "checked ";  ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="0") echo "checked ";  ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="1") echo "checked ";  ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z1" <?php if (isset($fo4z1) && $fo4z1=="2") echo "checked ";  ?> value = "2"> <?php echo $prev2; ?> </label>
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
                  </br></br></br></br></br></br>
                </div>
              </div>
              <div class="tab-pane" id="tab61">
                <div class="x_panel">
                  <div class="row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z2" <?php if (isset($fo1z2) && $fo1z2=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z2" <?php if (isset($fo2z2) && $fo2z2=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z2" <?php if (isset($fo3z2) && $fo3z2=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z2" <?php if (isset($fo4z2) && $fo4z2=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
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
                  </br></br></br></br></br></br>
                </div>
              </div>
              <div class="tab-pane" id="tab62">
                <div class="x_panel">
                  <div class="row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z3" <?php if (isset($fo1z3) && $fo1z3=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z3" <?php if (isset($fo2z3) && $fo2z3=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z3" <?php if (isset($fo3z3) && $fo3z3=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z3" <?php if (isset($fo4z3) && $fo4z3=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
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
                  </br></br></br></br></br></br>
                </div>
              </div>
              <div class="tab-pane" id="tab63">
                <div class = "x_panel">
                  <div class="row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z4" <?php if (isset($fo1z4) && $fo1z4=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z4" <?php if (isset($fo2z4) && $fo2z4=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z4" <?php if (isset($fo3z4) && $fo3z4=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z4" <?php if (isset($fo4z4) && $fo4z4=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
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
                  </br></br></br></br></br></br>
                </div> 
              </div>
              <div class="tab-pane" id="tab64">
                <div class = "x_panel">
                  <div class="row">
                  </br>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia1; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo1z5" <?php if (isset($fo1z5) && $fo1z5=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia2; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo2z5" <?php if (isset($fo2z5) && $fo2z5=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia3; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo3z5" <?php if (isset($fo3z5) && $fo3z5=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class ="col-md-2">
                      <div class="form-group">
                        <label class="control-label text-navy"><?php echo $fascia4; ?></label>
                        <div class="">
                          <div class="radio">
                            <label><input type="radio" checked name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="0") echo "checked "; ?> value = "0"> <?php echo $prev0; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="1") echo "checked "; ?> value = "1"> <?php echo $prev1; ?> </label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="fo4z5" <?php if (isset($fo4z5) && $fo4z5=="2") echo "checked "; ?> value = "2"> <?php echo $prev2; ?> </label>
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
                  </br></br></br></br></br></br>           
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-xs-12">
          	<div class="x_panel">
            	<div class="form-group">
              	<?php echo form_submit('submit', 'Rivedi e conferma dati', array('class' => 'btn btn-success submit pull-right')); ?>
              	<?php echo anchor('archivio/inserisciDati', 'Reset', array('class' => 'btn btn-primary pull-right')); ?>
              	<?php echo anchor('Archivio/dati_storici_passo1', 'Indietro', array('class' => 'btn btn-default pull-right')); ?>          
              	<?php echo form_close(); ?>
            	</div> 
          	</div>
          </div>
        </div>
      </div>
    </div>
    <div class = "col-md-4">
      <div class = "x_panel">
        <div class = "x_title">
          <h3><small> Zone di vigilanza </small></h3>
        </div>
        <div class = "x_content">
          <img src="<?php echo base_url();?>images/Immagine.jpg">
        </div>
      </div>
    </div>
	</div>
</div>