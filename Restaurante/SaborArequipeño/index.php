

<?php

$telefono = 958745689;
$titulo = "Sabor Arequipeño";
$menu = array("Inicio","Restaurante","Menu","Chefs","Contactarse");
$url = "https://www.youtube.com/watch?v=n2tN2T-c3B4";
$Entrada =  array("Ocopa Arequipeña","Chicharrón","Chupe de Camarones","Rocoto Relleno","Pastel de Papa","Adobo de Chancho");
$chefs =  array("Monica Huerta Alpaca","Gladys Ballón Salas","Benita Quicaño Guillén");
$fecha = date('d/m/yy');
$sabor = ("Semana del Sabor Arequipeño");
$Semanal =array("Postres1"=>"QUESO HELADO","Postres2"=>"BUÑUELOS","Postres3"=>"ALFAJORES DE LA CURVA","Postres4" =>"DULCE DE CARNAVALES");
$Semana2 =array("Almuerzo1"=>"CHAQUE","Almuerzo2"=>"CHAIRO","Almuerzo3"=>"CHUPE DE OLLUCO","Almuerzo4 "=>"LOCRO DE PECHO");
$Semana3 =array("Bebidas1"=>"CHICHA DE JORA","Bebidas2"=>"GASEOSA ESCOSESA","Bebidas3"=>"INKA COLA","Bebidas4"=>"COCA COLA");
/*
$Combo = (objeto)["PostresA"=>"Postres","AlmuerzoB"=>"Almuerzo","BebidasC"=>"Bebidas"];-->
*/
$img = "assets/imag/Al1.webp";
$img2 = "assets/imag/Al2.webp";
$img3 = "assets/imag/Al3.webp";
$img4 ="assets/imag/Al4.webp";
$precio1 = 3.50;
$precio2 = 8.50;
$precio3 = 6.50;
$precio4 = 5.00;
$precio5 = 15.00;
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Sabor Arequipeño - Restaurant </title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    
    </head>
    
    <body>

        <div class="centrado">
            <div class="main">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/imag/logo.jpg "  width="150px" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active"><?php echo $menu[0] ?></a></li>
                            <li class="scroll-to-section"><a href="#about"><?php echo $menu[1]?></a></li>
                            <li class="scroll-to-section"><a href="#menu"><?php echo $menu[2] ?></a></li>
                            <li class="scroll-to-section"><a href="#chefs"><?php echo $menu[3] ?></a></li>                       
                            <li class="scroll-to-section"><a href="#reservation"><?php echo $menu[4] ?></a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <div class="h3"><?php echo $fecha ?></div>
                            <h6><?php echo $titulo ?></h6>
                            <h6>LA MEJOR EXPERIENCIA</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Hacer una Reserva</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/imag/Carr5.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/imag/Carr2.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/imag/Carr6.jpg" alt="">
                            </div>
                          </div>
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/imag/Carr4.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Sobre Nosotros Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Sobre Nosotros</h6>
                            <h2>Te dejamos un delicioso recuerdo </h2>
                        </div>
                        <p>
                            Sabor Arequipeño ofrece a los visitantes una muestra de la mejor gastronomía Arequipeña, en un ambiente romántico y acogedor.
                            Con una carta casera y variada, buscamos redescubrir los sabores, productos y costumbres de las diferentes lugares de Arequipa, confirmando así que es
                             un extraordinario destino gastronómico y cultural. Entradas, piqueos, sándwiches, platos de fondo y postres son elaborados con los más frescos ingredientes; y pueden ser acompañados con bebidas frías o calientes de nuestra barra.
                            </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/imag/Pla1.jpg" alt="" width="50px">
                            </div>
                            <div class="col-4">
                                <img src="assets/imag/Pla4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/imag/Pla3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.youtube.com/watch?v=n2tN2T-c3B4"><i class="fa fa-play"></i></a>
                            <img src="assets/imag/video1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** obre Nosotros Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Nuestro menú </h6>
                        <h2>Nuestra selección de Comidas con sabor de calidad </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>S/. 18 </h6></div>
                            <div class='info'>
                              <h1 class='title'><?php  echo $Entrada[0] ?></h1>
                              <p class='description'>Este platillo es a base de una salsa bañando unas ricas papas peruanas.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>S/. 45 </h6></div>
                            <div class='info'>
                              <h1 class='title'><?php  echo $Entrada[1] ?></h1>
                              <p class='description'>El Chicharrón, acompañarlo con papas, zarza de cebolla, mote, cancha y camote.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>S/. 38</h6></div>
                            <div class='info'>
                              <h1 class='title'><?php  echo $Entrada[2] ?></h1>
                              <p class='description'>El Chupe de Camarones es un plato típico muy degustado Arequipa.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>S/. 28</h6></div>
                            <div class='info'>
                              <h1 class='title'><?php  echo $Entrada[3] ?></h1>
                              <p class='description'>Su principal ingrediente el rocoto, es una de las tantas variedades de ajíes autóctono del Perú.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>S/. 28</h6></div>
                            <div class='info'>
                              <h1 class='title'><?php  echo $Entrada[4] ?></h1>
                              <p class='description'>Está formado por capas de papa cortadas finamente acompañada con leche, huevos y queso. </p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            <div class="price"><h6>S/. 25</h6></div>
                            <div class='info'>
                              <h1 class='title'><?php  echo $Entrada[5] ?></h1>
                              <p class='description'>Un plato de carne de cerdo cocinados en una olla de barro.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Nuestros chefs </h6>
                        <h2>Ofrecemos los mejores ingredientes para ti </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets/imag/Ch1.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $chefs[0] ?></h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/imag/Ch2.jpg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $chefs[1] ?></h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="assets/imag/Ch3.jpg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $chefs[2] ?></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contacta con nosotras</h6>
                            <h2>Aquí puede hacer una reserva o simplemente entrar al restaurante </h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Números de teléfono</h4>
                                    <span><a href="#"> +51 <?php echo $telefono ?></a><br><a href="#">+51 987456321</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Correos electrónicos </h4>
                                    <span><a href="#">SaborArequipeño@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Reserva de mesa </h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Tu nombre *" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu correo electrónico" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Tu número de celular*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number-guests" id="number-guests">
                                    <option value="number-guests">Numero de invitadas</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time">Tiempo </option>
                                    <option name="Breakfast" id="Breakfast">Postres </option>
                                    <option name="Lunch" id="Lunch">Almuerzo</option>
                                    <option name="Dinner" id="Dinner">Bebidas </option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Mensaje" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Hacer una reserva </button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6><?php echo $sabor ?></h6>
                        <h2>Ofertas especiales de comidas de esta semana </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Bebidas</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Almuerzo</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Bebidas</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Po1.webp" alt="">
                                                            
                                                            <!--<h4><?php echo $Semanal[Postres1] ?></h4> --> 
                                                                                                     
                                                            <h4>QUESO HELADO</h4> <br>
                                                            <p>Su elaboración consta de una mezcla de clavo, canela, leche y azúcar, ingredientes que consiguen la consistencia deseada a base de un batido constante. </p>
                                                            <div class="price">
                                                                <h6> S/. <?php echo  $precio1 ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Po2.jpg" alt="">
                                                            <!--<h4><?php echo $Semanal[Postres2] ?></h4> --> 
                                                            <h4>BUÑUELOS</h4>&bscr;
                                                            <p>Están preparados a base de harina de trigo en aceite bien caliente. Se presentan bañados en miel de higo y los puedes encontrar en las plazas o en diferentes restaurantes de la ciudad..</p>
                                                            <div class="price">
                                                                <h6>S/. <?php echo  $precio2 ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Po3.jpg" alt="">
                                                            <!--<h4><?php echo $Semanal[Postres3] ?></h4> --> 
                                                            <h4>ALFAJORES DE LA CURVA</h4><br>
                                                            <p>Se caracterizan por su delicioso relleno de miel de chancaca derretido, frutos secos y maíz morado..</p>
                                                            <div class="price">
                                                                <h6>S/. <?php echo  $precio3  ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Po4.jpg" alt="">
                                                             <!--<h4><?php echo $Semanal[Postres4] ?></h4> -->
                                                            <h4>DULCE DE CARNAVALES</h4> &bscr;
                                                            <p>Los dulces de carnaval son unos caramelos de azúcar de distintos tamaños sabor a sabor a anís, otros están rellenos de maní o de coco. </p>
                                                            <div class="price">
                                                                <h6>S/. <?php echo  $precio4  ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="<?php echo $img ?>" alt="" width="500px">
                                                             <!--<h4><?php echo $Semana2[Almuerzo1]  ?></h4> -->
                                                            <h4>CHAQUE</h4>  &bscr;
                                                            <p>Es un plato con altas propiedades nutritivas aparte de ser delicioso, la variedad de carnes y variedad de ingredientes.</p>                                
                                                            <div class="price">
                                                                <h6>S/. <?php echo  $precio5 ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="<?php echo $img2 ?>" alt="">
                                                            <!--<h4><?php echo $Semana2[Almuerzo2]  ?></h4> -->
                                                            <h4>CHAIRO</h4> &bscr;
                                                            <p>Es una de estas sopitas bien consistentes y por lo tanto muy nutritiva Aparte de llevar diversas verduras, también tiene variedad de carnes.</p>
                                                            <div class="price">
                                                                <h6>S/. 13</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="<?php echo $img3 ?>" alt="">
                                                            <!--<h4><?php echo $Semana2[Almuerzo3]  ?></h4> -->
                                                            <h4>CHUPE DE OLLUCO</h4>&bscr;
                                                            <p>Cuando mencionamos el chupe de olluco, te hablamos de un potaje increíble a base de diversas verduras dejando como protagonista del plato al olluco. </p>
                                                            <div class="price">
                                                                <h6>S/. 10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="<?php echo $img3 ?>" alt="">
                                                            <!--<h4><?php echo $Semana2[Almuerzo4]  ?></h4> -->
                                                            <h4>LOCRO DE PECHO</h4>&bscr;
                                                            <p>representativa específicamente de la región de Arequipa, de la cual obtiene su nombre. Para prepararlo necesitas carne de pollo o res, papas, ajo y ají panca, entre otras especias.</p>
                                                            <div class="price">
                                                                <h6>S/. 20</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Be1.jpg" alt="">
                                                            <!--<h4><?php echo $Semana3[Bebidas1]?></h4> -->
                                                            <h4>CHICHA DE JORA</h4><br>
                                                            <p>la chicha de guiñapo se hace con un grano de maíz germinado y seco. Pero no cualquier maíz. Se trata del maíz negro.</p>
                                                            <div class="price">
                                                                <h6>S/. 5.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Be2.jpg" alt="">
                                                            <!--<h4><?php echo $Semana3[Bebidas2]?></h4> -->
                                                            <h4>GASEOSA ESCOSESA</h4><br>
                                                            <p>Kola Escocesa es un excelente acompañante de cualquier tipo de comida inclusive la muy condimentada, porque sus componentes minerales.</p>
                                                            <div class="price">
                                                                <h6>S/. 9.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>                                       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Be3.jpg" alt="">
                                                            <!--<h4><?php echo $Semana3[Bebidas3]?></h4> -->
                                                            <h4>INKA COLA</h4><br>
                                                            <p>Es un bebida tipica en los almuerzos con un refrescante sabor y mas aun si esta fria.</p>
                                                            <div class="price">
                                                                <h6>S/. 8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/imag/Be5.webp" alt="">
                                                            <!--<h4><?php echo $Semana3[Bebidas4]?></h4> -->
                                                            <h4>COCA COLA</h4> <br>
                                                            <p>Es un bebida tipica en los almuerzos con un refrescante sabor y mas aun si esta fria.</p>
                                                            <div class="price">
                                                                <h6>S/. 9.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/imag/logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright <?php echo $titulo ?></p>
                                   
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>