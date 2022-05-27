<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad Integradora Obligatoria Módulo 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
  </head>
  <body>

    <?php 

    //cursos
    const   CURSO = 'Cursos - Ciclo Lectivo 2022';

    $phpIni = 'PHP y MySQL Inicial';
    $phpInter = 'PHP y MySQL Intermedio';
    $phpAvan = 'PHP y MySQL Avanzado';
    
    //precios

    $precioIni = 16500;
    $precioInter = 17800;
    $precioAvan = 19000;
    
    //total

    $total = $precioIni + $precioInter + $precioAvan;
    $totalDcto = $total - ($total * 30) / 100;
    ?>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo CURSO ?> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo $phpIni ?></a>
                    <a class="nav-link active" href="#"><?php echo $phpInter ?></a>
                    <a class="nav-link active" href="#"><?php echo $phpAvan ?></a>
                </div>
            </div>
        </div>
    </nav>

    <section class="first-section" style="background-image: url(imagenes/php.jpg);">

        <div class="cards-container">
            <div class="card">
                <img src="imagenes/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $phpIni ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, porro.</p>
                    <a href="#" class="btn btn-primary">Precio: ARS <?php echo $precioIni?></a>
                </div>
            </div>

            <div class="card">
                <img src="imagenes/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $phpInter ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, porro.</p>
                    <a href="#" class="btn btn-primary">Precio: ARS <?php echo $precioInter?></a>
                </div>
            </div>

            <div class="card">
                <img src="imagenes/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $phpAvan ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, porro.</p>
                    <a href="#" class="btn btn-primary">Precio: ARS <?php echo $precioAvan?></a>
                </div>
            </div>
        </div>

        <div class="price" style="background-image: url(imagenes/fondo.webp);">
            
            <div class="total-price">
                <a href="#" class="btn btn-danger">Precio Total: ARS <?php echo $total?></a>
            </div>

            <div class="promo-price">
                <a href="#" class="btn btn-success">Abonando en efectivo: ARS <?php echo $totalDcto ?></a>
            </div>

        </div>

        
    </section>



    <footer>
        <p>Juan Manuel Gómez - 2022</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>