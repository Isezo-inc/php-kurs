<style type="text/css" media="all">
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
      padding-left: 4px;

   width: 18%;
   margin: 8px 0;
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
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
font-weight: 300;
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


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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
<script src="ajax.js"></script>


<!--
<script>
function handler(x) {
      // get the list of all images and convert the html collection to an array
      var arr = Array.from(document.getElementsByClassName('div'))

      // cycle the array to show the one selected and hide all the others
      arr.forEach(ele => {
        if(ele.id === x) {
          ele.style.display = 'block'
        } else {
          ele.style.display = 'none'
        }
      })
  }
  
  function handler_2(x) {
      // get the list of all images and convert the html collection to an array
      var arr_2 = Array.from(document.getElementsByClassName('table'))

      // cycle the array to show the one selected and hide all the others
      arr_2.forEach(ele => {
        if(ele.id === x) {
          ele.style.display = 'block'
        } else {
          ele.style.display = 'none'
        }
      })
  }
  
  function setCursorPosition(pos, e) {
    e.focus();
    if (e.setSelectionRange) e.setSelectionRange(pos, pos);
    else if (e.createTextRange) {
      var range = e.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select()
    }
  }

  function mask(e) {
    //console.log('mask',e);
    var matrix = this.placeholder,// .defaultValue
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, "");
    def.length >= val.length && (val = def);ч
    matrix = matrix.replace(/[_\d]/g, function(a) {
      return val.charAt(i++) || "_"
    });
    this.value = matrix;
    i = matrix.lastIndexOf(val.substr(-1));
    i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
    setCursorPosition(i, this)
  }
  window.addEventListener("DOMContentLoaded", function() {
    var input = document.querySelector("#online_phone");
    input.addEventListener("input", mask, false);
    input.focus();
    setCursorPosition(3, input);
  });
</script>-->

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
<div class="ref"><a id="add" href="javascript:void(0);" onclick="viewdiv('div1');">Добавить нарушение</a> | 
<a id="add" href="javascript:void(0);" onclick="viewdiv('div2');">Поиск</a></div>
<div id="div1" class="div" style="display:none;">
  <form action = "save.php" method="post">
<input id="n_post" type="text" maxlength="8" name="n_post" placeholder = "Номер постановления" pattern="[1-9]\d*" title="Любое число от 1 до 99999999"/><br>
<!--<input type="text" maxlength="9" name="plate" placeholder = "Регистрационный номер" pattern="[авекмнорстух]\d{3}[авекмнорстух]{2}\d{2,3}" title="Номер должен быть следующего типа: аХХХааХХХ, где а - любой символ из АВЕКМНОРСТУХ, Х - любая цифра"/><br>
--><?php require ("list2.php");?><br>
<?php require ("list.php");?>
<br>
<input type="submit" value="Добавить"/></form>
</div>

<div id="div2" class="div" style="display:none;">
  <form action = "main.php" method="post">
    <select name = "select" > <option name = "n_post" value ="n_post" >Номер постановления</option>
    <option name = "plate" value ="plate"> Регистрационный номер</option>
    <option name = "point" value ="point"> Нарушения</option>
    </select>
<input type="text" name="poisk" placeholder = "Поиск"/><br>
<br>
<input type="submit" value="Найти"/></form>
</div>

<?php require ("table.php"); ?>
</center>
</body>
</html>


