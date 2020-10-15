<?php
    if (isset($_POST['id'])) { $id = $_POST['id']; if ($id == '') { unset($id);} }
    if (isset($_POST['avto'])) { $avto = $_POST['avto']; if ($avto == '') { unset($avto);} } //заносим введенный пользователем логин в переменную $avto, если он пустой, то уничтожаем переменную
    if (isset($_POST['plate'])) { $plate=$_POST['plate']; if ($plate =='') { unset($plate);} }
    if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
    
 if (empty($avto) or empty($name) or empty($plate))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    require ("connect_bd.php");
    $result = mysql_query ("UPDATE tc SET avto = '$avto', plate = '$plate', name = '$name'  WHERE id =$id");
    
    if ($result=='TRUE')
    {
    echo "Вы успешно изменили! Теперь вы можете сделать что-то еще.</a>";
    }
 else {
    echo "Ошибка!";
    }
     require "transport.php";
    //echo "<script>window.close()</script>";
    mysql_close($db);
    ?>