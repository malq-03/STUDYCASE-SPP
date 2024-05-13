<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Aplikasi SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span> Dashboard</span></a>
            </li>

            <?php if ($_SESSION['level'] == "admin") { ?>
              <li class="menu-header">Pengelolaan Data</li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> DATA PETUGAS</span></a></li>
                <li><a class="nav-link" href="../data_kelas/read.php"><i class="far fa-square"></i> <span> DATA KELAS</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> DATA SISWA</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> DATA SPP</span></a></li>
                <li class="menu-header">Transaksi</li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> Transksi Pembayaran</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> History Pembayaran</span></a></li>

              <?php } elseif ($_SESSION['level'] == "petugas") { ?>
                <li class="menu-header">Transaksi</li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> Transksi Pembayaran</span></a></li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> History Pembayaran</span></a></li>
              <?php } else { ?>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span> History Pembayaran</span></a></li>
            <?php } ?>
          </ul>    
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-ou-alert-alt"></i> logout
            </a>
          </div>
        </aside>
</div>
