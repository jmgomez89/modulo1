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
            <a class="navbar-brand" href="index.php"><?php echo CURSO ?> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="curso.php?curso=inicial"><?php echo $phpIni ?></a>
                    <a class="nav-link active" href="curso.php?curso=intermedio"><?php echo $phpInter ?></a>
                    <a class="nav-link active" href="curso.php?curso=avanzado"><?php echo $phpAvan ?></a>
                </div>
            </div>
        </div>
    </nav>

