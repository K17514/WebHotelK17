<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url ('home/halamanutama')?>">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php
			if (session()->get('level')==1) { 
				?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-inboxes-fill"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('gudang/fancytipekamar')?>">
              <i class="bi bi-circle"></i><span>Tipe Kamar</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilkamar')?>">
              <i class="bi bi-circle"></i><span>Kamar</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilpemesanan')?>">
              <i class="bi bi-circle"></i><span>Pemesanan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilpelanggan')?>">
              <i class="bi bi-circle"></i><span>Pelanggan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilnota')?>">
              <i class="bi bi-circle"></i><span>Nota</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilkaryawan')?>">
              <i class="bi bi-circle"></i><span>Karyawan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <?php } 
			if (session()->get('level')==2) {
				?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Karyawan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('gudang/tampilpelanggan')?>">
              <i class="bi bi-circle"></i><span>Pelanggan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/fancytipekamar')?>">
              <i class="bi bi-circle"></i><span>Tipe Kamar</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilpemesanan')?>">
              <i class="bi bi-circle"></i><span>Pemesanan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gudang/tampilnota')?>">
              <i class="bi bi-circle"></i><span>Nota</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <?php  }
			if (session()->get('level')==3) {
				?>
        
          <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('gudang/fancytipekamar')?>">
          <i class="bi bi-moon-stars-fill"></i>
          <span>Pesan</span>
        </a>
      </li>
      <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('gudang/tampilpemesanan2')?>">
              <i class="bi bi-circle"></i><span>Riwayat Pemesanan</span>
            </a>
          </li>
      <?php }
        ?>

      <li class="nav-heading">Pages</li>

      <?php
      if (session()->get('level')<1) {
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url ('home/login')?>">
          <i class="bi bi-key"></i>
          <span>Login</span>
        </a>
      </li>
      <?php }
        ?><!-- End Dashboard Nav -->
      
      <?php
      if (session()->get('level')>0) {
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('gudang/profile')?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <?php }
        ?><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('home/pagesfaq')?>">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
      <!-- End Blank Page Nav -->

    </ul>

  </aside>