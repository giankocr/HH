<?php
/**
 * Created by gianko.com.
 * User: ILG
 * Date: 03/08/2018
 */
$serverName = "172.16.1.17"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array("Database" => "EFLOW_ILG_3PL_PAYLESS", "UID" => "usreprac", "PWD" => "usreprac");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn) {
    //echo "Conexión establecida.<br />";
    return $conn;
} else {
    echo "Conexión no se pudo establecer.<br />";
    die(print_r(sqlsrv_errors(), true));
}
?>