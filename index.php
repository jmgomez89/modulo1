<?php include('header.php') ?>


    <div class="container-fluid first-section" style="background-image: url(imagenes/php.jpg);">

        <div class="cards-container">
            <div class="card">
                <img src="imagenes/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $phpIni ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, porro.</p>
                    <a href="#" class="btn btn-primary">Precio: ARS <?php echo $precioIni?></a>
                    <a href="curso.php?curso=inicial" class="btn btn-secondary">Detalles</a>
                </div>
            </div>

            <div class="card">
                <img src="imagenes/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $phpInter ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, porro.</p>
                    <a href="#" class="btn btn-primary">Precio: ARS <?php echo $precioInter?></a>
                    <a href="curso.php?curso=intermedio" class="btn btn-secondary">Detalles</a>
                </div>
            </div>

            <div class="card">
                <img src="imagenes/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $phpAvan ?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, porro.</p>
                    <a href="#" class="btn btn-primary">Precio: ARS <?php echo $precioAvan?></a>
                    <a href="curso.php?curso=avanzado" class="btn btn-secondary">Detalles</a>
                </div>
            </div>
        </div>

        <div class="price" style="background-image: url(imagenes/fondo.webp);">
            
            <div class="total-price">
                <a href="#" class="btn btn-danger">Precio Total: ARS <?php echo $total?></a>
            </div>

        </div>

    </div> 
   


    <?php include('footer.php') ?>
    