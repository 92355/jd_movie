<html>
<style>
body { background : #FAFAFA; overflow : auto;}
img { width:100%; height:100%; border-radius:10px;}
span { display:inline-block; width:250px; height:250px; margin:20;
       text-align:bottom; color:black; padding:0px; border:1px solid black;}
span2 { display:inline-block; width:100px; line-height:20px; margin:8;
       text-align:center; color:black; padding:5px; border:1px solid black;}
span3 { display:inline-block; width:100px; line-height:20px; margin:6;
       text-align:center; color:white; padding:2px; border:1px solid white;}

span4 {display:inline-block; width:260px; height:90px; line-height:20px; margin:8;
       text-align:center; color:red; padding:5px; border:1px solid red;}
.c{border-radius:3px }
.d{border-radius:10px }
#header{height:150px; background:red;}
#center{height:85%; background:#FAFAFA;}
#footer{height:0; background:#FAFAFA;}

</style>
<div id="header">
<span4 class="d"><a href="main.php"><img src="logo.png" style="user-scale:yes">
</span></a>
<body align=right ><a href=login.php><span3 class="c">로그인</span></a>
<a href=signup.php><span3 class="c">회원가입</span></a></body>
</div>
</div>
<div id="center">
<body>
<center>
<br><br><br>
<h1> 로그인 </h1>
<br>
<br>
<form method=post name=send action=logframe.php>
<input type=text name=logid placeholder="아이디를 입력하세요."style=" width:40%; height:50px;" required><br>
<input type=password name=logpw placeholder="비밀번호를 입력하세요." style="width:40%; height:50px;" required><br>
<br><br><br><br>
<input type=submit value="로그인" style="width:40%; background-color:red; font-color:white; border:1px solid red; color:white; height:5%" target=_parent><br>
</form>
<br>아직 회원이 아니신가요? <a href=signup.php  style="text-decoration:none; color:blue;">회원가입<a>
<br><br><br><br>
<hr>
<br>
<a href=intro.php><span2 class="d">작품소개</span></a>
<a href=production.php><span2 class="d">제작진</span></a>
<a href=notice.php><span2 class="d">공지사항</span></a>
<a href=resource.php><span2 class="d">자료실</span></a>
<br><br><br><br><br><br><br><br>
<div>
</center>
</body>
</html>

          