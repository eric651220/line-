<?php
   $json_str=file_get_contents('php://input');// 接收request的
   $json_obj=json_decode($json_str);// 轉成json格式
 
   $myfile=fopen("log.txt","Wt") or die("unable to open file");//設定一個log.txt來印訊息
   fwrite(smyfile,"\xEF\XBB\xBF",$json_str);//在字串前面加上\xEF\xBB\xBF轉成utf8格式
