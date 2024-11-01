<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Impuestos</title>
    <link rel="stylesheet" href="./styles/style.css"> <!-- Asegúrate de tener tu archivo CSS -->
</head>
<body>

    <main class="presentacion__contenido"> 

        <div class="seccion__titulo__logo">
            
            <div class="presentacion__logo">
                <img class="Logo" src="./assets/Logo.png" alt="Logotipo">
            </div>

            <h1 class="presentacion__titulo">CÁLCULO DE IMPUESTOS</h1>

            <h2 class="presentacion_subtitulo">
            Ingresa tus datos para obtener la cantidad de impuestos a pagar. 
            </h2>
        </div>

        <div class="container">
            <label>FORMULARIO DE SUELDO</label>
            <form method="POST" action="">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="sueldo">Seleccione el rango en el que se encuentra su ingreso:</label>
                <select id="sueldo" name="sueldo" required>
                    <option value="0-1000">0 - 1000</option>
                    <option value="1001-3000">1001 - 3000</option>
                    <option value="3001+">+3000</option>
                </select>

                <button type="submit">Enviar</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = trim($_POST['nombre']);
                    $sueldo = $_POST['sueldo'];

                    if (empty($nombre)) {
                        echo "<p class='error'>Por favor, ingrese su nombre.</p>";
                    } else {
                        if ($sueldo == "0-1000") {
                            echo "<p class='resultado'>$nombre: <strong>No paga impuestos.</strong></p>";
                        } elseif ($sueldo == "1001-3000") {
                            echo "<p class='resultado'>$nombre: <strong>Paga el 20% de impuestos.</strong></p>";
                        } elseif ($sueldo == "3001+") {
                            echo "<p class='resultado'>$nombre: <strong>Debe pagar el 50% de impuestos.</strong></p>";
                        }
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>
