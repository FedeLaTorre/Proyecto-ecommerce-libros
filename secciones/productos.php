<?php

require 'librerias/info-productos.php';

$productos = traerLIBROS();
?>
<main>

    <section>
        <h2>Nuestros libros</h2>
        <div id="libros">
            <?php
           foreach($productos as $unProducto):
        ?>
            <h3>
                <?= $unProducto['titulo'];?>
            </h3>
            <div>
                <picture>
                    <source srcset="img/<?= str_replace('.jpg', '-big.jpg', $unProducto['imagen']);?>" media="all and (min-width: 600px)">
                    <img src="img/<?= $unProducto['imagen'];?>" alt="<?= $unProducto['alt'];?>">
                </picture>

                <p>Páginas:
                    <?= $unProducto['paginas'];?>
                </p>
                <p>Precio:
                    <?= $unProducto['precio'];?>
                </p>
                <p>Genero:
                    <?= $unProducto['genero'];?>


                </p>
                <p><a href="index.php?s=detalle">Ver más detalles</a></p>
            </div>
            <?php
        endforeach;
        ?>
        </div>
    </section>

</main>