<?php
include 'index.php';
// var_dump($_GET['page']);
// die();
$renderedPage = $_GET['page'];
$title = explode("/",$renderedPage);
$newTitle = explode(".",$title['1']);
$headingTitle = $newTitle[0];
// var_dump($headingTitle);
// die();

// var_dump($renderedPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I-shop | <?php echo $headingTitle; ?></title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">

</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <?php include "layout/sidebar.php" ?>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <?php include "layout/header.php" ?>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <!-- lets render pages dynamically -->
      <?php include $renderedPage ?>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2021 © Indigo-Devs Creation - <a href="#" target="_blank"
          rel="noopener noreferrer">indigoregime.com</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Opportunities</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="./plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="./js/script.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/owljs.js"></script>
<script src="./owlcarousel/owl.carousel.min.js"></script>
</body>

</html>