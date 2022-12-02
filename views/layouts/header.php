<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asserts/style.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="./asserts/img/senderismo.gif" alt="ruta senderismo">
            <h1>Rutas senderismo</h1>
        </header>
        <div id="buscador">
            <div class='primeraParte'>
                <form action="index.php?controller=ruta&action=selectSearch" method='post'>
                    <div>
                        <label for="titulo">Buscar por el campo</label>
                        <select name="titulo">
                            <option value="Título">Título</option>
                            <option value="Descripción">Descripción</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="campo">
                        <input type="submit" value="¡Buscar!">
                    </div>
                </form>
            </div>
            <div class='segundaParte'>
                <div>
                    <button><a href="index.php?controller=ruta&action=new">Nueva ruta</a></button>
                </div>
                <div>
                    <button><a href="index.php">Listado completo</a></button>
                </div>
            </div>
            
        </div>
        <hr>