<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>


<body>
    <!--header-->
    <div class="header">
        
        
    </div>
    <!-- grow -->
    <div class="grow">
        <div class="container">
            <h2>La categorias</h2>
        </div>
    </div>
    <!-- grow -->
    <div class="product">
        <div class="container">

            <div class="product-price1">
                <div class="top-sing">
                    <div class="col-md-7 single-top">
                        <div class="flexslider">
                            <ul class="slides">
                                <?php foreach ($producto->images_url as $i) { ?>
                                    <li data-thumb="<?php echo $i; ?>">
                                        <div class="thumb-image"> <img src="<?php echo $i; ?>" data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="clearfix"> </div>
                        <!-- slide -->


                        <!-- FlexSlider -->
                        <script defer src="<?php echo base_url(); ?>assets/page/js/jquery.flexslider.js"></script>
                        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/css/flexslider.css" type="text/css" media="screen" />

                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>







                    </div>
                    <div class="col-md-5 single-top-in simpleCart_shelfItem">
                        <div class="single-para ">
                            <h4><?php echo $producto->producto ?></h4>
                            <div class="star-on">

                                <div class="review">
                                    <a href="#"> Numero de vistas</a>

                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <p><?php echo $producto->descripcion; ?></p>
                            <div class="available">
                                <ul>
                                    <li>Color
                                        <select>
                                            <?php foreach ($producto->colores as $c) { ?>
                                                <option><?php echo $c; ?></option>
                                            <?php } ?>
                                        </select>
                                    </li>
                                    <li class="size-in">Size
                                        <select>
                                            <?php foreach ($producto->tamanos as $t) { ?>
                                                <option><?php echo $t; ?></option>
                                            <?php } ?>
                                        </select>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <div class="available">
                                Caracteristicas
                                <ul></ul>
                            </div>


                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!---->

                <div class=" bottom-product">
                    <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="#"><img class="img-responsive" src="images/pi3.jpg" alt="">
                                <div class="pro-grid">
                                    <span class="buy-in">Buy Now</span>
                                </div>
                            </a>
                        </div>
                        <p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
                        <div class="ca-rt">
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="#"><img class="img-responsive" src="images/pi1.jpg" alt="">
                                <div class="pro-grid">
                                    <span class="buy-in">Buy Now</span>
                                </div>
                            </a>
                        </div>
                        <p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
                        <div class="ca-rt">
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="#"><img class="img-responsive" src="images/pi4.jpg" alt="">
                                <div class="pro-grid">
                                    <span class="buy-in">Buy Now</span>
                                </div>
                            </a>
                        </div>
                        <p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
                        <div class="ca-rt">
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->
</body>
<script>
</script>

</html>