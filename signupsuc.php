<?php
$db=mysqli_connect("localhost","s1921","1921","s1921_db");
$result=mysqli_query ($db, "insert into logsign(id,pw,pw2,email,name,birth) values ('$_GET[id]','$_GET[pw]','$_GET[pw2]','$_GET[email]','$_GET[name]','$_GET[birth]')");
mysqli_close($db);
echo"저장 성공";
echo"<meta http-equiv='refresh' content='3; URL=19112102.php'>";
?>
