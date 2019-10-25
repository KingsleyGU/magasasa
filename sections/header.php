<?php
require("api/getTitles.php");
if(!isset($_COOKIE["lang"])) {
    $_COOKIE["lang"]="UK";
} 
$titleArray = array();
$aboutArray = array();
if($_COOKIE["lang"] == "CN")
{
  $titleArray = $titleArrayCN;
}
elseif($_COOKIE["lang"] == "UK")
{
  $titleArray = $titleArrayUK;
}
else
{
  $titleArray = $titleArrayDK;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CCTaste</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="vendor/bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
  <link href="css/customized.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">


<style type="text/css">


</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">CC Taste</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="menu.php" target="_blank"><?php echo $titleArray["menu"];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#services">Guide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#portfolio"><?php echo $titleArray["classic"];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="tradition.php"><?php echo $titleArray["culture"];?></a>
          </li>          
          <li class="nav-item">
            <a class="nav-link btn btn-primary js-scroll-trigger" href="index.php#reserve"><?php echo $titleArray["book"];?></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="language-img" src="img/china.jpg">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <button class="nav-link language-btn py-3 px-0 px-lg-3 rounded lang-btn" onclick="updateLang('CN')" type="button">
                  <img class="language-img" src="img/china.jpg"></button>
              <div class="dropdown-divider"></div>
              <button class="nav-link language-btn py-3 px-0 px-lg-3 rounded lang-btn" onclick="updateLang('UK')" type="button">
                  <img class="language-img" src="img/eng.jpg"></button>
              <div class="dropdown-divider"></div>
              <button class="nav-link language-btn py-3 px-0 px-lg-3 rounded lang-btn" onclick="updateLang('DK')" type="button">
                  <img class="language-img" src="img/dk.jpg"></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>