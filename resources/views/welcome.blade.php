<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="vendor/adminlte/dist/img/icono_.png" type="">

    <title> MEDIMONT </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />


    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">

        <div class="hero_bg_box" style="background: #178066">

        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            MEDIMONT
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">Qui??nes somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="departments.html">Departmentos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('inicio') }}">Ingresar</a>
                            </li>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            MISI??N
                                        </h1>
                                        <p>
                                            somos una instituci??n que ofrece servicios de atenci??n primaria y
                                            especializada en salud, promovido un concepto de manejo integral al usuario,
                                            por medio de un servicio personalizado, atendido por un equipo
                                            multidisciplinario altamente calificado y de la mayor confiabilidad.
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Leer mas
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            VISI??N
                                        </h1>
                                        <p>
                                            Somos una instituci??n l??der en la regi??n, en promoci??n, prevenci??n,
                                            diagn??stico, tratamiento, gesti??n del riesgo en salud y manejo
                                            especializado, propendiendo por el control o mitigaci??n, de las
                                            complicaciones, generando cambios positivos en el entorno biopsicosocial de
                                            los pacientes atendidos, con los m??s altos niveles de satisfacci??n, sentido
                                            humano y seguridad en los procesos de atenci??n.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Leer mas
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            MEDIMONT
                                        </h1>
                                        <p>
                                            En MEDIMONT queremos cuidar tu salud y la de tu familia, por eso te
                                            ofrecemos
                                            diversas alternativas para tu bienestar
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Leer mas
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- department section -->

    <section class="department_section layout_padding">
        <div class="department_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Nuestros Departmentos
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    CARDIOLOG??A
                                </h5>
                                <p>
                                    Ofrecemos consulta especializada en cardiolog??a no invasiva
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>

                                    DIAGN??STICO
                                </h5>
                                <p>
                                    Consulta y descarga tus resultados.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    CIRUG??A
                                </h5>
                                <p>
                                    En cirug??a se atienden pacientes adultos y pedi??tricos con patolog??as.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    PRIMEROS AUXILIOS
                                </h5>
                                <p>
                                    Ofrecemos primeros auxilios a personas accidentadas, antes de ser trasladada a un
                                    centro de salud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="">
                        Ver todo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end department section -->

    <!-- about section -->

    <section class="about_section layout_margin-bottom">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Sobre <span>nosotros</span>
                            </h2>
                        </div>
                        <p>
                            Desde su fundaci??n la Cl??nica SYSMANT vela no s??lo por las necesidades materiales y el
                            bienestar temporal del hombre, sino la persona en su totalidad. Se preocupa por la salud
                            f??sica, ps??quica y espiritual de sus usuarios. Se abre desde sus comienzos a un servicio
                            hospitalario fundamentado en una antropolog??a cristiana, coherente con los valores del
                            Evangelio, que asegure su ??nica opci??n: SERVICIO INTEGRAL.
                        </p>
                        <a href="">
                            Leer mas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- doctor section -->

    <section class="doctor_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Nuestros Doctores
                </h2>
                <p class="col-md-10 mx-auto px-0">
                    Que ese hombre sabio, que alaba nuestros oficios actuales, tenga un deseo de ganar, cualquiera y
                    cualquier cosa. Por los servicios de los que alaban, se estimula el vuelo al placer, huya el error
                    de los que son f??ciles y huyen a menudo, bienaventurado el que hace eso. </p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/d1.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5>
                                Elina Josh
                            </h5>
                            <h6 class="">
                                Doctor
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/d2.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5>
                                Adam View
                            </h5>
                            <h6 class="">
                                Doctor
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/d3.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5>
                                Mia Mike
                            </h5>
                            <h6 class="">
                                Doctor
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Ver todo
                </a>
            </div>
        </div>
    </section>

    <!-- end doctor section -->

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Contacto
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container contact-form">
                        <form action="">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div>
                                        <input type="text" placeholder="Nombres " />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <input type="text" placeholder="Telefono" />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Mensaje" />
                            </div>
                            <div class="btn_box">
                                <button>
                                    ENVIAR
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center ">
                <h2>
                    Testimonios
                </h2>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <h6>
                                                Richard Montalvo
                                            </h6>
                                        </div>
                                        <p>
                                            Es dif??cil expresar en pocas palabras mi agradecimiento y satisfacci??n por
                                            el servicio y el trato recibido a lo largo de todo el proceso, tanto por el
                                            personal administrativo, como por el t??cnico o facultativo, donde la
                                            atenci??n personal nunca estuvo re??ida con la profesionalidad.
                                        </p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="https://pymstatic.com/44253/conversions/xavier-molina-medium.jpg"
                                            alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <h6>
                                                Pedro Perez
                                            </h6>
                                        </div>
                                        <p>
                                            Si tuviese que elegir una sola palabra para definir el trabajo de la Dra.
                                            Gonz??lez y de todo su equipo esa ser??a: "IMPECABLE". Impecable en el trato
                                            al paciente e impecable en su minuciosidad al trabajar.
                                            Gracias por vuestra dedicaci??n.
                                        </p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="https://www.inboundcycle.com/hubfs/ClaraAlvarez.jpg"
                                            alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <h6>
                                                Andrea Guzman
                                            </h6>
                                        </div>
                                        <p>
                                            Me gustar??a haceros llegar mi agradecimiento por el trato tan espectacular
                                            que ten??is conmigo en cada momento y por el detalle que me hab??is enviado el
                                            d??a de mi operaci??n. </p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button"
                        data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button"
                        data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer_col">
                    <div class="footer_contact">
                        <h4>
                            llegar a..
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Locacion
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Llamar +57 300870766
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    sysmant@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="footer_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer_col">
                    <div class="footer_detail">
                        <h4>
                            Sobre
                        </h4>
                        <p>
                            Desde su fundaci??n la Cl??nica SYSMANT vela no s??lo por las necesidades materiales y el
                            bienestar temporal del hombre, sino la persona en su totalidad. Se preocupa por la salud
                            f??sica, ps??quica y espiritual de sus usuarios.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto footer_col">
                    <div class="footer_link_box">
                        <h4>
                            Enlaces
                        </h4>
                        <div class="footer_links">
                            <a class="active" href="index.html">
                                Inicio
                            </a>
                            <a class="" href="about.html">
                                Qui??nes somos
                            </a>
                            <a class="" href="departments.html">
                                Departmentos
                            </a>
                            <a class="" href="doctors.html">
                                Contacto
                            </a>
                            <a class="" href="contact.html">
                                Ingresar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer_col ">
                    <h4>
                        Boletin informativo
                    </h4>
                    <form action="#">
                        <input type="email" placeholder="Ingresar email" />
                        <button type="submit">
                            Subcribir
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> Todos los derechos reservados by
                    <a href="https://html.design/">diplomado <br><br></a>
                    &copy; <span id="displayYear"></span> Diplomado by
                    <a href="https://themewagon.com/">Pier Pe??a</a>
                </p>

            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
