<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    
 // подключаемся к базе
    require ("connect_bd.php");
    
    if ($db->connect_error) {
    die("Ошибка: не удается подключиться: " . $db->connect_error);
  } 
 // проверка на существование пользователя с таким же логином
    $log_res = mysql_query("SELECT access FROM registr WHERE login='$login'",$db);
    $pas_res = mysql_query("SELECT access FROM registr WHERE password='$password'",$db);
    
    $myrow = mysql_fetch_array($log_res);
    $myrow_2 = mysql_fetch_array($pas_res);
    if ($myrow['access']=='0') {
        if($myrow_2['access']=='0') {
        header ('Location: main.php');
        exit();
        }else{
          echo "Неверный пароль";
        } 
    }else if($myrow['access']=='1'){
        if($myrow_2['access']=='1') {
        header ('Location: main.php');
        exit();
        }else{
          echo "Неверный пароль";
        } 
        }else echo "Пользователя не существует";
    mysql_close($db);
    ?>