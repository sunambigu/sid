<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->


  <!-- Template Main CSS File -->


  <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:<?= Yii::$app->params['adminEmail']; ?>"><?= Yii::$app->params['adminEmail']; ?></a>
        <i class="icofont-phone"></i> <?= Yii::$app->params['adminHp']; ?>
        <i class="icofont-google-map"></i> <?= Yii::$app->params['address']; ?>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/"><?= Html::encode(Yii::$app->name) ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



      <nav class="nav-menu d-none d-lg-block">
        <?php
          $menuItems = [
              ['label' => '<i class="icofont-home"></i>', 'encode' => false, 'url' => ['/site/index']],
              ['label' => 'Tentang', 'url' => ['/site/about']],
              ['label' => 'Kontak', 'url' => ['/site/contact']],
          ];
          if (Yii::$app->user->isGuest) {
              $menuItems[] = ['label' => 'Daftar', 'url' => ['/site/signup']];
              $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
          } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
          }
          echo Nav::widget([
              'options' => ['class' => ''],
              'items' => $menuItems,
          ]);
        ?>

      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto">Lihat Layanan</a>

    </div>
  </header><!-- End Header -->

  <?php if ( Yii::$app->controller->id."/".Yii::$app->controller->action->id == "site/index"): ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <!-- <div class="container">
      <h1>Welcome to Medilab</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div> -->
    <img src="/img/WEB_PKTD-02.jpg" width="100%">
  </section><!-- End Hero -->

  <main id="main">

    <?= $content ?>

  </main><!-- End #main -->

  <?php else: ?>

    <main id="main">
      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2><?= Html::encode($this->title) ?></h2>
            <?= Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
          </div>

        </div>
      </section><!-- End Breadcrumbs Section -->

      <?= $content ?>

    </main><!-- End #main -->

  <?php endif; ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?= Html::encode(Yii::$app->name) ?></h3>
            <p>
              <?= Yii::$app->params['address']; ?> <br>
              93232<br>
              Indonesia <br><br>
              <strong>Phone:</strong> <?= Yii::$app->params['adminHp']; ?><br>
              <strong>Email:</strong> <?= Yii::$app->params['adminEmail']; ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan Bermanfaat</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ketentuan Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Data Kependudukan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Data BLT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Program Kerja Desa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BUMDES</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>SID</h4>
            <p>Dari Kampus Untuk Desa. Dari Desa Untuk Indonesia</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Hak Cipta <strong><span>UHO</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  
  <!-- Template Main JS File -->
  
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>