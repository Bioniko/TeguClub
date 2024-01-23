<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #15c799;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #15c799;
        }

        .details {
            margin-top: 20px;
            text-align: center;
        }

        .item {
            margin: 10px 0;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            padding-top: 10px;
            border-top: 2px solid #15c799;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 80%;
            }
        }
    </style>
    <title>Factura</title>
</head>
<body>
    <div class="container">
        <div class="header">
        <img src="<?php echo base_url();?>estilos/images/teguclub.png" style="width: 70%">
        <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $emp->emp_logo;?>" style="width: 30%">
            <h1>Pedido</h1>
        </div>
        <?php 
        for ($i=1; $i < 15; $i++) { 
            if(isset($_GET['producto'.$i])){ 
                ?>
                <div class="details">
                    <p><strong>Producto:</strong> <?php echo str_replace('_', ' ', $_GET['producto'.$i]);?></p>
                    <p><strong>Cantidad:</strong> <?php echo $_GET['cantidad'.$i];?></p>
                    <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $_GET['img'.$i];?>" style="width: 30%">
                    <p><strong>Precio:</strong> <?php echo number_format($_GET['precio'.$i], 2, ',', '.');?></p>
                </div>
                <?php 
            }
        }
        ?>
        <div class="footer">
            <p>Total: <?php echo number_format($_GET['total'], 2, ',', '.');?></p>
            <p>Gracias por su pedido.</p>
        </div>
    </div>
</body>
</html>
