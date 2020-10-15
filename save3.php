<?php
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } //заносим введенный пользователем логин в переменную $name, если он пустой, то уничтожаем переменную
    if (isset($_POST['ser_num'])) { $ser_num=$_POST['ser_num']; if ($ser_num =='') { unset($ser_num);} }
    if (isset($_POST['city'])) { $city=$_POST['city']; if ($city =='') { unset($city);} }
    if (isset($_POST['adress'])) { $adress=$_POST['adress']; if ($adress =='') { unset($adress);} }
    if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='') { unset($phone);} }
    //заносим введенный пользователем пароль в переменную $city, если он пустой, то уничтожаем переменную
 if (empty($name) or empty($city) or empty($ser_num)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

 // подключаемся к базе
    require ("connect_bd.php");
    if ($db->connect_error) {
    die("Ошибка: не удается подключиться: " . $db->connect_error);
  } 
  
    
    $result = mysql_query ("SELECT `ser_num` FROM `owner` WHERE `ser_num`='$ser_num'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['name'])) {
    exit ("Этот человек уже зарегистрирован");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO owner (name,ser_num, city, adress, phone) VALUES('$name', $ser_num,'$city', '$adress', $phone)");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно добавили! Теперь вы можете сделать что-то еще.</a>";
    }
 else {
    echo "Ошибка!";
    }
    require "persons.php";
    mysql_close($db);
    ?>