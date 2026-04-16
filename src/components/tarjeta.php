<div class="tarjetas">
    <div class="tarjeta">
        <img src="" alt="">
        <?php
        foreach (parsearImagenes($receta['imagen']) as $img) {
            echo "<img src='$img' alt=''>";
        }
        ?>
        <div class="info">
            <div class="top">
                <span>
                    <?php echo $receta['nombre'] ?>
                </span>
                <span class="autor">Autor</span>
            </div>
            <div class="icons">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>