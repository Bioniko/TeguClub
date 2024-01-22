<?php 
$whatsapp = $emp->emp_celular;
$correo = $emp->emp_correo;
$facebook = $emp->emp_facebook;
$instagram =$emp->emp_instagram;
$tiktok = $emp->emp_tiktok;
$titulo = $emp->emp_titulo;
$titulo2 = $emp->emp_titulo2;
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title><?php echo $emp->emp_nombre;?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/uploads/files/<?php echo $emp->emp_logo;?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>estilos/images/apple-touch-icon.png">
    <!-- Agrega esto en el head de tu HTML -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url();?>estilos/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>estilos/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>estilos/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>estilos/css/custom.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <div id="imagenContenedor" class="owl-carousel owl-theme imagen-contenedor">
      <div class="slide">
          <div class="slide-inner">
              <input class="slide-open" type="radio" id="slide-1" 
                    name="slide" aria-hidden="true" hidden="" checked="checked">
              <div class="slide-item">
                  <img id="imagenAmpliada1">
              </div>
              <input class="slide-open" type="radio" id="slide-2" 
                    name="slide" aria-hidden="true" hidden="">
              <div class="slide-item">
                  <img id="imagenAmpliada2">
              </div>
              <input class="slide-open" type="radio" id="slide-3" 
                    name="slide" aria-hidden="true" hidden="">
              <div class="slide-item">
                  <img id="imagenAmpliada3">
              </div>
              <input class="slide-open" type="radio" id="slide-4" 
                    name="slide" aria-hidden="true" hidden="">
              <div class="slide-item">
                  <img id="imagenAmpliada4">
              </div>
              <label for="slide-4" class="slide-control prev control-1">‹</label>
              <label for="slide-2" class="slide-control next control-1">›</label>
              <label for="slide-1" class="slide-control prev control-2">‹</label>
              <label for="slide-3" class="slide-control next control-2">›</label>
              <label for="slide-2" class="slide-control prev control-3">‹</label>
              <label for="slide-4" class="slide-control next control-3">›</label>
              <label for="slide-3" class="slide-control prev control-4">‹</label>
              <label for="slide-1" class="slide-control next control-4">›</label>
              <ol class="slide-indicador">
                  <li>
                      <label for="slide-1" class="slide-circulo">•</label>
                  </li>
                  <li>
                      <label for="slide-2" class="slide-circulo">•</label>
                  </li>
                  <li>
                      <label for="slide-3" class="slide-circulo">•</label>
                  </li>
                  <li>
                      <label for="slide-4" class="slide-circulo">•</label>
                  </li>
              </ol>
          </div>
      </div>  
      <!-- <img id="imagenAmpliada" style="padding-top: 80%;" class="item"> -->
      <span class="cerrar" onclick="cerrarImagenAmpliada()">&times;</span>
    </div>
</head>