<?php
    if (isset($_POST['avto'])) { $avto = $_POST['avto']; if ($avto == '') { unset($avto);} } //заносим введенный пользователем логин в переменную $avto, если он пустой, то уничтожаем переменную
    if (isset($_POST['plate'])) { $plate=$_POST['plate']; if ($plate =='') { unset($plate);} }
    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    //заносим введенный пользователем пароль в переменную $name, если он пустой, то уничтожаем переменную
 if (empty($avto) or empty($name) or empty($plate)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

 // подключаемся к базе
    require ("connect_bd.php");
    if ($db->connect_error) {
    die("Ошибка: не удается подключиться: " . $db->connect_error);
  } 
    
    $result = mysql_query ("SELECT `plate` FROM `tc` WHERE `plate`='$plate'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['plate'])) {
    exit ("Этот номер уже зарегистрирован");
    }
    
    $result3 = mysql_query ("SELECT `name` FROM `owner` WHERE `name` like '$name'");
    $myrow3 = mysql_fetch_array($result3);
    if (empty($myrow3['name'])) {
    echo "Такого человека не существует. Добавьте.";
    require "persons.php";
    } else{
    
        $result2 = mysql_query ("INSERT INTO tc (avto,plate,name) VALUES('$avto','$plate','$name')");
        // Проверяем, есть ли ошибки
        if ($result2=='TRUE')
        {
        echo "Вы успешно добавили! Теперь вы можете сделать это еще раз.";
        require "transport.php";
        }
     else {
        echo "Ошибка!";
        require "transport.php";
        }
    }
    
    mysql_close($db);
    ?>