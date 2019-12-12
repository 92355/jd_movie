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
<form method=post action=signsuccess.php>
<br><br><br>
<h1> 회원가입 </h1>
<br>
<br>아이디,비밀번호 입력<br>
<input type=text name=uid placeholder="아이디를 입력하세요." style=" width:40%; height:50px;" required><br>
<input type=password name=pw placeholder="비밀번호를 입력하세요." style="width:40%; height:50px;" required><br>
<input type=password name=pw2 placeholder="비밀번호를 다시한번 입력하세요." style="width:40%; height:50px;" required><br>
<input type=text name=email placeholder="이메일을 입력하세요." style="width:40%; height:50px;" required><br><br>
<br>회원기본정보 입력<br>
<input type=text name=name placeholder="이름을 입력하세요." style="width:40%; height:50px;" required><br>
<input type=text name=birth placeholder="생년월일을 입력하세요.  ex.)19970919" style="width:40%; height:50px;" required><br>
<br><br><br><br>
<input type=submit value="회원가입" style="width:40%; background-color:red; font-color:white; border:1px solid red; color:white; height:5%;"><br>
<br><br><br><br><br>
<hr><br>
<a href=intro.php><span2 class="d">작품소개</span></a>
<a href=production.php><span2 class="d">제작진</span></a>
<a href=notice.php><span2 class="d">공지사항</span></a>
<a href=resource.php><span2 class="d">자료실</span></a>
<br><br><br><br><br><br><br><br>
</center>
</form>
</div>
</body>
</html>

