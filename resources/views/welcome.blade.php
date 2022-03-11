<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="shortcut icon" href="icon1.ico">
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .acercadedede{
                background: #2ECCFA;
            }
            .imgAcercade{
                padding-top: 30px;
            }
            .mapaG{
                height: 50px;
                width: 90%;
            }
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
            .fondoColor{
                opacity: 70%;
            }
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
            footer{
                opacity: 80%;
                color: white;
                background: black;
            }
            .btnCircleDer {
                border-radius: 100px;
                position: fixed;
                bottom: 20px;
                right: 20px;
            }
            .btnCircleIzq {
                border-radius: 50px;
                position: fixed;
                bottom: 20px;
                left: 10px;
            }
        </style>
    </head>
    <body class="antialiased">
        <button class="btn btn-success btn-circle btn-lg fixed btnCircleIzq" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
            <b>Chatea con nosotros</b>
        </button>
        <button class="btn btn-danger btn-circle btn-lg fixed btnCircleDer" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
        </button>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
            <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active fondoColor">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/pensionados-julio-1920w.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item fondoColor">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/Buisness-Loan-Requirements-1920w.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item fondoColor">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/b2ap3_large_Qu-diferencias-hay-entre-un-prstamo-hipotecario-y-un-crdito-hipotecario2-1920w.jpg" class="d-block w-100">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-7 position-absolute inicioEti">
                                <h1><b>Inusual Software te ofrece de</b></h1>
                                <h1><b>manera rápida y sencilla</b></h1><br>
                                <h4><i>Préstamos personales diseñados</i></h4>
                                <h4><i>especialmente para ti.</i></h4><br>
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
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section id="servicios">
            <center><h1>Nuestros Servicios</h1></center>
            <div class="container">
                <!--1-->
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" fill="currentColor" 
                                class="bi bi-file-richtext iconService" viewBox="0 0 16 16">
                                    <path d="M7 4.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V7.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V7s1.54-1.274 1.639-1.208zM5 9a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Préstamo personal</b></h5>
                                <p>
                                    Otorgamos préstamos desde los $50,000 hasta $300,000.00 que 
                                    se adaptan a tus necesidades, con una tasa preferencial para 
                                    tu negocio, emergencia o cumplir tus sueños.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" fill="currentColor" 
                                class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Crédito pyme</b></h5>
                                <p>
                                    Enfocado a emprendedores y/o empresarios que desean iniciar su propio 
                                    negocio a o capital inmediato para decir creciendo el cual puedes usar 
                                    en cualquier momento con la tasa más baja.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2-->
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" fill="currentColor" 
                                class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                    <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Crédito mipymes</b></h5>
                                <p>
                                    E fincado a micro, pequeña y medianas empresas que desean 
                                    capital para abrir o hacer crecer tu negocio, brindándote 
                                    una tasa cómodo y segura a control y mediano plazo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" fill="currentColor" 
                                class="bi bi-file-earmark-lock-fill" viewBox="0 0 16 16">
                                  <path d="M7 7a1 1 0 0 1 2 0v1H7V7zM6 9.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 9h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 12h-3a.637.637 0 0 1-.395-.125C6.02 11.807 6 11.742 6 11.7V9.3z"/>
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Crédito revolvente</b></h5>
                                <p>
                                    Línea de crédito flexible que te permite tener 
                                    liquidez en el momento que lo requieras, así 
                                    como vas usando, vas pagando.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                                    <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Crédito automotriz</b></h5>
                                <p>
                                    Compra el auto nuevo o SEMINuevos que deseas, con 
                                    o mejor tasa en crédito automotriz, dirigido también 
                                    a Concesionados de transporte público y taxis a corto 
                                    y mediano plazo, con un financiamiento que se adapta 
                                    a tus necesidades.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Crédito mixto</b></h5>
                                <p>
                                    Te permite es sobre 2 tipos de crédito 
                                    al mismo tiempo, con una tasa baja y 
                                    fija, así pagas tus deudas y edificas 
                                    tus proyectos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--4-->
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" fill="currentColor" 
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Crédito hipotecario</b></h5>
                                <p>
                                    Para la compra, remodelación o ampliación 
                                    de tu vivienda a corto y mediano plazo sin 
                                    arriesgar tu patrimonio con una tasa baja 
                                    y fija.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                    <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                                </svg>
                            </div>
                            <div class="mb-3 col-8">
                                <h5><b>Pensionados y jubilados</b></h5>
                                <p>
                                    Por que no hay edad para lograr lo que sueñas, 
                                    este tipo de crédito va dirigido para personas 
                                    a partir de de los 60 años o pensionados bajo 
                                    ley 73, con tasa preferencial a corto plazo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/pensionados-julio-1920w.jpg" class="imgListRow" >
            <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/Buisness-Loan-Requirements-1920w.jpg" class="imgListRow" >
            <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/prestamos-comercial-4c76f3bf-447w.jpg" class="imgListRow" >
        </section>

        <section id="acercade">
            <div class="container">
                <!--Fila-->
                <div class="row acercade">
                    <div class="col-5">
                        <img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/prestamos-comercial-4c76f3bf-447w.jpg" alt=""
                        class="rounded-circle shadow-lg mb-5 bg-white rounded ">
                    </div>
                    <div class="col-6 mainAcercade">
                        <h4><b>Acerca de</b></h1>
                        <p>
                            En Inusual Software somos una solución y sabemos que un gran futuro es consecuencia de un gran 
                            esfuerzo es por eso que ofrecemos atención personalizada de ejecutivos profesionalmente capacitados 
                            para todos nuestros clientes con el objetivo de brindar el mejor servicio y ampliar las opciones de financiamiento.
                        </p>
                    </div>
                </div>                
            </div>



            <div class="acercadedede">
                <!--Fila-->
                <div class="row ">
                    <center><h3><b>¿Por qué solicitar tu crédito con NOSOTROS?</b></h3></center>
                    <div class="col-2">
                        <div class="row imgAcercade">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <center>
                                <p>
                                    Con Inusual Software puedes acceder a créditos con montos de préstamo más altos.
                                </p>
                            </center>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row imgAcercade">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <center>
                                <p>
                                    Te ofrecemos tasas de interés flexibles y competitivas.
                                </p>
                            </center>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row imgAcercade">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <center>
                                <p>
                                    Contamos con el servicio más rápido. Te resolvemos en menos de 24 horas.
                                </p>
                            </center>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row imgAcercade">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <center>
                                <p>
                                    Al ser una empresa líder en nuestra categoría, tendrás la mayor seguridad al tramitar tu crédito.
                                </p>
                            </center>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row imgAcercade">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="90" 
                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                        <div class="row">
                            <center>
                                <p>
                                    Cuentas con asesoría profesional que te apoyará en todo momento.
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>





            <div class="container">
                <!--Fila-->
                <div class="row">
                    <center><h3><b>¿Quiénes somos?</b></h3></center>
                </div>
                <div class="row">
                    <div class="col"><img src="https://lirp.cdn-website.com/a31a0d06/dms3rep/multi/opt/Time-line-e0f099dc-a025828b-1243w.png" width="100%"></div>
                </div>
            </div>
        </section>

        <section id="ubicanos">
            <h1 class="negro centrar">Ubicanos</h1>
            <div class="container ">
                <div class="row ">
                    <div class="col-12">
                        <div class="card" style="width: 70rem; height: 18rem;">
                            <x-maps-leaflet 
                                :centerPoint="['lat' => 16.74196580316299, 'long' => -93.15870204557038]"
                                :zoomLevel="17"
                                :markers="[['lat' => 16.74196580316299, 'long' => -93.15870204557038]]">
                            </x-maps-leaflet> 
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 20px;"></div>
            <center><a href="#inicio" class="btn btn-primary btn-lg">Contactanos</a></center>
        </section>
        <div style="padding-bottom: 50px;"></div>
        <footer>
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <center><p><b>@ 2022 hecho para "". Creado en <a href="https://inusualsoftware.com/">Inusual Software</a></b></p></center>
                </div>
            </div>
        </footer>
    </body>
</html>