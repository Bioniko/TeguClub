<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "head.php";?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.css">
</head>
<body>
  <!-- ======= Header ======= -->
  <?php include "header.php";?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include "menu.php";?>
  <!-- End Sidebar-->
  <style>
    .panel {
      background-color: #ffffff; /* Fondo blanco */
      border: 1px solid #cccccc; /* Borde gris */
      padding: 20px; /* Espaciado interno */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
      border-radius: 8px; /* Bordes redondeados */
    }
    /* Estilos adicionales si es necesario */
   
    .palette {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .color-box {
      width: 100px;
      height: 100px;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s ease-in-out;
      overflow: hidden;
    }

    .color-box:hover {
      transform: scale(1.1);
    }
  </style>
  <main id="main" class="main" style="padding: 20px 20px 0px 20px;">
    <div class="pagetitle">
      <h1>Personalizar Barra Superior</h1>
      <!-- ========================AQUI VA EL CRUD======================== -->
      <div class="panel">
        <!-- Contenido del panel -->
        <h4>Cambiar color de la Barra superior</h4>
        <div class="row">
          <div class="col">
            <p>Seleccione el color de la barra superior un ejemplo de lo que se cambiara: </p>
          </div>
          <div class="col" style="margin-top: -2%;">
            <img src="<?php echo base_url();?>assets/images/logo/ejemplo1.png" style="width: 50%;">
          </div>
        </div>
        <h1>Seleccionar Color</h1>
          <!-- Caja de texto para mostrar el color seleccionado -->
          <input type="text" id="color-input" style="width: 100px; height: 30px; font-size: 16px; margin-bottom: 20px;">
          <!-- Botón para abrir el selector de colores -->
          <input type="button" id="color-picker" value="Seleccionar Color">
          <button class="btn btn-primary" id="guardarTamanio" Onclick="Ir('<?php echo base_url();?>index.php/Barratop/show?bar_colorbarra=')">Guardar</button>
        <hr>
        <!-- TAMAÑO LOGO -->
        <h4>Ajustar tamaño de logo</h4>
        <div class="container">
          <div class="row">
            <div class="col">
              <p>Ajusta el tamaño del logo pero considera que se vea bien en modo escritorio y mobil ejemplo:</p>
            </div>
            <div class="col" style="margin-top: -2%;">
              <img src="<?php echo base_url();?>assets/images/logo/ejemplo2.png" style="width: 50%;"><br>
            </div>
          </div>
          <div class="input-group mb-1" style="padding: 0% 80% 0% 0%;">
            <!-- Campo de entrada de tipo número -->
            <input type="number" class="form-control" id="tamanioInput" min="1" value="<?php echo $emp->bar_tamanioico; ?>">

            <!-- Botón para guardar el tamaño -->
            <div class="input-group-append" style="margin: 0% 0% 0% 3%">
              <button class="btn btn-primary" id="guardarTamanio" Onclick="Ir2('<?php echo base_url();?>index.php/Barratop/show?bar_tamanioico=')">Guardar</button>
            </div>
          </div>
        </div>
        <hr>

        <h4>Cambiar color menu hamburguesa</h4>
        <div class="row">
          <div class="col">
            <p>Seleccione el color del menu: </p>
          </div>
          <div class="col" style="margin-top: -2%;">
            <img src="<?php echo base_url();?>assets/images/logo/ejemplo3.png" style="width: 10%;">
          </div>
        </div>
        <h1>Seleccionar Color</h1>
        <!-- Caja de texto para mostrar el color seleccionado -->
        <input type="text" id="color-input3" style="width: 100px; height: 30px; font-size: 16px; margin-bottom: 20px;">
        <!-- Botón para abrir el selector de colores -->
        <input type="button" id="color-picker3" value="Seleccionar Color">
        <button class="btn btn-primary" id="guardarTamanio" Onclick="Ir3('<?php echo base_url();?>index.php/Barratop/show?bar_coloricom=')">Guardar</button>
        <hr>

        <h4>Cambiar color carrito de compras</h4>
        <div class="row">
          <div class="col">
            <p>Seleccione el color del carrito de compras: </p>
          </div>
          <div class="col" style="margin-top: -2%;">
            <img src="<?php echo base_url();?>assets/images/logo/ejemplo4.png" style="width: 7%;">
          </div>
        </div>
        <h1>Seleccionar Color</h1>
        <!-- Caja de texto para mostrar el color seleccionado -->
        <input type="text" id="color-input4" style="width: 100px; height: 30px; font-size: 16px; margin-bottom: 20px;">
        <!-- Botón para abrir el selector de colores -->
        <input type="button" id="color-picker4" value="Seleccionar Color">
        <button class="btn btn-primary" id="guardarTamanio" Onclick="Ir4('<?php echo base_url();?>index.php/Barratop/show?bar_coloricoc=')">Guardar</button>
        <hr>
      </div>
      <!-- ========================FIN  VA EL CRUD======================== -->
    </div>
    <!-- End Page Title -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include "footer.php";?>
  <!-- Incluir la biblioteca Spectrum desde el CDN -->
  <!-- Incluir la biblioteca Spectrum desde el CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.js"></script>
  <script>
    // Obtener el color inicial desde PHP (reemplazar por el valor real)
    var colorInicial  = '<?php echo $emp->bar_colorbarra; ?>';
    var colorInicial3 = '<?php echo $emp->bar_coloricom; ?>';
    var colorInicial4 = '<?php echo $emp->bar_coloricoc; ?>';

    // Inicializar Spectrum con el color inicial
    $("#color-picker").spectrum({
      preferredFormat: "hex",  // Formato de color preferido (hexadecimal)
      showPalette: true,       // Mostrar paleta de colores
      palette: ["#3498db", "#2ecc71", "#e74c3c", "#f39c12", "#9b59b6", "#34495e"],
      color: colorInicial,     // Establecer el color inicial
      change: function(color) {
        // Mostrar y actualizar el color en la caja de texto
        $("#color-input").val(color.toHexString());
      }
    });

    // Inicializar Spectrum con el color inicial
    $("#color-picker3").spectrum({
      preferredFormat: "hex",  // Formato de color preferido (hexadecimal)
      showPalette: true,       // Mostrar paleta de colores
      palette: ["#3498db", "#2ecc71", "#e74c3c", "#f39c12", "#9b59b6", "#34495e"],
      color: colorInicial3,     // Establecer el color inicial
      change: function(color) {
        // Mostrar y actualizar el color en la caja de texto
        $("#color-input3").val(color.toHexString());
      }
    });

    // Inicializar Spectrum con el color inicial
    $("#color-picker4").spectrum({
      preferredFormat: "hex",  // Formato de color preferido (hexadecimal)
      showPalette: true,       // Mostrar paleta de colores
      palette: ["#3498db", "#2ecc71", "#e74c3c", "#f39c12", "#9b59b6", "#34495e"],
      color: colorInicial4,     // Establecer el color inicial
      change: function(color) {
        // Mostrar y actualizar el color en la caja de texto
        $("#color-input4").val(color.toHexString());
      }
    });

    // Establecer el valor inicial en la caja de texto
    $("#color-input").val(colorInicial);
    // Establecer el valor inicial en la caja de texto
    $("#color-input3").val(colorInicial3);
    // Establecer el valor inicial en la caja de texto
    $("#color-input4").val(colorInicial4);

    // Detectar cambios en la caja de texto
    $("#color-input").on("input", function() {
      // Actualizar el color del selector Spectrum con el nuevo valor
      $("#color-picker").spectrum("set", $(this).val());
    });

    // Detectar cambios en la caja de texto
    $("#color-input3").on("input", function() {
      // Actualizar el color del selector Spectrum con el nuevo valor
      $("#color-picker3").spectrum("set", $(this).val());
    });

    // Detectar cambios en la caja de texto
    $("#color-input4").on("input", function() {
      // Actualizar el color del selector Spectrum con el nuevo valor
      $("#color-picker4").spectrum("set", $(this).val());
    });

    function Ir(url){
      var input = $("#color-input").val();
      window.location.href = url + input;
    }
    function Ir2(url){
      var tamanioInput = $("#tamanioInput").val();
      window.location.href = url + tamanioInput;
    }
    function Ir3(url){
      var tamanioInput = $("#color-input3").val();
      window.location.href = url + tamanioInput;
    }
    function Ir4(url){
      var tamanioInput = $("#color-input4").val();
      window.location.href = url + tamanioInput;
    }
  </script>
</body>
</html>