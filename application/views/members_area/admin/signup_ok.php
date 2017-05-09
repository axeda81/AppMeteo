<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <?php 
              if(isset($messaggio))  {
                echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
                echo $messaggio;
                echo '</div></div>';
              } 
            ?> 
            <?php 
              if(isset($messaggioerrore))  {
                echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
                echo $messaggioerrore;
                echo '</div></div>';
              } 
            ?>             
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
      <div class = "row">
       <div class="col-md-4 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="home">
                    <i class="fa fa-home"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name"> Home </h3>
            <p> Torna alla homepage. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#home').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/site/members_area");
    })
  });
</script>
