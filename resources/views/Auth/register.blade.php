<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid" style="background-color: #000000;">
            <div class="row">
                <div class="col-sm-6 text-white">
                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <img src="{{asset('img/pksinfondo.png')}}" style="width: 40%; margin-top:5%" alt="">
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-0 pt-0 pt-xl-0 mt-xl-n0"> <!-- Modificado el margen y relleno aquí -->
                        <form action="{{route('validar-registro')}}" method="post" style="width: 23rem;">
                            @csrf
                            <h1 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h1>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="typeEmailX" class="form-control form-control-sm" placeholder="Email" required />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" name="password" id="typePasswordX" placeholder="Contraseña" class="form-control form-control-sm" required />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="name" id="name" placeholder="Usuario" class="form-control form-control-sm" required />
                            </div>
                            <div class="pt-1 mb-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Check in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{asset('img/PKtienda.png')}}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>