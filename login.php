<?php
    session_start();
    $sessionId = $_SESSION['id'] ?? '';
    $sessionRole = $_SESSION['role'] ?? '';
    if ( $sessionId && $sessionRole ) {
        header( "location:index.php" );
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>DBMS-SITRC</title>
</head>

<body>

    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

            <div class="main__form">
   
                <div class="main__form--title text-center"><marquee>Sandip Foundation's<br><pre>    SITRC-Nashik</pre></marquee></div>
                <form action="login_core.php" method="GET">
                    <div class="form-row">
                        <div class="col col-12">
                            <label class="input">
                                
                                <input type="text" name="email" placeholder="Email" required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                               
                                <input id="pwdinput" type="password" name="password" placeholder="Password" required>
                                <i id="pwd" class="fas fa-toggle-on right"></i>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                               
                                <select name="role" id="Role">
                                    <option value="admins">SITRC (Admin)</option>
                                    <option value="managers">Manager</option>
                                    <option value="pharmacists">Store</option>
                                    <option value="salesmans">Salesman</option>
                                </select>
                            </label>
                        </div>
                            <input type="hidden" name="action" value="login">
                            <?php if ( isset( $_REQUEST['error'] ) ) {
                                    echo "<h5 class='text-center' style='color:black;'>Wrong Credentials.  Enter correct details. </h5>";
                            }?>
                        <div class="col col-12">
                        <input type="submit" value="Sign IN">
                        <i id="right" class="fas fa-signin"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--------------------------------- #Main section -------------------------------->



    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>
</body>

</html>
