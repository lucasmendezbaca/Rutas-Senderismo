<h2>Editar Ruta</h2>
<?php
echo "<form action='' id='formNuevaAlta'>";
    echo "<div>";
        echo "<label for='titulo'>Título</label>";
        echo "<input type='text' name='titulo' id='titulo' value='" . $ruta->getTitulo() . "'>";
    echo "</div>";
    echo "<div>";
        echo "<label for='descripcion'>Descripción</label>";
        echo "<input type='text' name='descripcion' value='" . $ruta->getDescripcion() . "'>";
    echo "</div>";
    echo "<div>";
        echo "<label for='desnivel'>Desnivel (m)</label>";
        echo "<input type='number' name='desnivel' value='" . $ruta->getDesnivel() . "'>";
    echo "</div>";
    echo "<div>";
        echo "<label for='distancia'>Distancia (km)</label>";
        echo "<input type='number' name='distancia' value='" . $ruta->getDistancia() . "'>";
    echo "</div>";
    echo "<div>";
        echo "<label for='dificultad'>Dificultad</label>";
        echo "<select name='dificultad'>";
            echo "<option value='Fácil'>Fácil</option>";
            echo "<option value='Media'>Media</option>";
            echo "<option value='Difícil'>Difícil</option>";
        echo "</select>";
    echo "</div>";
    echo "<div>";
        echo "<label for='notas'>Notas</label>";
        echo "<textarea name='notas' cols='30' rows='10'>" . $ruta->getNotas() . "</textarea>";
    echo "</div>";
    echo "<div id='buttonEnviar'>";
        echo "<input type='submit' value='Guardar'>";
    echo "</div>";
echo "</form>";
?>