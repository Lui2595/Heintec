<!DOCTYPE html>
<html lang="" class="">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/logos/icoheintec.png">
		<!-- Author Meta -->
		<meta name="author" content="heintec">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
        <title>HEINTEC</title>
        
        <?php 
        $puntos="../";
        $puntos2="";
        include("heintec/inc/style_web.php"); ?>

    </head>
    <body>	
        <!-- header -->
        <?php include("heintec/inc/header_web.php"); ?>
        <!-- header -->

        <!-- Contenido ------------------------------------------------------------------------------------------------------------------------->

        <!-- start banner Area -->
        <div id="carouselExampleCaptions" class="carousel slide"  data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="img/b1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-light" >Diseño Personalizado</h2>
                        <h5 class="text-light" >Programacion pura basada en las necesidades de cada cliente.</h5>
                    </div>
                </div>
                    <div class="carousel-item">
                    <img src="img/b2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Responsive design</h2>
                        <h5>Todos nuestros proyectos se adaptan a cualquier dispositivo, ya sea computadora, laptop, smartphone, Iphone, etc.</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/b3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-light" >Control Total</h2>
                        <h5 class="text-light" >Control Amigable e intuitivo para la administracion y gestion de las plataformas.</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End banner Area -->
        <br>
        <!-- Start portfolio-area Area -->
        <section class="portfolio-area " id="portfolio">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nuestors Ultimos Proyectos</h1>
                            <p>Soluciones basadas en la nube.</p>
                        </div>
                    </div>
                </div>
                
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">Todo</li>
                        <li data-filter=".desarrolloweb">Desarrollo Web</li>
                        <li data-filter=".phone">IOS / Android</li>
                        <li data-filter=".plataforma">Plataforma</li>
                        <li data-filter=".ecomerce">E-comerce</li>
                    </ul>
                </div>
                
                <div class="filters-content">
                    <div class="row grid">
                        <div class="single-portfolio col-sm-4 all desarrolloweb">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/landing1.jpg" alt="">
                                </div>
                                <a href="img/landing1.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Online Marketing</h4>
                                <div class="cat">Desarrollo Web</div>
                            </div>					                               
                        </div>
                        <div class="single-portfolio col-sm-4 all phone">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/android1.jfif" alt="">
                                </div>
                                <a href="img/android1.jfif" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Chatting App</h4>
                                <div class="cat">Android</div>
                            </div>					                               
                        </div>  
                        <div class="single-portfolio col-sm-4 all ecomerce">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/ecomerce3.jpg" alt="">
                                </div>
                                <a href="img/ecomerce3.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>                            		
                            </div> 
                            <div class="p-inner">
                                <h4>Violet Store</h4>
                                <div class="cat">E-Comerce</div>
                            </div>
                        </div>                          
                        <div class="single-portfolio col-sm-4 all plataforma">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/Panel Admin.jpg" alt="">
                                </div>
                                <a href="img/Panel Admin.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>   
                            </div>
                            <div class="p-inner">
                                <h4>Panel Admin</h4>
                                <div class="cat">Plataforma</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all phone">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/android2.jfif" alt="">
                                </div>
                                <a href="img/android2.jfif" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Android Vpn</h4>
                                <div class="cat">IOS / Android</div>
                            </div>					                               
                        </div>
                        <div class="single-portfolio col-sm-4 all ecomerce">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/ecomerce2.jpg" alt="">
                                </div>
                                <a href="img/ecomerce2.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>                            		
                            </div> 
                            <div class="p-inner">
                                <h4>Divisima Store</h4>
                                <div class="cat">E-comerce</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all desarrolloweb">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="image img-fluid" src="img/landing4.jpg" alt="">
                                </div>
                                <a href="img/landing4.jpg" class="img-pop-up">	
                                    <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                    </div>
                                </a>                             		
                            </div>
                            <div class="p-inner">
                                <h4>Industrial Material Solution</h4>
                                <div class="cat">Desarrollo Web</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all ecomerce">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/ecomerce1.jpg" alt="">
                                </div>
                                <a href="img/ecomerce1.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>                            		
                            </div> 
                            <div class="p-inner">
                                <h4>Body Oils Plus Store</h4>
                                <div class="cat">E-Comerce</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all desarrolloweb">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="image img-fluid" src="img/landing2.jpg" alt="">
                                </div>
                                <a href="img/landing2.jpg" class="img-pop-up">	
                                    <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                    </div>
                                </a>                             		
                            </div>
                            <div class="p-inner">
                                <h4>Companies Incorporated</h4>
                                <div class="cat">Desarrollo Web</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all plataforma">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/Multi Plataforma.jpg" alt="">
                                </div>
                                <a href="img/Multi Plataforma.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>   
                            </div>
                            <div class="p-inner">
                                <h4>Online Agency</h4>
                                <div class="cat">Plataforma</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all desarrolloweb">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="image img-fluid" src="img/landing3.jpg" alt="">
                                </div>
                                <a href="img/landing3.jpg" class="img-pop-up">	
                                    <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                    </div>
                                </a>                             		
                            </div>
                            <div class="p-inner">
                                <h4>Al Khalid Events</h4>
                                <div class="cat">Desarrollo Web</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all desarrolloweb">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="image img-fluid" src="img/Landing Page 2.jpg" alt="">
                                </div>
                                <a href="img/Landing Page 2.jpg" class="img-pop-up">	
                                    <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                    </div>
                                </a>                             		
                            </div>
                            <div class="p-inner">
                                <h4>Javelin Startup</h4>
                                <div class="cat">Desarrollo Web</div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all plataforma">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="img/plataforma1.jpg" alt="">
                                </div>
                                <a href="img/plataforma1.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                                </a>   
                            </div>
                            <div class="p-inner">
                                <h4>Front Line Ticket</h4>
                                <div class="cat">Plataforma</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End portfolio-area Area -->	
        
        <!-- Start testimonial Area -->
        <!--
        <section class="testimonial-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Clientes satisfechos</h1>
                            <p>Un error bien atendido es la mejor oportunidad para fidelizar a cualquier cliente.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-testimonial">
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/user1.png" alt="">
                            </div>
                            <div class="desc">
                                <p>
                                    Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                                </p>
                                <h4>Harriet Maxwell</h4>
                                <p>CEO at Google</p>
                            </div>
                        </div>
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/user2.png" alt="">
                            </div>
                            <div class="desc">
                                <p>
                                    A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                </p>
                                <h4>Carolyn Craig</h4>
                                <p>CEO at Facebook</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        -->
        </section>
        <!-- End testimonial Area -->		

        <!-- Start recent-blog Area 
        
        <section class="recent-blog-area section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 pb-30 header-text">
                        <h1>Latest posts from our blog</h1>
                        <p>
                            You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
                        </p>
                    </div>
                </div>
                <div class="row">	
                    <div class="single-recent-blog col-lg-4 col-md-4">
                        <div class="thumb">
                            <img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">	
                        </div>
                        <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <img class="img-fluid" src="img/user.png" alt="">
                                <a href="#"><span>Mark Wiens</span></a>
                            </div>
                            <div class="meta">
                                13th Dec
                                <span class="lnr lnr-heart"></span> 15
                                <span class="lnr lnr-bubble"></span> 04
                            </div>
                        </div>							
                        <a href="#">
                            <h4>Break Through Self Doubt
                            And Fear</h4>
                        </a>
                        <p>
                            Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
                        </p>
                    </div>
                    <div class="single-recent-blog col-lg-4 col-md-4">
                        <div class="thumb">
                            <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">	
                        </div>
                        <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <img class="img-fluid" src="img/user.png" alt="">
                                <a href="#"><span>Mark Wiens</span></a>
                            </div>
                            <div class="meta">
                                13th Dec
                                <span class="lnr lnr-heart"></span> 15
                                <span class="lnr lnr-bubble"></span> 04
                            </div>
                        </div>							
                        <a href="#">
                            <h4>Portable Fashion for
                            young women</h4>
                        </a>
                        <p>
                            You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
                        </p>
                    </div>
                    <div class="single-recent-blog col-lg-4 col-md-4">
                        <div class="thumb">
                            <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">	
                        </div>
                        <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <img class="img-fluid" src="img/user.png" alt="">
                                <a href="#"><span>Mark Wiens</span></a>
                            </div>
                            <div class="meta">
                                13th Dec
                                <span class="lnr lnr-heart"></span> 15
                                <span class="lnr lnr-bubble"></span> 04
                            </div>
                        </div>							
                        <a href="#">
                            <h4>Do Dreams Serve As
                            A Premonition</h4>
                        </a>
                        <p>
                            So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
                        </p>
                    </div>												
                                        
                                            
                </div>
            </div>	
        </section>
        end recent-blog Area -->		

        <!-- Logos de clientes -->
        <section class="brands-area">
            <div class="container">
                <div class="brand-wrap">
                    <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End brands Area -->			

        <!-- footer  -->
        <?php include("heintec/inc/footer_web.php"); ?>
        <!-- footer  -->		

        <!-- script -->
        <?php include("heintec/inc/scripts_web.php"); ?>
        <!-- script -->
        	
    </body>
</html>