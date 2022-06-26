<?php include('header.php') ?>


<div class="container-fluid first-section" style="background-image: url(imagenes/php.jpg);">

    <?php

        if(isset($_GET['curso'])){
            switch ($_GET['curso']){
                case 'inicial':
                 include('inicial.html');
                break;
                case 'intermedio':
                 include('intermedio.html');
                break;
                case 'avanzado':
                 include('avanzado.html');
                break;                    
            
            }
             

        }
        
    
    ?>

        
</div>


<?php include('footer.php') ?>