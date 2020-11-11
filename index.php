<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['pw']))
{
 echo "<br>";
}
else
{
   Header('location: login.php');
}
?>
<meta charset='UTF-8'>
<!DOCTYPE html>
<html>
<head>
 <title>
   index
 </title>
</head>

<body>
 <h1>
 MyBlog
 </h1>
<b>session 정보</b>
<br>

 <?php
 echo "login ID : ", $_SESSION['id'], "<br>";
 echo "login PW : ", $_SESSION['pw'], "<br>";
 ?>

 <br>
 <form>
   <input type="button" name="new_post" value="글쓰기" onclick="location.href='new_writing.html'">
   <input type="button" name="logout" value="로그아웃하기" onclick="location.href='logout.php'">
 </form>
</body>
</html>
