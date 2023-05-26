<!DOCTYPE html>
<!--Documento realizado por el alumno Pedro Godoy Polaina para el ejercicio
del tema 5 de DAW-->
<!-- MODIFICACIÓN que se realiza para comprobar la funcionalidad de NetBeans 
para actualizar los archivos del repositorio en GitHub Actividad 2.3 -->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Hoja de estilos para el documento html */
        h1,
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

       .formulario {
            font-size: 16px;
            max-width: 400px;
            margin: 0 auto;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;

        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        .campos {
            width: 95%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .selector {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Estilo para resultado */
        p {
            font-size: 20px;
            margin-top: 20px;
            text-align: center;
        }
    </style>


    <title>DAW Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <h2>Práctica DAW Pedro Godoy Polaina</h2>
    <form class="formulario" method="post" action="">
        <label for="a">Primer número:</label>
        <input class="campos" type="text" name="a" id="a"><br><br>
        <label for="b">Segundo número:</label>
        <input class="campos" type="text" name="b" id="b"><br><br>
        <label for="operacion">Operación:</label>
        <select class="selector" name="operacion" id="operacion">
            <option value="suma">SUMAR NÚMEROS</option>
            <option value="resta">RESTAR NÚMEROS</option>
        </select><br><br>
        <input class="boton" type="submit" value="Calcular">
    </form>
    <?php
    include("./practica-GODOY.php");
    ?>

</body>

</html>