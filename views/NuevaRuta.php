<h2 id='altaRuta'>ALTA DE NUEVA RUTA</h2>
<form action="index.php?controller=ruta&action=insert" id='formNuevaAlta' method='post'>
    <div>
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo">
    </div>
    <div>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion">
    </div>
    <div>
        <label for="desnivel">Desnivel (m)</label>
        <input type="number" name="desnivel">
    </div>
    <div>
        <label for="distancia">Distancia (km)</label>
        <input type="number" name="distancia">
    </div>
    <div>
        <label for="dificultad">Dificultad</label>
        <select name="dificultad">
            <option value="Fácil">Fácil</option>
            <option value="Media">Media</option>
            <option value="Difícil">Difícil</option>
        </select>
    </div>
    <div>
        <label for="notas">Notas</label>
        <textarea name="notas" cols="30" rows="10"></textarea>
    </div>
    <div id='buttonEnviar'>
        <input type="submit" value="Guardar">
    </div>
</form>