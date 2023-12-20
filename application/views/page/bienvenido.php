<!DOCTYPE html>
<html>


<body>
    <div class="header">
    </div>
    <div class="banner">
        <div class="container">
            <script src="<?php echo base_url(); ?>assets/page/js/responsiveslides.min.js"></script>
            <script>
                $(function() {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <div class="banner-text">
                            <h3>Lorem Ipsum is </h3>
                            <p>Sumérgete en la suavidad: Descubre nuestras sábanas de algodón de alta calidad. Garantizamos noches de sueño perfectas y confort inigualable.</p>

                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h3>There are many </h3>
                            <p>Elegancia que perdura: Renueva tus espacios con nuestra colección de mantelería y paños que añaden un toque de sofisticación a cada comida.</p>


                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h3>Sed ut perspiciatis</h3>
                            <p>Mimos para tu piel: Envuélvete en la calidez y la suavidad de nuestras toallas de felpa. La mejor calidad para tu cuidado diario.</p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!--content-->
    <div class="container">
        <div class="cont">
            <div class="content">
                <div class="content-top-bottom">
                    <h2>PORUCTOS DESTACADOS</h2>
                    <div class="col-md-6 men">
                        <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
                            <div class="b-wrapper">
                                <h3 class="b-animate b-from-top top-in   b-delay03 ">
                                    <span>TRIBECA LIVING</span>
                                </h3>
                            </div>
                        </a>


                    </div>
                    <div class="col-md-6">
                        <div class="col-md1 ">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-top top-in1   b-delay03 ">
                                        <span>CLARISSA</span>
                                    </h3>
                                </div>
                            </a>

                        </div>
                        <div class="col-md2">
                            <div class="col-md-6 men1">
                                <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
                                    <div class="b-wrapper">
                                        <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                            <span>COLORMATE</span>
                                        </h3>
                                    </div>
                                </a>

                            </div>
                            <div class="col-md-6 men2">
                                <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
                                    <div class="b-wrapper">
                                        <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                            <span>HERLEQUIN</span>
                                        </h3>
                                    </div>
                                </a>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="content-top">
                    <h1>ULTIMOS PRODUCTOS</h1>
                    <div class="grid-in">
                        <?php foreach ($producto as $p) { ?>
                            <div class="col-md-3 grid-top simpleCart_shelfItem">
                                <a href="single.html" class="b-link-stripe b-animate-go thickbox"><img class="img-responsive" src="<?php echo $p->images_url[1];?>" alt="">
                                    <div class="b-wrapper">
                                        <h3 class="b-animate b-from-left b-delay03 ">
                                            <span><?php echo $p->producto;?></span>

                                        </h3>
                                    </div>
                                </a>


                                <p><a href="single.html"><?php echo $p->producto;?></a></p>
                            </div>
                        <?php } ?>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!----->
        </div>
        <!---->
    </div>
</body>

</html>