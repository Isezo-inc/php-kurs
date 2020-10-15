<?php
    if (isset($_POST['id'])) { $id = $_POST['id']; if ($id == '') { unset($id);} } //заносим введенный пользователем логин в переменную $id, если он пустой, то уничтожаем переменную
    //заносим введенный пользователем пароль в переменную $point, если он пустой, то уничтожаем переменную

 // подключаемся к базе
    require ("connect_bd.php");
    if ($db->connect_error) {
    die("Ошибка: не удается подключиться: " . $db->connect_error);
  } 
  $sql = mysql_query ("Select * from `owner` WHERE id = $id");
  $name = mysql_fetch_array($sql);
  $name1= $name['name'];
    $result = mysql_query (" DELETE FROM `owner` WHERE `id`=$id");
    $sql = mysql_query ("Select * from `tc` WHERE `name` like '%$name1%'");
    $name = mysql_fetch_array($sql);
    mysql_query (" DELETE FROM `tc` WHERE `name`like '%$name1%'");
    $name1= $name['plate'];
    mysql_query (" DELETE FROM `foul` WHERE `plate`like '%$name1%'");
    
    
    if ($result=='TRUE')
    {
    echo "Вы успешно Удалили! Теперь вы можете сделать что-то еще.</a>";
    }
 else {
    echo "Ошибка!";
    }
    require "persons.php";
    mysql_close($db);
    ?>