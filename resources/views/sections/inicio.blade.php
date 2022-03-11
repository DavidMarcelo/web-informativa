@section('content')
<section id="inicio">
    <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/fondo1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/fondo2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/fondo3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 position-absolute">
                        <h1><b>BEECAPITAL te ofrece de</b></h1>
                        <h1><b>manera rápida y sencilla</b></h1>
                        <h4><i>Préstamos personales diseñados</i></h4>
                        <h4><i>especialmente para ti.</i></h4>
                        <br><br>
                        <button class="btn btn-primary">Nuestros Servicios</button>
                    </div>
                    <div class="col-5">
                        <div class="card position-absolute col-5 card-inicio">
                            <center><h4>¡Tú próximo crédito está aquí!</h4></center>
                            <div class="card-body">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label for="email" class="form-label">Correo</label>
                                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="telefono" class="form-label">Telefono</label>
                                            <input type="number" class="form-control" id="telefono" placeholder="Número telefonico">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="necesita" class="form-label">¿Cuánto necesitas?</label>
                                        <input type="number" class="form-control" id="necesita" placeholder="Desde $30,000.00 a $5,000,000.00">
                                    </div>
                                    <div class="mb-3">
                                        <label for="plazo" class="form-label">¿A qué plazo quieres pagarlo?</label>
                                        <input type="number" class="form-control" id="email" placeholder="Plazo 3 (meses)">
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Escriba un mensaje..." id="mensaje"></textarea>
                                        <label for="mensaje">Mensaje</label>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary center btn-lg enviar-mensaje">Enviar mensaje</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
@include('sections.servicios')