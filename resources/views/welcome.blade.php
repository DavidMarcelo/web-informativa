<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="shortcut icon" href="icon1.ico">
        <!-- Scripts -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
        

        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .padingTop{
                padding-top: 20px;
            }
            .textService{
                padding-top: 50px;;
                padding-left: 100px;
                padding-right: 100px;
            }
            .imgCardCarusel{
                
                width: 100%;
                height: 100%;
            }
            #map {
                width: 100%;
                height: 350px;
            }
            .acercadedede{
                background: #2ECCFA;
            }
            .imgAcercade{
                padding-top: 30px;
            }
            /*.mapaG{
                height: 50px;
                width: 90%;
            }*/
            .imgListRow{
                height: 250px;
                width: 33%;
            }
            .mainAcercade{
                padding-top: 150px;
            }
            .cardInicio{
                padding-top: 50px;
                left: 60%;
                background: #2ECCFA;
                opacity: 90%;
                color: white;
            }
            .mensajeForm{
                color: black;
            }
            .negro{
                font-weight: bold;
            }
            .enviar-mensaje{
                position: relative;
                left: 58%;
            }
            .inicioEti{
                padding-top: 150px;
                color: black;
            }
            .centrar{
                text-align: center;
            }
            /*.fondoColor{
                opacity: 70%;
            }*/
            .navLlamar{
                font-size: 22px;
                font-weight: bold;
            }
            li{
                font-size: 22px;
            }
            li:hover{
                font-weight: bold;
                background-color: #2ECCFA;
                color: white;
            }
            section{
                padding-top: 100px;
            }
            .btnCircleDer {
                border-radius: 100px;
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
            .btnCircleIzq {
                background: #1ebea5;
                color: white;
                border-radius: 50px;
                position: fixed;
                bottom: 20px;
                left: 10px;
                width: 250px;
                height: 50px;
            }
            .btnDerecha{
                position: absolute;
            }
            .rounded{
                width: 100%;
                height: 100%;
            }
            .shrink {
                transition: 1s ease;
            }

            .shrink:hover{
                -webkit-transform: scale(0.8);
                -ms-transform: scale(0.8);
                transform: scale(0.8);
                transition: 1s ease;
            }
            nav{
                opacity: 90%;
                background: #eeeeee;
            }
        </style>
    </head>
    <body class="antialiased">
        <!--<div class="btnDerecha">
            <button class="btn btn-success btn-circle btn-lg fixed btnCircleIzq" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
                <b>Chatea con nosotros</b>
            </button>
        </div>-->
        
        <nav class="navbar navbar-expand-lg bg fixed-top">
            <a class="navbar-brand" href="#inicio">
                <img src="/storage/logo.jpeg" alt="" width="100" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSecciones" 
            aria-controls="navbarSecciones" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSecciones">
                <ul class="navbar-nav ms-auto order-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#acercade">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ubicanos">Ubicanos</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto order-5">
                    <span class="navbar-text navLlamar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" 
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        llamar al (55) 2484-6474
                    </span>
                </div>
            </div>
        </nav>
        <section id="inicio">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/pensionados-julio-1920w.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/Buisness-Loan-Requirements-1920w.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://impulsoeconomico.mx/wp-content/uploads/Impulso-Economico-Credito-Personal.jpg" class="d-block w-100">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-7 position-absolute inicioEti">
                                <h1><b>YEEKA te ofrece de</b></h1>
                                <h1><b>manera rápida y sencilla</b></h1><br>
                                <h4><i>Préstamos personales diseñados</i></h4>
                                <h4><i>especialmente para ti.</i></h4><br>
                                <h1></h1>
                                <a href="#servicios" class="btn btn-primary btn-lg">Nuestros Servicios</a>
                            </div>
                            <div class="col-4">
                                <div class="card position-absolute col-4 cardInicio">
                                    <center><h4><b>¡Tú próximo crédito está aquí!</b></h4></center>
                                    <div class="card-body">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label negro">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="email" class="form-label negro">Correo</label>
                                                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label for="telefono" class="form-label negro">Telefono</label>
                                                    <input type="number" class="form-control" id="telefono" placeholder="Número telefonico">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="necesita" class="form-label negro">¿Cuánto necesitas?</label>
                                                <input type="number" class="form-control" id="necesita" placeholder="Desde $30,000.00 a $5,000,000.00">
                                            </div>
                                            <div class="mb-3">
                                                <label for="plazo" class="form-label negro">¿A qué plazo quieres pagarlo?</label>
                                                <input type="number" class="form-control" id="email" placeholder="Plazo 3 (meses)">
                                            </div>
                                            <div class="form-floating mensajeForm">
                                                <textarea class="form-control" placeholder="Escriba un mensaje..." id="mensaje"></textarea>
                                                <label for="mensaje">Mensaje</label>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary center btn-lg enviar-mensaje negro">Enviar mensaje</button>
                                        </form>
                                    </div>
                                </div>

                            </div>



                            
                            <button class="btn btn-circle btn-lg fixed btnCircleIzq" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                                <b>Chatea con nosotros</b>
                            </button>
                            <button class="btn btn-danger btn-circle btn-lg fixed btnCircleDer" 
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="servicios">
            <h1 class="centrar"><b>Servicios</b></h1>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 centrar col-md-auto textService" 
                    style="background: #E8E8E8;">
                        <h6 style="opacity: 50%;"><b>Te Ayudamos A Conseguir La Casa De Tus Sueños Con</b></h6>
                        <h3 class="padingTop">Impulso Crédito Hipotecario</h3>
                        <p class="padingTop">
                            Te ayudamos a encontrar la mejor tasa hipotecaria para conseguir tu casa y no endeudarte toda la vida.
                        </p>
                        <button type="button" class="btn btn-outline-secondary padingTop">Solicitar Más Información</button>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                        <img class="rounded float-end shrink" 
                        src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://impulsoeconomico.mx/wp-content/uploads/Impulso-Economico-Cradito-Empresarial.jpg" 
                        alt="">
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 centrar">
                        <img class="rounded float-start shrink"
                            src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://impulsoeconomico.mx/wp-content/uploads/Impulso-Economico-Credito-Hipotecario.jpg" 
                            alt="">
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 textService" style="background: #E8E8E8;">
                        <h6 style="opacity: 50%;"><b>Te Ayudamos A Realizar Tus Proyectos Con</b></h6>
                        <h3 class="padingTop">Impulso Crédito Personal</h3>
                        <p class="padingTop">
                            Estos últimos años han sido dificiles para muchos y sabemos 
                            que hay momentos en los que necesitamos conseguir un préstamo 
                            rapido y sin complicaciones.
                        </p>
                        <p class="padingTop">
                            <b>
                                Nuestros asesores estan calificados para otorgarte las 
                                mejores opciones y ayudarte con los tediosos procesos 
                                de solicitar un crédito en cada una de las instituciones.
                            </b>
                        </p>
                        <button type="button" class="btn btn-outline-secondary padingTop">Solicitar Más Información</button>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12 centrar textService" style="background: #E8E8E8;">
                        <h6 style="opacity: 50%;"><b>Te Ayudamos A Realizar Tus Proyectos Con</b></h6>
                        <h3 class="padingTop">Impulso Crédito Pyme</h3>
                        <p class="padingTop">
                            Como dueños de negocio se necesita tener un 
                            flujo de caja constante para nuevos proyectos, 
                            pagar proveedores o simplemente renovar tu oficina.
                        </p>
                        <p class="padingTop">
                            <b>
                                Te ayudamos a conseguir un crédito desde $30,000 hasta $5,000,000 MXN
                            </b>
                        </p>
                        <button type="button" class="btn btn-outline-secondary padingTop">Solicitar Más Información</button>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                        <img class="rounded float-end shrink" 
                        src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://impulsoeconomico.mx/wp-content/uploads/Impulso-Economico-Cradito-Empresarial.jpg" 
                        alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                        <div class="row centrar">
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" 
                                class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                    <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                </svg>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <h5>Crédito pyme</h5>
                                Enfocado a emprendedores y/o empresarios que 
                                desean iniciar su propio negocio a o capital 
                                inmediato para decir creciendo el cual puedes 
                                usar en cualquier momento con la tasa más baja.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                        <div class="row centrar">
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" 
                                class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                    <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                                </svg>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <h5>Préstamo personal</h5>
                                Otorgamos préstamos desde los $50,000 hasta 
                                $300,000.00 que se adaptan a tus necesidades, 
                                con una tasa preferencial para tu negocio, 
                                emergencia o cumplir tus sueños.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                        <div class="row centrar">
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" 
                                class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                    <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                </svg>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <h5>Crédito pyme</h5>
                                Enfocado a emprendedores y/o empresarios que 
                                desean iniciar su propio negocio a o capital 
                                inmediato para decir creciendo el cual puedes 
                                usar en cualquier momento con la tasa más baja.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                        <div class="row centrar">
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" 
                                class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                    <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                                </svg>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                <h5>Préstamo personal</h5>
                                Otorgamos préstamos desde los $50,000 hasta 
                                $300,000.00 que se adaptan a tus necesidades, 
                                con una tasa preferencial para tu negocio, 
                                emergencia o cumplir tus sueños.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section id="acercade" style="background: #fff9c4;">
            <h1 class="centrar"><b>Acerca de </b></h1>
            <div class="container" >
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 centrar">
                        <h1>¿Porque Impulso Económico Es Tu Mejor Opción?</h1>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 centrar">
                        <p>
                            Somos expertos en gestión de préstamos personales 
                            y empresariales, con más de 20 años de experiencia 
                            en el campo financiero.
                        </p>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 centrar">
                        <p>
                            <b>
                                Gracias a nuestros convenios con diferentes 
                                instituciones financieras nos enfocamos en 
                                otorgar y recomendar el mejor préstamos para 
                                nuestros clientes basado en sus necesidades individuales.
                            </b>
                        </p>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-4 centrar">
                        <div class="row">
                            <svg xmlns="http://www.w3.org/2000/svg"
                             width="100" height="80" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                            </svg>
                        </div>
                        <div class="row centrar">
                            <h6><b>El Dinero Llega A Tu Cuenta</b></h6>                            
                            <p>
                                No te abrimos ninguna cuenta, 
                                ni tarjeta ni nada por el estilo. 
                                Te ayudamos a conseguir un crédito 
                                y lo depositamos a tu cuenta.
                            </p>
                        </div>
                    </div>
                    <div class="col-4 centrar">
                        <div class="row">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            width="100" height="80" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <h6><b>Mejor Que Un Préstamo Bancario</b></h6>                            
                            <p>
                                Nuestros asesores te ayudan a conseguir 
                                tu préstamos sin dar mil vueltas ni 
                                entregar una infinidad de papeles.
                            </p>
                        </div>
                    </div>
                    <div class="col-4 centrar">
                        <div class="row">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            width="100" height="80" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <h6><b>Atención Personalizada</b></h6>                            
                            <p>
                                En estos tiempos la atención personalizada
                                es una gran ventaja, tener un aliado que te 
                                ayude a conseguir un préstamo de acuerdo a 
                                tus necesidades y no un simple vendedor 
                                de banco.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row acercade">
                    <div class="col-5">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/prestamos-comercial-4c76f3bf-447w.jpg" alt=""
                        class="rounded-circle shadow-lg mb-5 bg-white rounded shrink">
                    </div>
                    <div class="col-6 mainAcercade">
                        <h4><b>Acerca de</b></h1>
                        <p>
                            En YEEKA somos una solución y sabemos que un gran futuro es consecuencia de un gran 
                            esfuerzo es por eso que ofrecemos atención personalizada de ejecutivos profesionalmente capacitados 
                            para todos nuestros clientes con el objetivo de brindar el mejor servicio y ampliar las opciones de financiamiento.
                        </p>
                    </div>
                </div>                
            </div>


            <div class="container">
                <div class="row">
                    <center><h3><b>¿Quiénes somos?</b></h3></center>
                </div>
                <div class="row">
                    <div class="col"><img class="shrink" 
                    src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/Time-line-e0f099dc-a025828b-1243w.png" width="100%"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    
                </div>

            </div>
        </section>

        <section id="ubicanos">
            <h1 class="negro centrar">Ubicanos</h1>
            <div class="container ">
                <div class="row ">
                    <div class="col-12">
                        <div id="map"></div>
                        
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 20px;"></div>
            <center><a href="#inicio" class="btn btn-primary btn-lg">Contactanos</a></center>
        </section>

        
        <div style="padding-bottom: 50px;"></div>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Puede seguirnos en nuestras redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                </a>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                </a>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                        <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
                        <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
                    </svg>
                </a>
                <a href="" class="me-4 text-reset">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>YEEKA Solución Global
                </h6>
                <p>
                    Una descripción de la compaña, y un objetivo que quieran
                    realizar, obtener o cosas así.
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Productos
                </h6>
                <p>
                    <a href="#!" class="text-reset">Producto 1</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Producto 2</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Producto 3</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Producto 4</a>
                </p>
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contacto
                </h6>
                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> 52+ 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> 52+ 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="">Inusual Software</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->


        <script>
            //------------------------ANIMATION DE MOSTRADO----------------
            gsap.to(".box", {rotation: 27, x: 100, duration: 1});
            const tl = gsap.timeline({defaults: {duration: 0.6, ease: "power2.inOut"}})
            tl.from(".bg", {x: "-100%", opacity: 0})
            .from("p", {opacity: 0}, "-=0.3")
            .from("h1", {opacity: 0, y: "30px"}, "-=0.3")
            .from("button", {opacity: 0, y: "-40px"}, "-=0.8")
            .from("img", {opacity: 0}, "-=0.3")
            //--------------------------GOOGLE MAPS------------------------
            const map = L.map('map', {
                center: [16.74196580316299, -93.15870204557038],
                zoom: 16
            });
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { 
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' 
            }).addTo(map);
  
            const marker1 = L.marker([16.74196580316299, -93.15870204557038]).addTo(map);
            /*const marker2 = L.marker([-27.643310, 153.305140]).addTo(map);
            const marker3 = L.marker([-33.956330, 122.150270]).addTo(map);
            const marker4 = L.marker([-34.962390, 117.391220]).addTo(map);
            const marker5 = L.marker([-17.961210, 122.214820]).addTo(map);
            const marker6 = L.marker([-16.505960, 151.751520]).addTo(map);
            const marker7 = L.marker([-22.594400, 167.484440]).addTo(map);
            const marker8 = L.marker([-37.977000, 177.057000]).addTo(map);
            const marker9 = L.marker([-41.037600, 173.017000]).addTo(map);
            const marker10 = L.marker([-37.670300, 176.212000]).addTo(map);*/
        </script>
    </body>
</html>