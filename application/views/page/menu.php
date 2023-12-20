<div class="container">
    <div class="head-top">
        <div class="logo">
            <h1><a href="index.html">Blancos Hoteleros</a></h1>
        </div>
        <div class=" h_menu4">
            <ul class="memenu skyblue">
                <li><a class="color8" href="index.html">BIENVENIDO</a></li>
                <li><a class="color1" href="#">CATEGORIAS</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <?php foreach ($categorias as $c) { ?>
                                        <ul>
                                            <li><a href="products.html"><?php echo $c->categoria; ?></a></li>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="color4" href="login.html">FAQ</a></li>
                <li><a class="color6" href="contact.html">CONTACTANOS</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>