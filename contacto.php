<?php include('header.php') ?>



<div class="container-fluid first-section" style="background-image: url(imagenes/php.jpg);">

    <form class="formulario-contacto">

        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre">
            </div>
        </div>
        <div class="row mb-3">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido">
            </div>
        </div>

        <div class="row mb-3">
            <label for="comentarios" class="col-sm-2 col-form-label">Comentarios</label>
            <div class="col-sm-10">
                <textarea name="comentarios" id="comentarios" cols="130" rows="10"></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>



<?php include('footer.php') ?>