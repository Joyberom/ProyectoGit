<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Domotica</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel ">
                    <div class="panel-heading  ">
                        <h2 class=" text-center text-success ">Domótica</h2>
                    </div>
                    <div class="panel-body">

                  

                        <form form id="login_form" class="modal-form" role="form" name="login_form" action="Php/Validar.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input id="username" class="form-control" name="login_username" autocomplete="off" maxlength="20" autofocus="" value="" type="text" required="" placeholder="Usuario" onkeypress="return check(event)"></div>
                                <div class="form-group">
                                    <input id="password" class="form-control" name="login_password" autocomplete="off" type="password" value="" required placeholder="Contraseña" onkeypress="return check(event)">
                                </div>
                                <input class="btn btn-lg btn-success btn-block" id="login_button" name="login_button" value="Iniciar sesión." type="submit">
                                
                    <?php
                    session_start();
                    if(isset($_SESSION['Inactivo'])) {
                    echo $_SESSION['Inactivo'];
                    unset($_SESSION['Inactivo']);}
                    ?>

                            </fieldset>
                        </form>
                        <div class="form-group">
                                <h2 class=" text-center text-danger "id="resp" name="resp" ></h2>
                        </div>
                    </div>
                    <div class="copyrights text-center">
                        <p>Design by <a class="text-primary">Joyber  Berom Ing.</a></p>
                        <!-- href=""   -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
 

    <!-- jQuery -->
    <script src="./js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./js/startmin.js"></script>
     
     <!-- Alertyfy -->
    <script src="./js/alertify/alertify.js"></script>

</body>

</html>