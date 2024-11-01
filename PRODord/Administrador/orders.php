<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ordersAdmin.css">
    <title>Production Orders</title>
</head>
<body>
    <?php 

    include '../footer-nav/header.php';
    include '../footer-nav/navAdmin.php';
    include '../conexion/connection.php';
    ?>

<section class="main-section">

<div class="contenido">
<!-- <div class="registrar-btn">
            <a href="generateOrder.php">Register</a>
    </div> -->

<div class="container-search">
<div class="buscar-input">
    <input type="text"  id="search" placeholder="Buscar...">
</div>
<div class="buscar-btn">
    <button id="btnBuscar">Search</button>
</div>
</div>
    
        <h1>PRODUCTION ORDERS</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Commercial Name</th>
                        <th>Generic name</th>
                        <th>Generation Date</th>
                        <th>Type of Product</th>
                        <th>Quantity Unit</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Medicina para el dolor</td>
                        <td>Ibuprofeno</td>
                        <td>10-04-2025</td>
                        <td>Farmaceutico</td>
                        <td>1000pz</td>
                        <td>En proceso</td>
                    </tr>
                </tbody>
            </table>
    </div>
</section>
    

    
    <div class="footer-container">
    <?php include '../footer-nav/footer.php'; ?>   
    </div>

</body>
</html>