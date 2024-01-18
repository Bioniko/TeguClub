 <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Redes Sociales</h4>
                            <ul>
                                <?php 
                                if($facebook){?><li><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li><?php } 
                                if($instagram){?><li><a href="<?php echo $instagram;?>" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li><?php }
                                if($tiktok){?><li><a href="<?php echo $tiktok;?>" target="_blank"><i class="fab fa-tiktok" aria-hidden="true"></i></a></li><?php } 
                                if($whatsapp){?><li><a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp;?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li><?php }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Honduras <br>Tegucigalpa<br> </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Celular: <a href="tel:<?php echo $whatsapp;?>"><?php echo $whatsapp;?></a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:<?php echo $correo;?>"><?php echo $correo;?></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    <!-- ALL JS FILES -->
    <script src="<?php echo base_url();?>estilos/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url();?>estilos/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url();?>estilos/js/inewsticker.js"></script>
    <script src="<?php echo base_url();?>estilos/js/bootsnav.js."></script>
    <script src="<?php echo base_url();?>estilos/js/images-loded.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/isotope.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/form-validator.min.js"></script>
    <script src="<?php echo base_url();?>estilos/js/contact-form-script.js"></script>
    <script src="<?php echo base_url();?>estilos/js/custom.js"></script>
    <script src="<?php echo base_url();?>estilos/owlcarousel/jquery.min.js"></script>
    <script src="<?php echo base_url();?>estilos/owlcarousel/owl.carousel.min.js"></script>