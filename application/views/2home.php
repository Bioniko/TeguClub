<!DOCTYPE html>
<html>
<head>
<title>TeguClub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="<?php echo base_url();?>Tema/NiceAdmin/assets/img/favicon.png" rel="icon">
<link href="<?php echo base_url();?>Tema/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card" style="text-align: center">
    <img src="<?php echo base_url();?>estilos/images/teguclub.png" style="width: 40%">
    <!-- Float links to the right. Hide them on small screens -->
   
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/comercio.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Comercios</h3>
  </div>


  

 
  <?php
  foreach ($emp as $emp) {
    if($emp){
      if($emp->emp_id != 2){
  ?>
  <a class="w3-row-padding " href="<?php echo base_url();?>index.php/Dindex/Show?emp=<?php echo $emp->emp_id;?>">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $emp->emp_logo; ?>" alt="John" style="width:100%">
      <h3><?php echo $emp->emp_nombre;?></h3>
      <p class="w3-opacity"></p>
      <p><?php echo $emp->emp_descripcion; ?></p>
      <p><button class="w3-button w3-light-grey w3-block">Ingresar</button></p>
    </div>
    </a>
  <?php
      }
    }
  }
  ?>
  


<!-- End page content -->
</div>


<!-- Footer 
<footer class="w3-center w3-black w3-padding-16">
  <p><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Contacto: teguclub.com</a></p>
</footer>
-->
</body>
</html>