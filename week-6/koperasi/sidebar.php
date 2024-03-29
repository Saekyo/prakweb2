  <?php
  $page = $_REQUEST['page'];
  ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Reski Junaidi Shalat</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=product" class="nav-link 
                <?php echo $page == 'product' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=productCategory" class="nav-link
                <?php echo $page == 'productCategory' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=vendor" class="nav-link
                <?php echo $page == 'vendor' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=card" class="nav-link
                <?php echo $page == 'card' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kartu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=customer" class="nav-link
                <?php echo $page == 'customer' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=purchase" class="nav-link
                <?php echo $page == 'purchase' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=payment" class="nav-link
                <?php echo $page == 'payment' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=order" class="nav-link
                <?php echo $page == 'order' ? 'active': NULL ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesanan</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="index.php" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>
            </ul>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>