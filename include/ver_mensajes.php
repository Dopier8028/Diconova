<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes Recibidos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2f3e55;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #2f3e55;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f5f7fb;
        }

        .mensaje {
            max-width: 250px;
            word-wrap: break-word;
        }

        .sin-datos {
            text-align: center;
            padding: 20px;
            color: #888;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>📩 Mensajes Recibidos</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Asunto</th>
            <th>Mensaje</th>
            <th>Fecha</th>
        </tr>

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $db = new SQLite3(__DIR__ . '/../Datos/contacto.db');

        $result = $db->query("SELECT * FROM mensajes ORDER BY fecha DESC");

        $hayDatos = false;

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $hayDatos = true;
            echo "<tr>
                    <td>{$row['nombre']}</td>
                    <td>{$row['correo']}</td>
                    <td>{$row['telefono']}</td>
                    <td>{$row['asunto']}</td>
                    <td class='mensaje'>{$row['mensaje']}</td>
                    <td>{$row['fecha']}</td>
                  </tr>";
        }

        if (!$hayDatos) {
            echo "<tr><td colspan='6' class='sin-datos'>No hay mensajes aún</td></tr>";
        }

        $db->close();
        ?>

    </table>
</div>

</body>
</html>