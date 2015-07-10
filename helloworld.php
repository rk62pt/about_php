<?php
##註解
// Hello World!!!
# Hello World!!!
/*
 Hello World!!!
*/
##echo
echo 'Hello World!!!\n';//單引號的\n 執行時不會換行
echo "Hello World!!!\n";//雙引號的\n

ECHO "大寫可以嗎？\n";//ECHO大寫也可以印
echo "這樣寫可以換行嗎？\r\n";//\r\n也可以換行吧
//
/*
echo date("Y/m/d")."\n";//印出日期 此寫法會出錯
#要先設定正確的時區
*/
date_default_timezone_set('Asia/Taipei');//時區為台北
echo date("Y/m/d")."\n";
echo strftime("%X",time())."\n";//24H
echo strftime("%r",time())."\n";//AM PM
/*
about strftime() 
http://php.net/manual/en/function.strftime.php
*/

?>