<?php
/* 2021-0836 Inocencio Junior Avila Gonzalez */
class plantilla{

    public static $instancia = null;
    public static function aplicar(){
        self::$instancia = new plantilla();
    }

    public function __construct(){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 5</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
    <style>
        @media print{
            .no-print{
                display: none;
            }
            body{
                background:white;
            }
        }
    </style>

</head>
<body>
        <nav class="orange darken-4">
        <div class= "container">
            <div class="nav-wrapper">
                <a href="./" class="brand-logo center"><img src="img/logoT3.png" alt="logo :)" width="150px" height="75px"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <!--<ul class="right hide-on-med-and-down">
                <li><a href="./">Inicio</a></li>
                <li><a href="registrar.php">Registrar</a></li>-->
            </ul>
            </div>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <!--<li><a href="./">Inicio</a></li>
            <li><a href="registrar.php">Registrar</a></li>-->
        </ul>
    <div class="container">
        <h3>Gestor de db</h3>
        <hr/>
        
        
        <div style="min-height:400px;">

<?php
    } 

        function __destruct(){
            ?>
            </div>
            </div>
            <div class="text-center" style="background:white; padding:20px">
            <center><b> © Derechos Resevados IJAG.inc <?= date("Y"); ?></b></center>
            </div>
        
    </body>
    </html>
    <?php
}

}