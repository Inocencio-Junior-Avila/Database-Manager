<?php
include('Componentes/plantilla.php');
include('Libreria/motor.php');
plantilla::aplicar();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        include('conexion.php');
    
    if(isset($_POST['nombre_db'])){
        $nombre_db = $_POST['nombre_db'];
        $sql = "CREATE DATABASE $nombre_db";
        $con = conexion::get_con();
        mysqli_query($con, $sql);
    }
?>
<div class="row">
    <div class="col m6">
    <h3>Selecciona una BD</h3>
    <?php
    $sql= "show databases;";
    $con = conexion::get_con();
    $rs = mysqli_query($con, $sql);

    if($rs){

        while($row = mysqli_fetch_object($rs)){
            echo"<a href='db_index.php?db={$row->Database}'>
            <h6>{$row->Database}</h6>
            </a>";
        }
    }
    ?>
    </div>
    <div class="col m6">
        <form method="post" action=''>
        <br>
        <?php echo asg_input('nombre_db','<b>Nombre de la BD</b>', false); ?>
        <button class="btn btn-primary btn green darken-4 no-print no-print" type="submit" name="action">crear</button>
        </form>
    </div>
</div>