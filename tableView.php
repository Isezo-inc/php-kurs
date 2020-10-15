<style type="text/css" media="all">
/*@import url("style_main.css");*/
ul {
  list-style: none; /*убираем маркеры списка*/
  margin: 0; /*убираем отступы*/
  padding-left: 0; /*убираем отступы*/
  margin-top:5px; /*делаем отступ сверху*/
  background:#4CAF50; /*добавляем фон всему меню (заменив этот параметр, вы поменяете цвет всего меню)*/
  height: 50px; /*задаем высоту*/
}
a {
  text-decoration: none; /*убираем подчеркивание текста ссылок*/
  background:#4CAF50; /*добавляем фон к пункту меню (заменив этот параметр, вы поменяете цвет всех пунктов меню)*/
  color:white; /*меняем цвет ссылок*/
  padding:0px 15px; /*добавляем отступ*/
  font-family: arial; /*меняем шрифт*/
  line-height:50px; /*ровняем меню по вертикали*/
  display: block; 
  border-right: 1px solid #d7dbd7; /*добавляем бордюр справа*/
  -moz-transition: all 0.3s 0.01s ease; /*делаем плавный переход*/
  -o-transition: all 0.3s 0.01s ease;
  -webkit-transition: all 0.3s 0.01s ease;
}
a:hover {
  background:#37803a;/*добавляем эффект при наведении*/
}
li {
  float:left; /*Размещаем список горизонтально для реализации меню*/
}

input[type=text]{
    border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 18%;
   margin: 8px 0;
   color: #4CAF50;
}


input[type=tel]{
    border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 18%;
   margin: 8px 0;
   color: #4CAF50;
}

input[type=submit]{
    background-color: #4CAF50;
    border: none;
    border-radius: 10px; 
    color: white;
    padding: 16px 32px;
    margin: 4px 2px;
    cursor: pointer;
    height: 9%;
    width: 13%;
}

input[type=button]{
    background-color: #4CAF50;
    border: none;
    border-radius: 10px; 
    color: white;
    padding: 16px 32px;
    margin: 4px 2px;
    cursor: pointer;
    height: 7%;
    width: 11%;
}

input[type="text"]::placeholder {
    color: #4CAF50;
}
   

p.start{
    font-size: 72px; 
    color: #4CAF50;
}

.form_radio_group {
	display: inline-block;
	overflow: hidden;
}
.form_radio_group-item {
	display: inline-block;
	float: left;
}
.form_radio_group input[type=radio] {
	display: none;
}
.form_radio_group label {
	display: inline-block;
	cursor: pointer;
	padding: 0px 15px;
	line-height: 34px;
	border: 1px solid #4CAF50;;
	border-right: none;
	user-select: none;
	color: #4CAF50;
}

.form_radio_group .form_radio_group-item:first-child label {
	border-radius: 6px 0 0 6px;
}
.form_radio_group .form_radio_group-item:last-child label {
	border-radius: 0 6px 6px 0;
	border-right: 1px solid #4CAF50;;
}

.form_radio_group input[type=radio]:checked + label {
  background:#4CAF50;
	color: #fff;
}

.form_radio_group label:hover {
    background:#37803a;/*добавляем эффект при наведении*/
	color: #fff;
}

.form_radio_group input[type=radio]:disabled + label {
	background: #4CAF50;
	color: #666;
}
:active, :hover, :focus {
    outline: 0;
    outline-offset: 0;
}
#user{
  float:right;
  color:white; /*меняем цвет ссылок*/
  font-family: arial; /*меняем шрифт*/
  line-height:50px; /*ровняем меню по вертикали*/
  display: block; 
}
#out{
  font-family: arial; /*меняем шрифт*/
  float:right;
  color:white; /*меняем цвет ссылок*/
}
#out:hover {
  background: #4CAF50;/*добавляем эффект при наведении*/
    text-decoration: underline; /*убираем подчеркивание текста ссылок*/
    -moz-transition: all 0.3s 0.01s ease; /*делаем плавный переход*/
  -o-transition: all 0.3s 0.01s ease;
  -webkit-transition: all 0.3s 0.01s ease;
}

</style>

<html>
	<?php// подключаемся к базе
    $db = mysql_connect ('localhost','root','cloud9');
    mysql_select_db ('jo');
  ?>
  
<head>
<title>ACK</title>
</head>
<body>
<center>
<ul>
  <li><a href="\main.php">Нарушение</a></li>
  <li><a href="\transport.php">Транспорт</a></li>
  <li><a href="\persons.php">Человечек</a></li>
  <li><a href="\tableView.php">Вывод таблиц</a></li>
  <li id="user">
    <div>
    <?php
    require ("connect_bd.php");
    $sql = "SELECT `name` FROM `registr` WHERE login = 'login'";
    $result_select = mysql_query($sql);
    $result = mysql_fetch_array($result_select);
    echo "{$result['name']}";
    ?>,
    <a id="out" href="\index.php">выход</a>
    </div>
  </li>
</ul>

<div id="div4" class="div"><br>
	<div class="form_radio_group">
	<div class="form_radio_group-item">
		<input id="radio-5" type="radio" name="radio_2" onclick="handler_2('div5')" checked/>
		<label for="radio-5">Таблица штрафов</label>
	</div>
	<div class="form_radio_group-item">
		<input id="radio-6" type="radio" name="radio_2" onclick="handler_2('div6')"/>
		<label for="radio-6">Таблица людей</label>
	</div>
	<div class="form_radio_group-item">
		<input id="radio-7" type="radio" name="radio_2" onclick="handler_2('div7')"/>
		<label for="radio-7">Таблица машин</label>
	</div>
	</div><br>
	<div>require "create_table.php"</div>
</div>
</center>
</body>
</html>