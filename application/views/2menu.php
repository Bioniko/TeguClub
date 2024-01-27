 <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-default bootsnav" style="background-color: #<?php echo $bar_colorbarra;?>">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" style="color: #<?php echo $bar_coloricom;?>"></i>
                </button>
                    <a class="navbar-brand"><img src="<?php echo base_url();?>assets/uploads/files/<?php echo $emp->emp_logo;?>" style="width: 80px; " class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/Dhome/Show">Inicio</a></li>
                        <?php
                        foreach ($var as $emp) {
                            if($emp){
                        ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>index.php/Dindex/Show?emp=<?php echo $emp->emp_id; ?>" style="color: #<?php echo $bar_coloricom;?>"><?php echo $emp->emp_menu; ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a>
						<i class="fa fa-shopping-bag" id="carritoIcon" style="font-size: 25px;position: relative;cursor: pointer;color: #<?php echo $bar_coloricoc;?>"></i>
                            <span class="badge otro" id="badge"></span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <ul class="cart-list" id="miLista">
                    </ul>
                        <li class="total">
                            <a onclick="enviarPedidoPorWhatsApp()" class="btn btn-default hvr-hover btn-cart">Enviar</a>
                            <span class="float-right"><strong>Total</strong>: <span id="total"></span> Lps</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->