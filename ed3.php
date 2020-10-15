<?php
    if (isset($_POST['id'])) { $id = $_POST['id']; if ($id == '') { unset($id);} }
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } //заносим введенный пользователем логин в переменную $n_post, если он пустой, то уничтожаем переменную
    if (isset($_POST['ser_num'])) { $ser_num=$_POST['ser_num']; if ($ser_num =='') { unset($ser_num);} }
    if (isset($_POST['city'])) { $city=$_POST['city']; if ($city =='') { unset($city);} }
    if (isset($_POST['adress'])) { $adress=$_POST['adress']; if ($adress =='') { unset($adress);} }
    if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='') { unset($phone);} }
    
    
 if (empty($name) or empty($ser_num) or empty($city) or empty($adress) or empty($phone))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    require ("connect_bd.php");
    $result = mysql_query ("UPDATE owner SET name = '$name', ser_num =$ser_num, city ='$city', adress ='$adress', phone ='$phone'  WHERE id =$id");
    
    if ($result=='TRUE')
    {
    echo "Вы успешно изменили! Теперь вы можете сделать что-то еще.</a>";
    }
 else {
    echo "Ошибка!";
    }
     require "persons.php";
    //echo "<script>window.close()</script>";
    mysql_close($db);
    ?>