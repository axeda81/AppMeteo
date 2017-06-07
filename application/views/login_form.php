<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AppMeteo | Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>css/custom.min.css" rel="stylesheet">
  </head>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
			   <?php echo form_open('login/validate'); ?>
         <h1>Login</h1>
			   <div>
           <?php echo form_input('username', '', array('type' => 'text', 'class'=>'form-control', 'placeholder'=>'Username', 'required'=>'', 'id' => 'username')); ?>
         </div>
         <div>
           <?php echo form_password('password', '', array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'required' =>'', 'id'=> 'password')); ?>
         </div>
         <div>
           <?php echo form_submit('submit', 'Accedi', array('class' => 'btn btn-default btn-lg submit pull-right')); ?>
         </div>
         <div class="clearfix"></div>
        </section>
        <?php 
          if(isset($messaggioerrore)) {
            echo '<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span>';
            echo $messaggioerrore;
          } 
        ?>
      </div>
    </div>
  </div>
</body>
</html>