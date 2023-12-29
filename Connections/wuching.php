<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_wuching = "localhost";
$database_wuching = "book1";
$username_wuching = "wuchou";
$password_wuching = "wuchinglab";
$wuching = mysql_pconnect($hostname_wuching, $username_wuching, $password_wuching) or trigger_error(mysql_error(),E_USER_ERROR); 
?>