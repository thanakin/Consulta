<?php
require_once './conf./config.php'; 
$con2 = mysqli_connect($server2, $user2, $pass2, $db2, $port2);
$rs = "SELECT (COUNT(*)-1) AS total, DATE_FORMAT(ddmmaaaa,'%d/%m/%Y %H:%i') AS ddmmaaaa FROM teste GROUP BY ddmmaaaa";
$rs2 = mysqli_query($con2, $rs);
echo '<table border="1">';
$row0 =  date('Y-m-d H:i:s'); 
echo '<tr>
<td>Data</td>
<td>total</td>
</tr>';
while($row = mysqli_fetch_array($rs2)){ 
    echo '<tr>
    <td>'.$row["ddmmaaaa"].'</td>
    <td>'.$row["total"].'</td>
    </tr>';
    }
echo'</table>';