<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; overflow-y: auto; top: 0; bottom: 0;">
      <!-- Brand Logo -->
      <div class="brand-link">
        <span class="brand-text font-weight-bold">Mandiri Utama Finance</span>
        <!-- <img src="<?php echo base_url(); ?>assets/img/logo-muf.png" alt="" height="70px" width="132px"> -->
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- menu lead form -->
        
             <li class="nav-item">
            
              <!-- <a href="#" class="nav-item">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Report OID
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>  -->
              <!-- <ul class="nav nav-treeview"> -->
              <li class="nav-item">
                  <a href="<?= site_url('manage_oid/individu_index') ?>" class="nav-link <?php echo ($this->uri->segment(1) == 'index') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Manage OID Individu</p>
                  </a>
                </li>
              <!-- </ul> -->
              <li class="nav-item">
                  <a href="<?= site_url('approval_oid/individu_index') ?>" class="nav-link <?php echo ($this->uri->segment(1) == 'index') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Approval OID Individu</p>
                  </a>
                </li>
              <!-- <ul class="nav nav-treeview"> -->
                <li class="nav-item">
                  <a href="<?= site_url('report_oid/individu_index') ?>" class="nav-link <?php echo ($this->uri->segment(1) == 'C_lead_form/index_mos') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Report OID Individu</p>
                  </a>
                </li>
              <!-- </ul> -->
              <!-- <ul class="nav nav-treeview"> -->
                
              <!-- </ul> -->
             </li> 
            <!-- end of menu lead form -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <input type="hidden" id="base_url" value=<?php echo base_url(); ?>>