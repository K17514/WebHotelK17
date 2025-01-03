<!DOCTYPE html>
<html>
<head>
  <title>Elysium Hotel</title>
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css');?>">    
<script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('font/css/fontawesome.min.css');?>">   
<link rel="stylesheet" type="text/css" href="<?= base_url('font/css/all.css');?>">


</head>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ELYSIUM HOTEL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url ('img/elysium-logo.png')?>" rel="icon">
  <link href="<?= base_url ('img/elysium-logo.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url ('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?= base_url ('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?= base_url ('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?= base_url ('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
  <link href="<?= base_url ('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
  <link href="<?= base_url ('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?= base_url ('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url ('assets/css/style.css')?>" rel="stylesheet">
  <script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link href="<?= base_url ('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url ('home/halamanutama')?>" class="logo d-flex align-items-center">
        <img src="<?=base_url('img/elysium-logo.png')?>" style="width: 45px; height: auto;" alt="">
        <span class="d-none d-lg-block">ELYSIUM HOTEL</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>DISCLAMER</h4>
                <p>Stalker around, beware of your surrounding.</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>QUEST FAILED</h4>
                <p>Compesation will now be taken, reduced 1000 point.</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>ON THE RIGHT TRACK</h4>
                <p>Keep on going and act normal, complete the quest.</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>KEEP IN MIND</h4>
                <p>Player will achieve 'DEATH' when point reaches 0.</p>
                <p>1 yrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?=base_url('img/yuki.png')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Yuki</h4>
                  <p>Come to SEKAI, I want to meet you....</p>
                  <p>1 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?=base_url('img/amia.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Amia</h4>
                  <p>Ryuku, you won't believe what just happened....</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li class="message-item">
              <a href="#">
                <img src="<?=base_url('img/isagi.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Isagi Yoichi</h4>
                  <p>Ryuku, where have you been? I haven't seen you since....</p>
                  <p>6 mths. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
             <img src="<?= base_url('img/' . ($foto ?: 'default-profile.png')) ?>" alt="" width="35px" height="35px" style="object-fit: cover; border-radius: 50%;">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $name ?></span>
          </a><!-- End Profile Iamge Icon -->

          <?php
      if (session()->get('level')>0) {
        ?>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $name?></h6>
              <span>14000 Points</span>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url ('gudang/profile')?>">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url ('gudang/profile')?>">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url ('home/pagesfaq')?>">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('gudang/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
          <?php }
        ?><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  <main id="main" class="main">