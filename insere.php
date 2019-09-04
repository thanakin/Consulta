<?php
require_once './conf./config.php'; 
$con = mysqli_connect($server, $user, $pass, $db, $port);
$rs = "select * from information_schema.processlist";
$rs2 = mysqli_query($con, $rs);
$rowcount=mysqli_num_rows($rs2);
echo '<table border="1">';
echo '<tr><td>Id</td><td>User</td><td>Host</td><td>Db</td><td>Command</td><td>Time</td><td>State</td><td>Info</td></tr>';
$row0 =  date('Y-m-d H:i:s'); 
$con2 = mysqli_connect($server2, $user2, $pass2, $db2, $port2);
    
while($row = mysqli_fetch_array($rs2)){ 
    echo '<tr><td>'.$row["ID"].'</td><td>'.$row["USER"].'</td><td>'.$row["HOST"].'</td><td>'.$row["DB"].'</td><td>'.$row["COMMAND"].'</td><td>'.$row["TIME"].'</td><td>'.$row["STATE"].'</td><td>'.$row["INFO"].'</td></tr>';
    $row1 = $row["ID"];
    $row2 = $row["USER"];
    $row3 = $row["HOST"];
    $row4 = $row["DB"];
    $row5 = $row["COMMAND"];
    $row6 = $row["TIME"];
    $row7 = $row["STATE"];
    $row8 = $row["INFO"];
    $insert = "insert into teste (id, codigo, user, host, db, command, time, state, info, ddmmaaaa) VALUES (null,'$row1','$row2','$row3','$row4','$row5','$row6','$row7','$row8', '$row0')";
    if(!mysqli_query($con2, $insert)){ echo 'erro: '.mysqli_error($con2);  }
}
echo '<tr><td colspan=8>Computadores conectados: <b>'.($rowcount - 1).'</b> (<i>Já descontado este acesso para consulta</i>)</td></tr>'; 
echo'</table>'; 
echo '<script>window.close();</script>';