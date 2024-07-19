<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>UFTPOS</title>
</head>
<body>
    <div class="contenedor">
        <h2>Inventario</h2>
        <div class="header">
            <nav class="nav-header">
                <h4>POSUFT</h4>
                <!-- <img src="./img/posuft_logo.ico" alt="logo" class="logo" /> -->
                <input class="buscador" type="text" placeholder="Buscador 🔎">
                <button class="filtrado">Filtrado</button>
            </nav>
        </div>
        <div class="table_container">
            <table>
                <thead>
                    <tr>
                        <th>✅</th>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';

                    $sql = "SELECT codigo, nombre, cantidad, costo, precio FROM productos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td><input type='checkbox' /></td>
                                    <td>{$row['codigo']}</td>
                                    <td>{$row['nombre']}</td>
                                    <td>{$row['cantidad']}</td>
                                    <td>\${$row['costo']}</td>
                                    <td>\${$row['precio']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No hay productos</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <div class="footer">
            <div class="contenedor_botones">
                <button class="botonesred"><p>Eliminar Producto</p></button>
                <button class="botones">Modificar</button>
                <button class="botones">Nuevo Producto</button>
                <button class="botones">Historial</button>
                <button class="botones">Ingresar/Egresar</button>
            </div>

            <div id="contenedor_vender">
                <button id="vender"><h3>Vender</h3></button>
            </div>
        </div>
    </div>
</body>
</html>
