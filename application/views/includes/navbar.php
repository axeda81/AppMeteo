<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a href="<?php echo base_url();?>index.php/site/members_area"><i class="fa fa-home"></i></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Bentornato, <?php echo $this->session->userdata('nome'); ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><?php echo anchor('site/members_area', 'Home'); ?></li>
            <li><?php echo anchor('gestioneutenti/mostra_profilo', 'Il tuo profilo'); ?></li>
            <li><?php echo anchor('site/istruzioni', 'Istruzioni per l\'uso'); ?></li>
            <li><?php echo anchor('login/logout', 'Logout'); ?></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->