<?php

 if (isset($_POST['select'])) { $sel=$_POST['select']; if ($sel == '') { unset($sel);} }
    if (isset($_POST['poisk'])) { $poisk = $_POST['poisk']; if ($poisk == '') { unset($poisk);} } 
    if (empty($sel) or empty($poisk)){
    $sql = "SELECT `id`, `avto`, `plate`, `name` FROM `tc` WHERE 1";
    } else  $sql = "Select * from `tc` WHERE $sel like '%$poisk%'";
    

require ("connect_bd.php");
$result_select = mysql_query($sql);
 
echo "<table>";
 echo "<tr><th hidden></th><th>Авто</th><th>Номерной знак</th><th>Имя владельца</th><th><td hidden></td></th><th><td hidden></td></th></tr>";
while ($result = mysql_fetch_array($result_select)) {
   echo "<tr><form id = 'form' method='post'> <td hidden> <input type='text' name='id' value='{$result['id']}'></td> <td>{$result['avto']}</td><td>{$result['plate']}</td><td>{$result['name']}</td>
   <td width='12%'><input type='submit' id='tblchange' formaction='edit2.php' value='Изменить'/></td>
   <td width='12%'><input type='submit' id='tblchange' formaction='delete2.php' value='Удалить'/></td></form></tr>";
  }
  echo "</table>";

?>

