<!DOCTYPE html>
<!--
초기 스크린
--> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>카페 재고관리 시스템</title>
    </head>
        <style>
            body{
                background-image: url(image/background.jpg);            
            }
        </style>
    <body>
        <div>
            <center>
                <h1>카페 재고관리 시스템</h1><p>
                <h3>환영합니다. 재고 관리를 편하게 해드리겠습니다.</h3>
            </center>
        </div>
        <center>
            <img src="./image/cafeimg.jpg" alt="카페이미지" width="500">
        <div style="width: 500px; background-color: buttonface">
            <h2>관리자 로그인</h2><p>
            <form action="login.php">
                아이디: <input type="text" name="id"><p>
                    비밀번호: <input type="password" name="pwd"><p>
                    <input type="submit" value="로그인">
                    <input type="reset" value="초기화">
        </div> 
        </center>
    </body>
</html>
