<?php require './config.php'; ?>
<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= ESTILOS ?>estilo.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= ESTILOS ?>bootstrap-5/css/bootstrap.min.css">

    <!-- Box icons -->
    <link rel="stylesheet" href="<?= ROUTE ?>public/icons/boxicons/css/boxicons.min.css">
    <title>PORL-ISPEKA</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="oculto nav-scroll navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <div class="div">
                    <a href="#" class="btn btn-auth rounded-2">
                        <i class="bx bx-lock-alt me-2"></i>
                        Autenticar
                    </a>
                </div>

            </div>
        </div>

    </nav>
    <nav class="nav-init navbar bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PORL-ISPEKA</a>
            <button class="navbar-toggler border-2 btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="bx bx-menu"></span>
            </button>
            <div class=" offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <main>
        <!-- fundo gradiente -->
        <div class="capa">
            <div class="container">
                <div class="titulo text-center">
                    <h2 class="text-white">PORL-ISPEKA</h2>
                </div>
                <div class="mt-3 text-center">
                    <h5 class="text-white">Plataforma Online de Reserva de Lugar</h5>
                </div>
            </div>
        </div>
    </main>
    <!-- Section Informação -->

    <section class="bg-light mb-5">
        <aside class="container mb-3">
            <div class="row">
                <div class="mt-4 mb-2">
                    <h3 class="info-sobre">SOBRE PORL</h3>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 col-sm-12 col-12 mb-3">
                    <div class="card h-100 border-0 shadow-sm rounded-2">
                        <div class="card-body">
                            <h5 class="card-title">O que é PORL?</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae minus maxime quidem nesciunt animi, aperiam suscipit neque unde aliquam ut distinctio totam optio in soluta rem aspernatur quaerat error dolorum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-3 mb-3">
                    <div class="card h-100 border-0 shadow-sm rounded-2 hover-card">
                        <div class="card-body">
                            <h5 class="card-title">Porque usar?</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam quos excepturi dolorem consequatur odio unde vel, vitae officiis nulla explicabo ab harum aliquid maiores nesciunt nam delectus ipsa autem cum?</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-xl-3 mb-3">
                    <div class="card h-100 border-0 shadow-sm rounded-2 hover-card">
                        <div class="card-body">
                            <h5 class="card-title">Como usar?</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam quos excepturi dolorem consequatur odio unde vel, vitae officiis nulla explicabo ab harum aliquid maiores nesciunt nam delectus ipsa autem cum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
    </section>

    <!-- Scripts -->
    <script src="<?= ESTILOS ?>bootstrap-5/js/bootstrap.min.js"></script>

    <script>
        window.addEventListener('scroll', function() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var scrollPercent = scrollTop / (document.documentElement.scrollHeight - document.documentElement.clientHeight) * 100;

            if (scrollPercent >= 20) {
                document.querySelector('.nav-scroll').classList.remove('oculto');
                document.querySelector('.nav-init').classList.add('oculto');
            } else {
                document.querySelector('.nav-scroll').classList.add('oculto');
                document.querySelector('.nav-init').classList.remove('oculto');
            }
        });
    </script>
</body>

</html>