<style type="text/css">
select{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
font-weight: 200;
   border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 18%;
   margin: 8px 0;
   color: #4CAF50;
}


</style>

<?php
 
/*Соединяеся с базой и делаем выборку из таблицы*/
require ("connect_bd.php");
$sql = "SELECT `point`, `comment` FROM `enchiridion` WHERE 1";
$result_select = mysql_query($sql);
 
 
/*Выпадающий список*/

echo "<select name = 'point'>";
 
while($object = mysql_fetch_object($result_select)){
    
    $val = $object->point." - ".$object->comment;
 
echo "<option value = '$val'> $val </option>";
 
}
 
echo "</select>";
 
?>