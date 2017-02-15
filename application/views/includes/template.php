<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('includes/header'); ?>	
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php $this->load->view('includes/navbar'); ?>
			<?php $this->load->view($content); ?>
		</div>
	</div>
	<?php $this->load->view('includes/footer'); ?>
</body>
</html>