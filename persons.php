<style type="text/css" media="all">
/*@import url("style_main.css");*/
ul {
  list-style: none; /*убираем маркеры списка*/
  margin: 0; /*убираем отступы*/
  padding-left: 0; /*убираем отступы*/
  margin-top:5px; /*делаем отступ сверху*/
  background:#4CAF50; /*добавляем фон всему меню (заменив этот параметр, вы поменяете цвет всего меню)*/
  height: 60px; /*задаем высоту*/
  border: 1px solid #d7dbd7;
  border-radius: 20px;
  
}

select{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
font-weight: 200;
   border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 18%;
   margin: 8px 0;
   color: #4CAF50;
}

a {
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
font-weight: 300;
  text-decoration: none; /*убираем подчеркивание текста ссылок*/
  background:#4CAF50; /*добавляем фон к пункту меню (заменив этот параметр, вы поменяете цвет всех пунктов меню)*/
  color:white; /*меняем цвет ссылок*/
  padding:0px 15px; /*добавляем отступ*/
  font-family: arial; /*меняем шрифт*/
  line-height:60px; /*ровняем меню по вертикали*/
  display: block; 
  /*border-right: 1px solid #d7dbd7;*/
  border-radius: 20px;
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
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
font-weight: 200;
    border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 18%;
   margin: 8px 0;
   padding-left: 4px;
   color: #4CAF50;
}


input[type=tel]{
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
font-weight: 200;
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
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
font-weight: 200;
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
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
font-weight: 200;
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
	width: 100%;
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
	background: #ffe0a6;
}

.form_radio_group label:hover {
	color: #0000ff;
}

.form_radio_group input[type=radio]:disabled + label {
	background: #efefef;
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
table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: center;
border-collapse: collapse;
border-spacing: 5px;
background: #E1E3E0;
border-radius: 20px;
width:100%;
}
th {
font-size: 16px;
font-weight: 300;
padding: 12px 10px;
border-bottom: 2px solid #4CAF50;
color: #4CAF50;
}
tbody tr {
border-bottom: 2px solid #4CAF50;
}
tbody tr:last-child {
border-bottom: none;
}
td {
  font-size: 14px;
font-weight: 200;
padding: 10px;
color: #8D8173;
}
#tblchange{
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
   font-size: 14px;
   font-weight: 200;
   background-color: #4CAF50;
    border: none;
    border-radius: 10px; 
    color: white;
    padding: 6px 10px;
    margin: 1px 0px;
    cursor: pointer;
    height: 2%;
    width: 100%;
}
.ref{
   text-align: left;
   padding-left:15px;
   padding-top:10px;
   padding-bottom:10px;
}
#add {
  all: initial;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  font-weight: 200;
  color: #4CAF50;
  border-bottom: 1px dashed;
}
#add:hover {
  cursor: pointer;
  border-bottom: 1px solid #4CAF50;
  
}
</style>
<script>
 function viewdiv(id){
var el=document.getElementById(id);
if(el.style.display=="block"){
el.style.display="none";
} else {
el.style.display="block";
}
}
</script>

<html>
  
<head>
<title>ACK</title>
</head>
<body>
<center>
<ul>
  <li><a href="\main.php">Нарушение</a></li>
  <li><a href="\transport.php">Транспорт</a></li>
  <li><a href="\persons.php">Водитель</a></li>
  <!--<li><a href="\tableView.php">Вывод таблиц</a></li>-->
  <li id="user">
    <div>
    <?php/*
    require ("connect_bd.php");
    $sql = "SELECT `name` FROM `registr` WHERE login = 'login'";
    $result_select = mysql_query($sql);
    $result = mysql_fetch_array($result_select);
    echo "{$result['name']}";*/
    ?>
    <a id="out" href="\index.php">Выход</a>
    </div>
  </li>
</ul>
<div class="ref"><a id="add" href="javascript:void(0);" onclick="viewdiv('div3');">Добавить человека</a> |
<a id="add" href="javascript:void(0);" onclick="viewdiv('div2');">Поиск</a></div>
<div id="div3" class="div" style="display:none;">
<form action = "save3.php" method="post">
<input type="text" name="name" placeholder = "Имя владельца" pattern="^[А-Яа-яЁё\s]+$" title="Имя должно содержать только кириллицу"/><br>
<input type="text" name="ser_num" maxlength="10" placeholder = "серия номер паспорта " pattern="[0-9]{10}" title="Должно содержать 10 цифр: серия 4 цифры и номер - 10"/><br>
<input type="text" name="city" placeholder = "Город " pattern="^[А-Яа-яЁё\s]+$" title="Имя должно содержать только кириллицу"/>
<input type="text" name="adress" placeholder = "Адрес " pattern="^(.+)\s+(\S+?)(-(\d+))?$" title="Данные должны быть следующего формата: 1.Улица; 2.Дом(с литерой или дробью если есть); 3. Квартиру(если есть). Название улиц могут начинаться на: Ул., Ул , Пер., Пер-к, Пр-т, Пр-кт, Пр.,б-р."/><br>
<input name="phone" type="tel" maxlength="12" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"  placeholder="+7(___)___-__-__"><br>
<input type="submit" value="Добавить"/>
</form>
</div>

<div id="div2" class="div" style="display:none;">
  <form action = "persons.php" method="post">
    <select name = "select" > 
    <option name = "name" value ="name" >Имя владельца</option>
    <option name = "ser_num" value ="ser_num"> серия номер паспорта</option>
    <option name = "city" value ="city"> Город</option>
    <option name = "adress" value ="adress"> Адрес</option>
    <option name = "phone" value ="phone"> Телефон</option>
    </select>
<input type="text" name="poisk" placeholder = "Поиск"/><br>
<br>
<input type="submit" value="Найти"/></form>
</div>


<?php require ("table3.php"); ?>
</center>
</body>
</html>