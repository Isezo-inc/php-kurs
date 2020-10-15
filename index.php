<style type="text/css" media="all">
input[type=text]{
    border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 30%;
   margin: 8px 0;
   color: #4CAF50;
}

input[type=password]{
    border: 1px solid #4CAF50; 
   border-radius: 8px; 
   background: #ffffff;
   font-size: 14px; 
   height: 7%;
   width: 30%;
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
input[type="text"]::placeholder {
    color: #4CAF50;
}
   
a:link,a:visited,a:active,a:hover {
    text-decoration: none;
    color: #4CAF50;
}
p.start{
    font-size: 72px; 
    color: #4CAF50;
}


:active, :hover, :focus {
    outline: 0;
    outline-offset: 0;
}
</style>
<html>
<head>
<title>ACK</title>
</head>
<body><br>
<center><p class="start"> АКС</p>
    <form action = "in.php" method="post">
<input placeholder = "Логин" type = "text" name = "login"/><br>
<input placeholder = "Пароль" type = "password" name="password"/><br><br>
<input type="submit" value="Войти"/><br><br>
<a href="\registr.php">Или зарегистрироваться</a>
    </form>
    </center>
</body>
</html>