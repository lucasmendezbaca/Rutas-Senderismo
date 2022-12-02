<table>
    <tr>
        <td class="encabezado_tabla">Titulo</td>
        <td class="encabezado_tabla">Descripción</td>
        <td class="encabezado_tabla">Desnivel (m)</td>
        <td class="encabezado_tabla">Distancia (km)</td>
        <td class="encabezado_tabla">Dificultad</td>
        <td class="encabezado_tabla">Operaciones</td>
    </tr>
    <?php
    foreach($rutas as $ruta) {
        echo "<tr>";
            echo "<td>" . $ruta->getTitulo() . "</td>";
            echo "<td>" . $ruta->getDescripcion() . "</td>";
            echo "<td>" . $ruta->getDesnivel() . "</td>";
            echo "<td>" . $ruta->getDistancia() . "</td>";
            echo "<td>" . $ruta->getDificultad() . "</td>";
            echo "<td>";
                echo "<button class='boton_opciones'><a href='index.php?controller=ruta&action=edit&id=" . $ruta->getId() . "'>Editar</a></button>";
                echo "<button class='boton_opciones'><a href='index.php?controller=ruta&action=delete&id=" . $ruta->getId() . "'>Borrar</a></button>";
                echo "<button class='boton_opciones'><a href='index.php?controller=comentario&action=comment&id=" . $ruta->getId() . "'>Comentar</a></button>";
            echo "</td>";
        echo "</tr>";
    }
    ?>
</table>