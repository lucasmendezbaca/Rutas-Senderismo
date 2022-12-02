<h2>Comentar Ruta</h2>
<?php
echo "<div class='page_main_content'>";
    echo "<div>";
        echo "<label for='titulo'>Título</label>";
        echo "<p>" . $ruta->getTitulo() . "</p>";
    echo "</div>";
    echo "<div>";
        echo "<label for='descripcion'>Descripción</label>";
        echo "<p>" . $ruta->getDescripcion() . "</p>";
    echo "</div>";
    echo "<div>";
        echo "<label for='desnivel'>Desnivel (m)</label>";
        echo "<p>" . $ruta->getDesnivel() . "</p>";
    echo "</div>";
    echo "<div>";
        echo "<label for='distancia'>Distancia (km)</label>";
        echo "<p>" . $ruta->getDistancia() . "</p>";
    echo "</div>";
    echo "<div>";
        echo "<label for='dificultad'>Dificultad</label>";
        echo "<p>" . $ruta->getDificultad() . "</p>";
    echo "</div>";
    echo "<div>";
        echo "<label for='notas'>Notas</label>";
        echo "<p>" . $ruta->getNotas() . "</p>";
    echo "</div>";
echo "</div>";


echo '<table class="tabla_comentarios">
    <tr>
        <td class="encabezado_tabla">Nombre</td>
        <td class="encabezado_tabla">Fecha</td>
        <td class="encabezado_tabla">Comentario</td>
    </tr>';
    foreach($comentarios as $comentario) {
        echo "<tr>";
            echo "<td>" . $comentario->getNombre() . "</td>";
            echo "<td>" . $comentario->getFecha() . "</td>";
            echo "<td>" . $comentario->getTexto() . "</td>";
        echo "</tr>";
    }
    echo "<tr>";
        echo "<form action='index.php?controller=comentario&action=insert' method='post'>";
            echo "<td class='tdComentar'>";
                    echo "<input type='hidden' name='id_ruta' value='" . $ruta->getId() . "' />";
                    echo "<input type='text' name='nombre' />";
            echo "</td>";
            echo "<td class='tdComentar'>";
                    echo "<span>" . date("Y-m-d") . "</span>";
            echo "</td>";
            echo "<td class='tdComentar'>";
                    echo "<input type='text' name='texto' />";
            echo "</td>";
            echo "<tr>";
                echo "<td colspan='3' id='submitComentar'>";
                    echo "<input type='submit' value='Comentar'/>";
                echo "</td>";
            echo "</tr>";
        echo "</form>";
    echo "</tr>";
echo "</table>";

?>