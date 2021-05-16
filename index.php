<!DOCTYPE html>
<html lang="en">
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Mijn Portfolio </title>


<meta name="theme-color" content="#45e0ff">

<meta name="msapplication-navbutton-color" content="#45e0ff">

<meta name="apple-mobile-web-app-status-bar-style" content="#45e0ff">

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/060b795035.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body style="background-color: black">

<div class="bg"> 

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #474747!important; position: static; height: 8.2%; width: 100%;">
  <a class="navbar-brand" href="index.php">HOME.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="certificaten.php">CERTIFICATEN. <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="review.php">REVIEWS.</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TIPS.
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: grey;">
          <a class="dropdown-item" href="frontend.php">.FRONTEND</a>
          <a class="dropdown-item" href="backend.php">.BACKEND</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<script>
$(document).ready(function(){
  $(".navbar-toggler").click(function(){
    $("#container").toggle(1000);
  });
});
</script>

<header id="section">
<br>
  <h1>Alen Tarabar</h1>
</header>

<div class="flex-container">

<div class="flex-links"> <a class="btn btn-primary btn-lg" href="opdrachten/applicaties.html" target="_blank">.APPLICATIES</a> </div> 
<div class="flex-center"> <a class="btn btn-primary btn-lg" href="Resume.html" target="_blank">.CV.</a> </div>
<div class="flex-rechts"> <a class="btn btn-primary btn-lg" href="#section2">FORMULIER.</a> </div>

</div>

<div class="main" id="section1">

<div id="section2">
<hr> <h1 style="text-shadow: 3px 3px black;"> Beoordeling Form <a href="#"> <i class="fas fa-angle-double-up" style="font-size: 3rem"></i> </a> </h1>
<?php

include('review_form.php');

?>

</div>
<br>
<center>
<div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; height: 5%; background-color: #279e94; color: white; text-align: center;">
<p>LinkedIn <a href="https://www.linkedin.com/in/alen-tarabar-543a55159/" style="font-size: 2.2rem !important;" class="fab fa-linkedin"></a> Gmail <a href="mailto:alen97tarabar@gmail.com" style="font-size: 2.2rem !important;" class="fas fa-envelope"></a></p>
</div>
</center>
</div>
</body>
</html>