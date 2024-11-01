<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>PRODord</h1>
            <p>Keep your production orders safe and orderly</p>
        </div>
    </header>

    <section class="login-section">
        <div class="login-container">
            <div class="container-image">
                <img src="imagenes/image.png" alt="farmaceutica" class="image">
                <img src="imagenes/farmaceutica.png" alt="farm" class="image">
            </div>
            <div class="container-login">
                <h2>Login</h2>

                <form method="post" action="">
                    <?php include "conexion/controler.php"?>
                    <div class="cont-inputs">
                        <label for="user">Usuario</label>
                        <input type="text" id="user" name="user" placeholder="Type your username" class="inpt" required>
                    </div>

                    <div class="cont-inputs">
                        <label for="clave">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Tipe your password" class="inpt" required>
                    </div>
                    <div class="cont-inputs">
                        <input type="submit" name="login" id="login" value="Sign In" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="footer-container">
        <?php include 'footer-nav/footer.php'; ?>   
    </div>

    <script src="Js/carusel.js"></script>
</body>
</html>
