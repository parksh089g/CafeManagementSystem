<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>카페 재고관리 시스템(관리자 모드)</title>
    </head>
        <style>
            body{
                background-image: url(image/background.jpg);
            }
        </style>    
    <body>
        <img src="./image/cafeimg4.jpg" alt="카페이미지" width="1000" height="500">
    <center>

        <div style="width: 1000px; background-color: buttonface">
            <h1>주문량을 등록하시면 자동으로 테이블이 갱신됩니다.</h1>
        </div>
        <div style="width: 500px; background-color: rgb(128,255,128,0.5)">
            <h2>현재 재고량</h2>
            <?php
            $conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
            if (mysqli_connect_errno()) {
                echo "연결실패<br>이유dfd : " . mysqli_connect_error();
            }
            $result = mysqli_query($conn, "SELECT * FROM recommand");
            echo "<table border='2' padding: 10px;> <tr> <th>재료</th> <th>현재 재고량</th> <th>권장 재고량</th></tr>";
            $n = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['ingredient'] . "</td>";
                echo "<td>" . $row['current'] . "</td>";
                echo "<td>" . $row['ideal'] . "</td>";
                echo "</tr>";
                $n++;
            }
            echo "</table>";
            mysqli_close($conn);
            ?>
        </div>        
        <div style="width: 1000px; background-color: buttonface">
            <h2>
                <input type="button" value="메뉴 및 재고 관리" onclick="location.href='http://localhost/databasePROJECT/menuManage.php'">
                <input type="button" value="직원관리" onclick="location.href='http://localhost/databasePROJECT/workerManage.php'"><br>
                <input type="button" value="로그아웃" onclick="location.href='http://localhost/databasePROJECT/initialScreen.php'">
            </h2>
        </div>  
    </center>
</body>
</html>
