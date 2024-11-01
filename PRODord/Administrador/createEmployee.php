<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createEmployee.css">
    <title>Create Production Order</title>
</head>
<body>
    <?php include '../footer-nav/header.php'?>
    <?php include '../footer-nav/navAdmin.php'?>
        
    <section class="main-section">
        <div class="contenido">
            <h1>Register Employee</h1>

            <section>
                <div class="form-container">
                    <form action="" method="POST">
                        <?php include "../conexion/submitEmployee.php"?>
                        <div class="info-container">
                            <div class="personal-cont">
                                <h2>Personal Information</h2>
                                <div class="cont-inputs">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="cont-inputs">
                                    <label for="lastname1">Lastname 1</label>
                                    <input type="text" name="lastname1" placeholder="Lastname 1" required>
                                </div>
                                <div class="cont-inputs">
                                    <label for="lastname2">Lastname 2</label>
                                    <input type="text" name="lastname2" placeholder="Lastname 2" required>
                                </div>
                                <div class="cont-inputs">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="example@email.com" required>
                                </div>
                                <div class="cont-inputs">
                                    <label for="position">Choose a position:</label>
                                    <select name="position" required>
                                        <?php include "../conexion/get_pos.php"?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="user-cont">
                                <h2>User Information</h2>
                                <div class="cont-inputs">
                                    <label for="user">Usuario</label>
                                    <input type="text" name="user" placeholder="Username" required>
                                </div>
                                <div class="cont-inputs">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="cont-inputs">
                                    <label for="confirm">Confirm Password</label>
                                    <input type="password" name="confirm" placeholder="Confirm password" required>
                                    <span id="confirmMessage"></span>
                                </div>
                                <div class="cont-inputs">
                                    <label for="access-type">Choose an access type:</label>
                                    <select name="access-type" required>
                                        <?php include "../conexion/get_access.php"?>
                                    </select>
                                </div>
                            </div>


                        
                        </div>
                        <div class="cont-btn">
                        <input type="submit" name="login" id="login" value="Create User" class="btn">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    
    <div class="footer-container">
        <?php include '../footer-nav/footer.php'; ?>   
    </div>

</body>
</html>
