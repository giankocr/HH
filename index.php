<?php
/**
 * Created by gianko.com.
 * User: ILG
 * Date: 03/08/2018
 */
$conn = require_once 'conn/connection.php';
$sql = "SELECT * FROM VALIDACION_SERIES_MASTERBOX";
$result = sqlsrv_query($conn, $sql);
while ($row = sqlsrv_fetch_array($result)) {
     echo $row['FECHA'].' '.$row['IDSUCURSAL'].' '. $row['IDSERIE']. '<br>';

}
