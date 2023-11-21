<?php
    $host_db="sql313.infinityfree.com:3306";
    $user_db="if0_35412460";
    $pass_db="X7cP5aPVPYAqn";
    $db_name="if0_35412460_torteria ";

    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

    if($conexion->connect_error){
        echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
    }
?>