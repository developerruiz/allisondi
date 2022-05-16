<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="img/portada-link.jpg" />

    <title>AllisonDi</title>
    <meta property="og:url" content="https://allisondi.com.m/" />

    <!-- DESCRIPCIÓN -->
    <meta property="og:description" content="" />

    <!-- DESCRIPCIÓN -->
    <meta name="description" content="" />

    <!-- PALABRAS CLAVES    -->
    <meta name="keywords" content="" />

    <!-- NOMBRE DEL SITIO -->
    <meta property="og:site_name" content="https://allisondi.com.m/" />

    <meta property="fb:admins" content="ID de Facebook " />
    <meta property="article:published_time" content="2022-02-17T11:25:00+01:00" />
    <meta property="article:modified_time" content="2022-02-17T11:25:47+01:00" />
    <meta property="og:type" content="website" />
    <meta name="author" content="Ivan Ruiz Rodriguez || Front-end Developer" />
    <meta name="revised" content="17/02/2022" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Allisondi">

    <!-- descripcion -->
    <meta itemprop="description" content="">

    <!-- IMAGEN DE PUBLICIDAD -->
    <meta itemprop="image" content="">

    <!-- Nos sirve para guardar una cookie. Los datos guardados son clave/valor -->
    <meta http-equiv="cookie" content="clave=valor; expires=Wednesday, 17-02-22 11:25:59 GMT;" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">


    <!-- TODO: IMAGEN DE PORTADA -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- FONTAWENSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- GOOGLE ANALITYCS -->

</head>

<body>

    <?php include "complement/header.php"?>

    <div class="container-fluid">
        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light collapse h-100">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Construccion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Metalúrgica (Metales)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Automotriz y Camiones
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Textil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Equipo de protección personal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Insumos Médicos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Productos de Limpieza
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Jardinería
                            </a>
                        </li>
                    </ul>

                 
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <div class="col-lg-12 d-flex flex-wrap">


                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5> Construccion</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/construccion.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5> Metalúrgica (Metales)</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/metalurgica.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5> Automotriz y Camiones</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/automotriz.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5>  Textil</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/textil.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5> Equipo de protección personal</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/equipo_proteccion.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5>  Insumos Médicos</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/eqiupo_medico.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5>   Productos de Limpieza</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/limpieza.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-3">
                        <div class="card border-0 h-100">
                            <div class="card-img">
                                <img src="img/equipo-2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h5> Jardinería</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, rem!</p>
                            </div>
                            <div class="d-grid gap-2">
                             
                            <a href="views/jardineria.php" class="color-orange text-end text-decoration-none fw-bold">Ver más</a>

                            </div>
                        </div>
                    </div>

                
                </div>
            </main>
        </div>
    </div>


    <?php include "complement/footer.php"?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <script src="js/dashboard.js"></script>


</body>

</html>