<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Magasasa</title>

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
  <link href="css/form.css" rel="stylesheet">

<style type="text/css">

#services{

  background:#eee;
}

#portfolio #portfolio-flters
{
  padding: 0;
margin: 0 0 45px 0;
list-style: none;
text-align: center;
}
#portfolio #portfolio-flters li:hover, #portfolio #portfolio-flters li.filter-activ
{
  background: #2dc997;
  color: #fff;
}
 #portfolio #portfolio-flters li 
  {
    cursor: pointer;
    margin: 0 10px;
    display: inline-block;
    padding: 10px 22px;
    font-size: 12px;
    line-height: 20px;
    color: #fe4a49;
    border-radius: 4px;
    text-transform: uppercase;
    background: transparent;
    margin-bottom: 5px;
    transition: all 0.3s ease-in-out;
    border:2px solid #fe4a49;
  }
.ratio-4-3{
  width:100%;
  background-repeat: no-repeat;
  background-position: 50% 50%; 
  background-size:cover;
  background-clip:content-box;
}
.ratio-4-3:before{
    display:block;
    content:"";
    padding-top:75%;
}
.language-img {
    max-height: 20px;
}
 #mainNav .nav-item .lang-btn{
  background: none;
  border:none;
  padding: 10px 20px !important;
}
.nav-item .dropdown-menu{
  min-width: auto;
  width: auto;
  background: rgba(255,255,255,0.5);
  float: none;
}
.tradition-image{
  width: 100%;
  height: 100%;
}
.btn-social {
    width: 3.25rem;
    height: 3.25rem;
    font-size: 1.25rem;
    line-height: 2rem;
}
.m-b-50 {
    margin-bottom: 50px;
}
.makereservation .form-group label {
    font-weight: 600;
}
.reservation-input{
  height: 52px;
  font-size: 16px;
  background-color: transparent;
    border: none;
    border-bottom: 2px solid #fff;
    border-radius: 0px;
    padding-left: 20px;
    width: 100%;
}
.ftco-footer-widget .open-hours li span {
    width: 100%;
    line-height: 3.25rem;
    font-weight: 300;
}
.lead{
  font-size: inherit !important;
}
.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    z-index: 1;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.3);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 0s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0.2;
        border-radius: 50%;
    }

}
.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
.guide-choice{
  padding-top: 100px;
  padding-bottom: 100px;
  color: #fff;
}
.guide-choice-classy{
  background-color: #FF8C00;
}
.guide-choice-classy .fa-inverse{
  color: #FF8C00 !important;
}

.guide-choice-culture{
  background-color: #be0000;
}
.guide-choice-culture .fa-inverse{
  color: #be0000 !important;
}
.guide-choice-reserve{
  background-color: #6B8E23;
}
.guide-choice-reserve .fa-inverse{
  color: #6B8E23 !important;
}
.info-address{
  background-color: #6B8E23;
  color: #fff;
}
.info-reserve{
  background-color: #fe4a49;
  color: #fff;
}
.info-dish-block{
  background:linear-gradient(
                     rgba(0,0,0, .6), 
                     rgba(0,0,0, .6)),url('img/kylling.jpeg');
  background-size:cover;
  background-position: center center; 
  min-height: 400px;
  position: relative;
}
.info-menu-block{
  background:linear-gradient(
                     rgba(0,0,0, .6), 
                     rgba(0,0,0, .6)),url('img/menu.jpeg');
  background-size:cover;
  background-position: center center;
  min-height: 400px;
  position: relative;

}
.info-dish, .info-menu{
    width: 100%;
    min-height: 400px;
    height: 100%;
}
a.info-title{
  position: absolute;
  top:50%;
  left: 50%;
  margin-top: -40px;
  margin-left: -40px;
  display: inline-block;
  vertical-align:middle;
  text-align: center;
  font-size: 40px;
  text-decoration: none;
  font-weight: bold;
  color:#fff;
}
a.info-title:hover{
    text-decoration: none;
}
.info-main-block{
padding:60px 40px !important;
}

.animatable {
  
  /* initially hide animatable objects */
  visibility: hidden;
  
  /* initially pause animatable objects their animations */
  -webkit-animation-play-state: paused;   
  -moz-animation-play-state: paused;     
  -ms-animation-play-state: paused;
  -o-animation-play-state: paused;   
  animation-play-state: paused; 
}

/* show objects being animated */
.animated {
  visibility: visible;
  
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;

  -webkit-animation-play-state: running;
  -moz-animation-play-state: running;
  -ms-animation-play-state: running;
  -o-animation-play-state: running;
  animation-play-state: running;
}

/* CSS Animations (extracted from http://glifo.uiparade.com/) */
@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
  } 100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}

@-moz-keyframes fadeInDown {
  0% {
    opacity: 0;
    -moz-transform: translateY(-20px);
  }

  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}

@-o-keyframes fadeInDown {
  0% {
    opacity: 0;
    -o-transform: translateY(-20px);
  }

  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}



@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  60% {
    opacity: 0;
  }
  20% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
  }
  60% {
    -webkit-transform: translateX(20px);
  }

  80% {
    -webkit-transform: translateX(-5px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}

@-moz-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -moz-transform: translateX(-2000px);
  }

  60% {
    -moz-transform: translateX(20px);
  }

  80% {
    -moz-transform: translateX(-5px);
  }

  100% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}

@-o-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -o-transform: translateX(-2000px);
  }

  60% {
    opacity: 1;
    -o-transform: translateX(20px);
  }

  80% {
    -o-transform: translateX(-5px);
  }

  100% {
    opacity: 1;
    -o-transform: translateX(0);
  }
}

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    transform: translateX(-2000px);
  }

  60% {
    transform: translateX(20px);
  }

  80% {
    transform: translateX(-5px);
  }

  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
  }

  60% {
    -webkit-transform: translateX(-20px);
  }

  80% {
    -webkit-transform: translateX(5px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}

@-moz-keyframes bounceInRight {
  0% {
    opacity: 0;
    -moz-transform: translateX(2000px);
  }

  60% {
    -moz-transform: translateX(-20px);
  }

  80% {
    -moz-transform: translateX(5px);
  }

  100% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}

@-o-keyframes bounceInRight {
  0% {
    opacity: 0;
    -o-transform: translateX(2000px);
  }

  60% {
    -o-transform: translateX(-20px);
  }

  80% {
    -o-transform: translateX(5px);
  }

  100% {
    opacity: 1;
    -o-transform: translateX(0);
  }
}

@keyframes bounceInRight {
  0% {
    opacity: 0;
    transform: translateX(2000px);
  }

  60% {
    transform: translateX(-20px);
  }

  80% {
    transform: translateX(5px);
  }

  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
  } 100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}

@-moz-keyframes fadeInUp {
  0% {
    opacity: 0;
    -moz-transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}

@-o-keyframes fadeInUp {
  0% {
    opacity: 0;
    -o-transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(.3);
  }
  50% {
    -webkit-transform: scale(1.05);
  }

  70% {
    -webkit-transform: scale(.9);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}

@-moz-keyframes bounceIn {
  0% {
    opacity: 0;
    -moz-transform: scale(.3);
  }

  50% {
    -moz-transform: scale(1.05);
  }

  70% {
    -moz-transform: scale(.9);
  }

  100% {
    opacity: 1;
    -moz-transform: scale(1);
  }
}

@-o-keyframes bounceIn {
  0% {
    opacity: 0;
    -o-transform: scale(.3);
  }

  50% {
    -o-transform: scale(1.05);
  }

  70% {
    -o-transform: scale(.9);
  }

  100% {
    opacity: 1;
    -o-transform: scale(1);
  }
}

@keyframes bounceIn {
  0% {
    opacity: 0;
    transform: scale(.3);
  }

  50% {
    transform: scale(1.05);
  }

  70% {
    transform: scale(.9);
  }

  100% {
    opacity: 1;
    transform: scale(1);
  }
}
@-webkit-keyframes moveUp {
  0% {
    opacity: 1;
    -webkit-transform: translateY(40px);
  } 100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}

@-moz-keyframes moveUp {
  0% {
    opacity: 1;
    -moz-transform: translateY(40px);
  }

  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}

@-o-keyframes moveUp {
  0% {
    opacity: 1;
    -o-transform: translateY(40px);
  }

  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}

@keyframes moveUp {
  0% {
    opacity: 1;
    transform: translateY(40px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@-webkit-keyframes fadeBgColor {
  0%{
    background:none;
  }
  70%{
    background:none;
  }
  100%{
    background:#464646;
  }
}
@-o-keyframes fadeBgColor {
  0%{
    background:none;
  }
  70%{
    background:none;
  }
  100%{
    background:#464646;
  }
}
@keyframes fadeBgColor {
  0%{
    background:none;
  }
  70%{
    background:none;
  }
  100%{
    background:#464646;
  }
}

.animated.animationDelay{
  animation-delay:.4s;
  -webkit-animation-delay:.4s;
}
.animated.animationDelayMed{
  animation-delay:1.2s;
  -webkit-animation-delay:1.2s;
}
.animated.animationDelayLong{
  animation-delay:1.6s;
  -webkit-animation-delay:1.6s;
}
.animated.fadeBgColor {
  -webkit-animation-name: fadeBgColor;
  -moz-animation-name: fadeBgColor;
  -o-animation-name: fadeBgColor;
  animation-name: fadeBgColor;
}
.animated.bounceIn {
  -webkit-animation-name: bounceIn;
  -moz-animation-name: bounceIn;
  -o-animation-name: bounceIn;
  animation-name: bounceIn;
}
.animated.bounceInRight {
  -webkit-animation-name: bounceInRight;
  -moz-animation-name: bounceInRight;
  -o-animation-name: bounceInRight;
  animation-name: bounceInRight;
}
.animated.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  -moz-animation-name: bounceInLeft;
  -o-animation-name: bounceInLeft;
  animation-name: bounceInLeft;
}
.animated.fadeIn {
  -webkit-animation-name: fadeIn;
  -moz-animation-name: fadeIn;
  -o-animation-name: fadeIn;
  animation-name: fadeIn;
}
.animated.fadeInDown {
  -webkit-animation-name: fadeInDown;
  -moz-animation-name: fadeInDown;
  -o-animation-name: fadeInDown;
  animation-name: fadeInDown;
}
.animated.fadeInUp {
  -webkit-animation-name: fadeInUp;
  -moz-animation-name: fadeInUp;
  -o-animation-name: fadeInUp;
  animation-name: fadeInUp;
}
.animated.moveUp {
  -webkit-animation-name: moveUp;
  -moz-animation-name: moveUp;
  -o-animation-name: moveUp;
  animation-name: moveUp;
}
.reserve-btn{
  border:2px solid #fff;
  color: #fff;
}
.makereservation .form-group label{
  width: 100%;
}
.portfolio-name{
  position: absolute;
  bottom:0px;
  height: 50px;
  width: 100%;
  line-height: 50px;
  z-index: 3;
  background: linear-gradient(to left, rgba(85, 67, 70, 0.85), rgba(69, 80, 91, 0.85));
  color: #fff;
  text-align: center;
  font-size: 20px;
}

</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Magasasa</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="menu.php" target="_blank">菜单</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#services">Guide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#portfolio">经典美食</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#info">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="tradition.php">中华文化</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="language-img" src="img/china.jpg">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <button class="nav-link language-btn py-3 px-0 px-lg-3 rounded lang-btn" onclick="window.location.href='index.php?lang=uk'" type="button">
                  <img class="language-img" src="img/china.jpg"></button>
              <div class="dropdown-divider"></div>
              <button class="nav-link language-btn py-3 px-0 px-lg-3 rounded lang-btn" onclick="window.location.href='index.php?lang=uk'" type="button">
                  <img class="language-img" src="img/eng.jpg"></button>
              <div class="dropdown-divider"></div>
              <button class="nav-link language-btn py-3 px-0 px-lg-3 rounded lang-btn" onclick="window.location.href='index.php?lang=dk'" type="button">
                  <img class="language-img" src="img/dk.jpg"></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>