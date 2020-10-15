<?php
    if (isset($_POST['select'])) { $sel=$_POST['select']; if ($sel == '') { unset($sel);} }
    if (isset($_POST['poisk'])) { $poisk = $_POST['poisk']; if ($poisk == '') { unset($poisk);} } 
    if (empty($sel) or empty($poisk)){
    $sql = "SELECT `id`, `n_post`, `plate`, `point` FROM `foul` WHERE 1";
    } else  $sql = "Select `id`, `n_post`, `plate`, `point` from `foul` WHERE $sel like '%$poisk%'";
    

/*Соединяеся с базой и делаем выборку из таблицы*/
require ("connect_bd.php");
$result_select = mysql_query($sql);
 


echo "<table>";
 echo "<tr><th hidden></th><th>Номер постановления</th><th>Номерной знак</th><th>Нарушение</th><th><td hidden></td></th><th><td hidden></td></th></tr>";
while ($result = mysql_fetch_array($result_select)) {
   echo "<tr><form id = 'form' method='post'> <td hidden> <input type='text' name='id' value='{$result['id']}'></td> <td>{$result['n_post']}</td><td>{$result['plate']}</td><td>{$result['point']}</td>
   <td><input id='tblchange' type='submit' formaction='edit.php' value='Изменить'/></td>
   <td><input id='tblchange' type='submit' formaction='delete.php' value='Удалить'/></td></form></tr>";
  }
  echo "</table>";

//onclick='window.open(\"$link\", \"$n\", \"toolbar=$yes,scrollbars=$yes,resizable=$yes,top=$tl,left=$tl,width=$wh,height=$wh\");' onclick=\"sendAjaxForm('result_form','form');\"
?>

