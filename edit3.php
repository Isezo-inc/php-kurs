<style type="text/css" media="all">
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
	border: 1px solid #4CAF50;
	border-right: none;
	user-select: none;
	color: #4CAF50;
}

.form_radio_group .form_radio_group-item:first-child label {
	border-radius: 6px 0 0 6px;
}
.form_radio_group .form_radio_group-item:last-child label {
	border-radius: 0 6px 6px 0;
	border-right: 1px solid #4CAF50;
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
</style>
<html>
<head>
<title>ACK</title>
</head>
<body>
<center>
    <p class="start"> Именение</p><br><br>
<div id="div1" class="di"><br><br>
<?php 
if (isset($_POST['id'])) { $id = $_POST['id']; if ($id == '') { unset($id);} }
require ("connect_bd.php");
$sql = "SELECT `id`, `name`, `ser_num`, `city`, `adress`, `phone` FROM `owner` WHERE `id`=$id";
$result = mysql_query($sql);
$myrow = mysql_fetch_array($result);
    ?> 
    
<form action = "ed3.php" method="post">
<?php echo "<input type='text' hidden name='id' value='{$myrow['id']}'> " ?>
<input type="text" name="name" <?php echo "value='{$myrow['name']}'"?> placeholder = "Имя владельца"/><br>
<input type="text" name="ser_num" <?php echo "value='{$myrow['ser_num']}'"?> placeholder = "серия номер паспорта "/><br>
<input type="text" name="city" <?php echo "value='{$myrow['city']}'"?> placeholder = "Город "/>
<input type="text" name="adress" <?php echo "value='{$myrow['adress']}'"?> placeholder = "Адрес "/><br>
<input name="phone" type="tel" <?php echo "value='{$myrow['phone']}'"?> maxlength="12" required="required" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"  placeholder="+7(___)___-__-__"><br>
<input type="submit" value="Изменить"/>
</form>
    </div>
    </center>
    </body>
</html>