<?php

if (isset($_POST['select'])) { $sel=$_POST['select']; if ($sel == '') { unset($sel);} }
    if (isset($_POST['poisk'])) { $poisk = $_POST['poisk']; if ($poisk == '') { unset($poisk);} } 
    if (empty($sel) or empty($poisk)){
    $sql = "SELECT `id`, `name`, `ser_num`, `city`, `adress`, `phone` FROM `owner` WHERE 1";
    } else  $sql = "Select * FROM `owner` WHERE $sel like '%$poisk%'";
    
require ("connect_bd.php");
$result_select = mysql_query($sql);

echo "<table>";
 echo "<tr><th hidden></th><th>ФИО</th><th>Паспортные данные</th><th>Город</th><th>Адрес</th><th>Номер телефона</th><th><td hidden></td></th><th><td hidden></td></th></tr>";
while ($result = mysql_fetch_array($result_select)) {
   echo "<tr><form id = 'form' method='post'> <td hidden> <input type='text' name='id' value='{$result['id']}'></td><td>{$result['name']}</td> 
   <td>{$result['ser_num']}</td>
   <td>{$result['city']}</td>
   <td>{$result['adress']}</td>
   <td>{$result['phone']}</td>
   <td width='12%'><input type='submit' id='tblchange' formaction='edit3.php' value='Изменить'/></td>
   <td width='12%'><input type='submit' id='tblchange' formaction='delete3.php' value='Удалить'/></td></form></tr>";
  }
  echo "</table>";

?>

