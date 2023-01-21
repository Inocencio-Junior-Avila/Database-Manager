<?php
include('Componentes/plantilla.php');
include('Libreria/motor.php');
plantilla::aplicar();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        include('conexion.php');
    
    if(isset($_GET['db_delete'])){
        $nombre_db = $_GET['db_delete'];
        $sql = "DROP DATABASE $nombre_db";
        $con = conexion::get_con();
        mysqli_query($con, $sql);
        header('Location: index.php');
    }
    
    if(!isset($_GET['db'])){
        echo'
        <script>
        alert("Debe Selecionar una base de datos");
        window.location = "index.php";
        </script>
        ';
    }
$db = $_GET['db'];
$con = conexion::get_con();
mysqli_select_db($con, $db);

?>
<div class="row">
    <div class="col m6">
    <h4>Selecciona la tabla que guste =)</h4>
    <?php
    $sql= "show tables;";
    $rs = mysqli_query($con, $sql);

    if($rs){

        while($row = mysqli_fetch_row($rs)){
            echo"<a href='table_index.php?db={$db}&tabla={$row[0]}'>
            <h6>{$row[0]}</h6>
            </a>";
        }
    }
    ?>
    </div>
    <div class="col m6">
        <form method="post" action=''>
        <br>
        <?php echo asg_input('nombre_tbl','<b>Nombre de la tabla</b>', false); ?>
        <button class="btn btn-primary btn green darken-4 no-print no-print" type="submit" name="action">crear</button>
        </form>

        <ul>
            <li><a onclick="return confirm('seguro que quires borrarla? <?php $db; ?>');" class='btn red darken-3' href="db_index.php?db_delete=<?php echo $db; ?>">Eliminar db</a></li>
        </ul>
    </div>
</div>