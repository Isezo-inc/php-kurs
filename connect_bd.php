<?php
// подключаемся к базе
    $db = mysql_connect ('localhost','root','cloud9');
    mysql_select_db ('jo');
    mysql_query('set character_set_client="utf8"');
    mysql_query('set character_set_results="utf8"');
    mysql_query('set collation_connection="utf8_unicode_ci"');
  ?>