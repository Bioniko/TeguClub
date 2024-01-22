<?php include"2head.php";  ?>
<body>
<?php include"2menu.php";  ?>
    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1><?php echo $titulo; ?></h1>
                        <p><?php echo $titulo2; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Todo</button>
                            <?php
                            foreach ($cat as $cat) {
                                if($cat){
                            ?>
                            <button data-filter=".<?php echo  str_replace(' ', '', $cat->cat_nombre); ?>" style="margin-top: 1%"><?php echo  $cat->cat_nombre; ?></button>
                            <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php
                foreach ($pro as $ban) {
                    if($ban){
                        $foto1 = base_url()."assets/uploads/files/".$ban->pro_foto1;
                        $foto2 = base_url()."assets/uploads/files/".$ban->pro_foto2;
                        $foto3 = base_url()."assets/uploads/files/".$ban->pro_foto3;
                        $foto4 = base_url()."assets/uploads/files/".$ban->pro_foto4;
                ?>
                <div class="col-lg-3 col-md-6 special-grid <?php echo  str_replace(' ', '', $ban->cat_nombre); ?>">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Venta</p>
                            </div>
                            <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $ban->pro_foto1; ?>" class="img-fluid" alt="Imagen">

                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"  onclick="ampliarImagen('<?php echo $foto1; ?>', '<?php echo $foto2; ?>', '<?php echo $foto3; ?>', '<?php echo $foto4; ?>')"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <a class="carrito" onclick="AddCard('<?php echo $ban->pro_id; ?>', '<?php echo $ban->pro_nombre; ?>', '<?php echo $ban->pro_precio; ?>', '<?php echo $ban->pro_foto1; ?>')">Agregar al Carrito</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo  $ban->pro_nombre; ?></h4>
                            <h5><?php echo  $ban->pro_precio; ?> Lps</h5>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End Products  -->
    <?php include "2footer.php"; ?>   
    <script>
        var tot = document.getElementById('total');
        var carrito = [];
        var tem = [];
        var n = 0;
        var total = 0;
        var suma = 0;
        function ampliarImagen(foto1, foto2, foto3, foto4) {
            var imagenAmpliada1 = document.getElementById('imagenAmpliada1');
            imagenAmpliada1.src = foto1;
            if(foto2 != ""){
                var imagenAmpliada2 = document.getElementById('imagenAmpliada2');
                imagenAmpliada2.src = foto2;
            }
            var imagenAmpliada3 = document.getElementById('imagenAmpliada3');
            imagenAmpliada3.src = foto3;
            var imagenAmpliada4 = document.getElementById('imagenAmpliada4');
            imagenAmpliada4.src = foto4;
            var imagenContenedor = document.getElementById('imagenContenedor');
            imagenContenedor.style.display = 'block';
        }
        function cerrarImagenAmpliada() {
            var imagenContenedor = document.getElementById('imagenContenedor');
            imagenContenedor.style.display = 'none';
        }

        function AddCard(pro_id, pro_nombre, pro_precio, pro_foto) {
            var numero = document.getElementById('badge');
            n++;
            if (n == 0) {
                numero.textContent = "";
            } else {
                var productoExistente = carrito.find(producto => producto[0] == pro_id);

                if (productoExistente) {
                    productoExistente[4]++;
                } else {
                    carrito.push([pro_id, pro_nombre, pro_precio, pro_foto, 1]);
                }
                updateListaCarrito();
                console.log(carrito);
                TotalPagar();
                numero.textContent = n;
            }
            var carritoIcon = document.getElementById("carritoIcon");
            carritoIcon.classList.toggle("jump");
            numero.classList.toggle("jump");
            setTimeout(function () {
                carritoIcon.classList.remove("jump");
                numero.classList.remove("jump");
            }, 1000);
        }


        function TotalPagar() {
            total = 0;
            carrito.forEach(car => {
                total += parseInt(car[2]) * parseInt(car[4]);
            });
            tot.textContent = total;
        }

        function updateListaCarrito() {
            var listaContainer = document.getElementById('miLista');
            listaContainer.innerHTML = ''; // Limpia la lista antes de volver a generarla

            carrito.forEach(function(producto) {
            suma = parseInt(producto[2]) * parseInt(producto[4]); 
            var listItem = document.createElement('li');
            listItem.innerHTML = `
                <div><a href="#" class="close-side"><i class="fa fa-times" style="color: #000" onclick="EliminarArticulo(${producto[0]})"></i></a></div>
                <a href="#" class="photo">
                    <img src="<?php echo base_url();?>assets/uploads/files/${producto[3]}" class="cart-thumb" alt="" />
                </a>
                <h6>
                    <a href="#">${producto[1]}</a>
                </h6>
                <p>${producto[4]}x - <span class="price">${suma} Lps</span></p>
            `;
            listaContainer.appendChild(listItem);
            });
        }

        function EliminarArticulo(pro_id){
            var numero = document.getElementById('badge');
            var tem = [];
            carrito.forEach(car => {
                if(car[0] != pro_id){
                    tem.push(car);
                }
            });
            n = carrito.length - 1;
            if(n == 0){
                numero.textContent = "";
            }else{
                numero.textContent = n;
            } 
            carrito = tem;
            console.log(carrito);
            updateListaCarrito();
            TotalPagar();
        }

        function enviarPedidoPorWhatsApp() {
            var numeroWhatsApp = <?php echo $whatsapp; ?>;
            var mensajeInicial = '¡Hola! Quiero hacer un pedido:\n';
            if(carrito.length > 0){
                carrito.forEach(producto => {
                    var urlImagen = '<?php echo base_url();?>assets/uploads/files/' + encodeURIComponent(producto[3]);
                    mensajeInicial += `${producto[1]} - Cantidad: ${producto[4]}\n${urlImagen}\n`;
                });

                mensajeInicial += `\nTotal a pagar: ${total} Lps`;
                var mensajeCodificado = encodeURIComponent(mensajeInicial);
                var enlaceWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${mensajeCodificado}`;
                window.open(enlaceWhatsApp, '_blank');
                carrito = [];
                var numero = document.getElementById('badge');
                n = 0;
                numero.textContent = "";
                updateListaCarrito();
                TotalPagar();
            }
        }
    </script>
</body>
</html>