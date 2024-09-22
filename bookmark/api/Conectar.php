<?php
    $host = "34.70.215.38";
    $usuario = "bookmark";
    $senha = "AV1";
    $banco = "bookmark";

    $dbcon = new MySQLi("$host", "$usuario", "$senha", "$banco");

    if($dbcon->connect_error){
        echo "conexao_erro";
    }/* else{
        echo "conexao_ok";
    }*/

?>