<? /*if (!isLoggedIn()) {
$_SESSION['msg'] = "You must log in first";
header('location: login.php');
}*/?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->
    <title>Ger's Garage</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet" type="text/css" /><!-- style-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
    <script type="text/javascript" src="main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>

    <!--changing the style of the scrolling-->
    <script>
        $(document).ready(function () {
            $("#home").click(function () {
                $("a").slideToggle("slow");
            });
            $("#service").click(function () {
                $("a").slideToggle("slow");
            });
        });
    </script>
 </head>   
    <!--ERRO: não esta indo devagar-->
    <!--ERRO: -->



<body>
    <!-- Navigation BAR -->
    <!--ERRO:centralizar menu-->
    <!--ERRO: fazer o slogan aparecer na nav bar/line 54 -->

    <nav class="navbar  navbar-expand-md navbar-dark bg-dark sticky-top">
        <!--md because its the breakpoint where it gonna change from the mobile to expanded nav-->
        <div class="container-fluid">
           <!-- <a class="navbar-brand" ><img scr="img/sample.jpg"></a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#banner">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#one">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#'> News</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='#two'> About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='#three'> Contact </a>
                    </li>

                    <!--BEFPRE LOGIN-->
                   <li class="navbar-nav">
                    <a class="nav-link" href='login.php'>Book our services</a>
                  </li> 

                  <!--Error criar opção que fica disponivel somnet depois de logar-->
                  <li class="navbar-nav"><i class="fas fa-sign-out-alt"></i>
                  <a class="nav-link" href="exit.php">Logout</a>
                </li>

                </ul>
                
            </div>
        </div>
    </nav>

    <!--banner-->
    <!--ERRO: A imagem de background não esta aparecendo -->
    <section id="banner" class="bg-img" data-bg="img\banner.jpg">
    <!--image on the background, Title with visual effect-->
        <div class="inner">
            <header>
                <h1>Ger's Garage</h1>
            </header>
        </div>
        <a href="#one" class="more"></a>
        <!--this create a button to foward to customer for the next section of the page -->
    </section>
    <!--banner-->


    <!---Service Section -->
    <!--ERRO: Esta cortando o titulo, os containers não estão bem dimensionados  -->
    <!--ERRO: Icones não estão aparecendo -->
    <!--ERRO: Imagem de backgorund não esta aparecendo-->
    <!--ERRO:acrescentar descrição repair/fault -->
    <section id="one" class="wrapper post bg-img" data-bg="service.jpg">
        <div class="inner">
            <header>
                <h1>Services</h1>
            </header>
            <section class="highlights">

                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="fa-calendar-o"><span class="label">Icon</span></a>
                            <h3>Painting</h3>
                        </header>
                        <p>We apply  paint to refresh your vehicle's appearance.
                            Our Service offers a one-year warranty, and gives your car an attractive
                             gloss and accurate color match.</p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <a i class="fas fa-car-crash"></i></a>
                            <h3>Repair/fault</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non
                            mi integer non faucibus.</p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                        <i class="fas fa-car-crash"></i>
                            <h3>Annual Service</h3>
                        </header>
                        <p> Programme your annual maintenance. Recommended every 12,000 miles or 12 months.</p>
                    </div>
                </section>
                
                <section>
                    <div class="content">
                        <header>
                        <i class="fas fa-tools"></i>
                            <h3>Major Repair</h3>
                        </header>
                        <p>The Full Service is among the most comprehensive annual services available, comprising 75 individual maintenance checks.
                             It exceeds the recommendations made by most manufacturers of checks, refills and replacements to be performed annually 
                             and will help ensure trouble-free motoring.</p>
                             <br>
                             <p>Recommended interval: 12 months or 12,000 miles</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <h3>Major Service</h3>
                        </header>
                        <p>The Major Service is our most comprehensive car service which includes everything needed in an annual Service.
                             In addition,  we change parts recommended for replacement every two years including a brake fluid change.</p>
                             <br>
                            <p> Recommended interval: 24 months or 24,000 miles.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a class="icon fa-qrcode"><span class="label"></span></a>
                            <h3>Pick Up</h3>
                        </header>
                        <p>We know life is busy and sometimes you dont have the etxra time to drive your car to the garage.
                           That is why we provide driver service. who picks up and delivers or your car at your door.
                        </p>
                    </div>
                </section>
            </section>
        </div>
        <a href="#two" class="more"></a>
    </section>

    <!---Service Section -->

    <!--- Image Slider
        ERRO: não esta funcionando. a section esta cortando o carrosel
    <a id="two">
        <div id="slides" class="carousel slide" data-ride="carousel">
            scroll function of carrosel/carousel indicators
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">

                <div class="carousel-item active ">
                    <img src="img/carrosel_1.jpg" width="1500" height="300">
                    <div class="carousel-caption">
                        <h1 class="display-2">Book a service </h1>
                        <h3>description</h3>
                        <button type="button" class="btn btn-outline-light btn-lg">Sign up</button>
                        <button type="button" class="btn btn-secondary btn-lg"> Login in</button>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/carrosel_2.jpg" width="1500" height="300">
                    <div class="carousel-caption">


                        <button type="button" class="btn btn-success btn-lg"> Listen on Spotify</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carrosel_3.jpg" width="1500" height="300">
                </div>

            </div>
        </div>
        <a href="#aboutUs" class="more">teste</a>
    </a> -->

    <!-- About Us -->
    <!--ERRO: imagem de background não esta aparecendo -->
    <!--ERRO: arrumar texto-->
    <section id="two" class="wrapper post bg-img">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Our Story</h2>
                    <p>Since 1993</p>
                </header>
                <div class="content">
                    <p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim
                        platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate
                        a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac
                        blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in
                        tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
                </div>
            </article>
        </div>
        <a href="#three" class="more"></a>
    </section>
  <!-- About Us -->

    <!-- Find Us -->
    <!--ERRO:imagem de background não esta aparecendo -->
    <section id="three" class="wrapper post bg-img" data-bg="final_background.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Contact us</h2>
                </header>
                <div class="content">
                  
                    <div class="row">
                        <!--https://mdbootstrap.com/docs/jquery/javascript/google-maps/-->

                        <!--Grid 1º column-->
                        <div class="col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-cascade narrower">

                                <!--Card content-->
                                <div class="card-body card-body-cascade text-center">

                                    <!--Google map-->
                                    <div id="map-container-google-8" class="z-depth-1-half map-container-5"
                                        style="height: 300px">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.84427303271!2d-6.261063984718505!3d53.34604378243583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e84cfcc9cbf%3A0x689c7d1c132a0ddf!2sCCT%20College%20Dublin!5e0!3m2!1sen!2sie!4v1595083999595!5m2!1sen!2sie"
                                            width="400" height="300" frameborder="0" style="border:0;"
                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            
                        </div>
                      

                        <!--Second column info -->
                        <div class="col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-cascade narrower">


                                <!--Card content-->
                                <div class="card-body card-body-cascade text-center">

                                    <!--Google map-->
                                    <div class="Contact_us">
                                        <p><i class="fas fa-map-pin"></i> 30-34 Westmoreland St,
                                            Dublin 2,
                                            <br>
                                            D02 HK35</p>
                                    </div>
                                    <div class="Contact_us">
                                        <p><i class="fa fa-phone fa-lg"></i> +01 54892 945 - +01 84238 548
                                        </p>
                                    </div>
                                   <div class="Contact_us">
                                        <p><i class="fa fa-envelope fa-lg"></i> gergarages@garage.ie
                                        </p>
                                    </div>
                                    <div class="Contact_us">
                                        <p><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Monday: closed
                                            <br>
                                            Tuesday - Thursday: 8am - 5pm
                                            <br>
                                            Friday - Sunday: 8am - 7 pm
                                        </p>
                                    </div> 

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                </div>
            </article>
        </div>
      
    </section>
   
    </body>