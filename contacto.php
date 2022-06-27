<?php include('header.php') ?>


<div class="container-fluid first-section" style="background-image: url(imagenes/php.jpg);">

<?php 

if(isset($_GET['e'])){
    include('mensaje_ok.html');
    $estado = 'none';
};


?>
    <form action="enviar_consulta.php" method="POST" class="formulario" style="display: <?=$estado ?> ;">

        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-5">
            <input type="text" required class="form-control" id="nombre" name="nombre">
            </div>
        </div>
        <div class="row mb-3">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-5">
            <input type="text" required class="form-control" id="apellido" name="apellido">
            </div>
        </div>
        <div class="row mb-3">
            <label for="mail" class="col-sm-2 col-form-label">Mail</label>
            <div class="col-sm-5">
            <input type="email" required class="form-control" id="mail" name="mail">
            </div>
        </div>

        <div class="row mb-3">
            <label for="comentarios" class="col-sm-2 col-form-label">Comentarios</label>
            <div class="col-sm-5">
                <textarea name="comentarios" required id="comentarios" cols="70" rows="10"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-danger boton">Enviar</button>

    </form>




</div>



<?php include('footer.php') ?>