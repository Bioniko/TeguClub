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
            <h1>Pedido</h1>
            <p>Número de factura: 12345</p>
        </div>

        <div class="details">
            <p><strong>Cliente:</strong> Nombre del cliente</p>
            <p><strong>Fecha:</strong> 22 de enero de 2024</p>
        </div>

        <div class="item">
            <p><strong>Descripción:</strong> Producto 1</p>
            <p><strong>Precio:</strong> $50.00</p>
        </div>

        <div class="item">
            <p><strong>Descripción:</strong> Producto 2</p>
            <p><strong>Precio:</strong> $30.00</p>
        </div>

        <div class="footer">
            <p>Total: $80.00</p>
            <p>Gracias por su compra.</p>
        </div>
    </div>
</body>
</html>
