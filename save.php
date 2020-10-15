<?php
    if (isset($_POST['n_post'])) { $n_post = $_POST['n_post']; if ($n_post == '') { unset($n_post);} } //заносим введенный пользователем логин в переменную $n_post, если он пустой, то уничтожаем переменную
    if (isset($_POST['plate'])) { $plate=$_POST['plate']; if ($plate =='') { unset($plate);} }
    if (isset($_POST['point'])) { $point=$_POST['point']; if ($point =='') { unset($point);} }
    //заносим введенный пользователем пароль в переменную $point, если он пустой, то уничтожаем переменную
 if (empty($n_post) or empty($point) or empty($plate)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $point = stristr($point,'-');

 // подключаемся к базе
    require ("connect_bd.php");
    if ($db->connect_error) {
    die("Ошибка: не удается подключиться: " . $db->connect_error);
  } 
  
    
    $result = mysql_query ("SELECT `n_post` FROM `foul` WHERE `n_post`='$n_post'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['n_post'])) {
    exit ("Это постановление уже зарегистрированно");
    }
    
    $result3 = mysql_query ("SELECT `plate` FROM `tc` WHERE `plate` like '$plate'");
    $myrow3 = mysql_fetch_array($result3);
    if (empty($myrow3['plate'])) {
    echo "Такой номер не существует. Добавьте.";
    require "transport.php";
    } else{
    
 // если такого нет, то сохраняем данные
        $result2 = mysql_query ("INSERT INTO foul (n_post,plate,point) VALUES('$n_post','$plate','$point')");
        // Проверяем, есть ли ошибки
        if ($result2=='TRUE')
        {
        echo "Вы успешно добавили! Теперь вы можете сделать это еще раз.";
        require "main.php";
        } else {
        echo "Ошибка!";
        require "main.php";
        }
    }
    mysql_close($db);
    ?>