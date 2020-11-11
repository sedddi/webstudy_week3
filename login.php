<?php
session_start();
$_SESSION['id']='seyeon';
$_SESSION['pw']='1234'
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <h1><font face="나눔고딕">로그인 페이지</h1>
     <form action="check.php" method="POST">
    <p><font face="나눔고딕">ID : <input type="text" name="id"></p>
    <p><font face="나눔고딕">PW : <input type="password" name="pw"></p>
    <p><input type="submit" value="로그인" onclick="location.href='check.php'"></p>
   </body>
 </html>
