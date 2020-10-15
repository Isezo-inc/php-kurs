<?php
    if (isset($_POST['id'])) { $id = $_POST['id']; if ($id == '') { unset($id);} }
    if (isset($_POST['n_post'])) { $n_post = $_POST['n_post']; if ($n_post == '') { unset($n_post);} } //заносим введенный пользователем логин в переменную $n_post, если он пустой, то уничтожаем переменную
    if (isset($_POST['plate'])) { $plate=$_POST['plate']; if ($plate =='') { unset($plate);} }
    if (isset($_POST['point'])) { $point=$_POST['point']; if ($point =='') { unset($point);} }
    
 if (empty($n_post) or empty($point) or empty($plate))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $point = stristr($point,'-');

    require ("connect_bd.php");
    $result = mysql_query ("UPDATE foul SET n_post =$n_post, plate ='$plate', point ='$point'  WHERE id =$id");
    
    if ($result=='TRUE')
    {
    echo "Вы успешно изменили! Теперь вы можете сделать что-то еще.</a>";
    }
 else {
    echo "Ошибка!";
    }
     require "main.php";
    //echo "<script>window.close()</script>";
    mysql_close($db);
    ?>