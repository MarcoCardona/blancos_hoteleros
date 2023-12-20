<div class="footer w3layouts">
    <div class="container">
        <div class="footer-top-at w3">

            <div class="col-md-3 amet-sed w3l">
                <h4>INFORMACIÓN ADICIONAL</h4>
                <ul class="nav-bottom">
                    <li><a href="#">Como ordennar</a></li>
                    <li><a href="#">Preguntas Frencuentes</a></li>
                    <li><a href="contact.html">Contáctanos</a></li>
                </ul>
            </div>
            <div class="col-md-3 amet-sed w3ls">
                <h4>CATEGORIAS</h4>
                <ul class="nav-bottom">
                    <?php foreach ($categorias as $c) { ?>
                        <li><a href="#"><?php echo $c->categoria; ?></a></li>
                    <?php } ?>
                </ul>

            </div>
            <div class="col-md-3 amet-sed agileits">
                <h4>BOLETIN INFORMATIVO</h4>
                <div class="stay agileinfo">
                    <div class="stay-left wthree">
                        <form action="#" method="post">
                            <input type="text" placeholder="Ingresa tu correo " required="">
                        </form>
                    </div>
                    <div class="btn-1 w3-agileits">
                        <form action="#" method="post">
                            <input type="submit" value="Suscribete">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="col-md-3 amet-sed agileits-w3layouts">
                <h4>CONTÁCTANOS</h4>
                <p>75 Oriente 404A, Col. Loma linda</p>
                <p>Puebla, Pue.</p>
                <p>Ventas : +52 221 418 7999</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-class w3-agile">
        <p>© 2015 Mattress . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>