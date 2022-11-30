<table>
    <th>
        <td>Titulo</td>
        <td>Descripción</td>
        <td>Desnivel (m)</td>
        <td>Distancia (km)</td>
        <td>Dificultad</td>
        <td>Operaciones</td>
    </th>
    <?php
    foreach($rutas as $ruta) {
        echo "<tr>";
            echo "<td>" . $ruta->getTitulo() . "</td>";
            echo "<td>" . $ruta->getDescripcion() . "</td>";
            echo "<td>" . $ruta->getDesnivel() . "</td>";
            echo "<td>" . $ruta->getDistancia() . "</td>";
            echo "<td>" . $ruta->getDificultad() . "</td>";
            echo "<td><a href='index.php?controller=ruta&action=edit&id=" . $ruta->getId() . "'>Editar</a></td>";
            echo "<td><a href='index.php?controller=ruta&action=delete&id=" . $ruta->getId() . "'>Borrar</a></td>";
        echo "</tr>";
    }
    ?>
</table>