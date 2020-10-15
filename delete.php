<?php
    if (isset($_POST['id'])) { $id = $_POST['id']; if ($id == '') { unset($id);} } //заносим введенный пользователем логин в переменную $id, если он пустой, то уничтожаем переменную
    //заносим введенный пользователем пароль в переменную $point, если он пустой, то уничтожаем переменную

 // подключаемся к базе
    require ("connect_bd.php");
    if ($db->connect_error) {
    die("Ошибка: не удается подключиться: " . $db->connect_error);
  } 
  
    $result = mysql_query (" DELETE FROM `foul` WHERE `id`=$id");

    if ($result=='TRUE')
    {
    echo "Вы успешно Удалили! Теперь вы можете сделать что-то еще.</a>";
    }
 else {
    echo "Ошибка!";
    }
    require "main.php";
    mysql_close($db);
    ?>