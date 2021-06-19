<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>메뉴관리</title>
    </head>
        <style>
            body{
                background-image: url(image/background.jpg);
            }
        </style>    
    <body>
    <center>
        <div style="width: 1000px; background-color: buttonface">
            <h2>주문량을 등록하시면 자동으로 테이블이 갱신됩니다.</h2>
        </div>
        <div style="width: 500px; background-color: rgb(255,255,128,0.5)">
            <h2>메뉴 정보</h2>
            <?php
            $conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
            if (mysqli_connect_errno()) {
                echo "연결실패<br>이유dfd : " . mysqli_connect_error();
            }
            $result = mysqli_query($conn, "SELECT * FROM countorder");
            echo "<table border='2' padding: 10px;> <tr> <th>메뉴</th> <th>주문량</th></tr>";
            $n = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['menu'] . "</td>";
                echo "<td>" . $row['count'] . "</td>";
                echo "</tr>";
                $n++;
            }
            echo "</table>";
            mysqli_close($conn);
            ?>
        </div>
        <div style="width: 500px; background-color: rgb(255,128,255,0.5)">
            <h2>메뉴별 레시피 정보</h2>
            <?php
            $conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
            if (mysqli_connect_errno()) {
                echo "연결실패<br>이유dfd : " . mysqli_connect_error();
            }
            $result = mysqli_query($conn, "SELECT * FROM recipe");
            echo "<table border='2' padding: 10px;> <tr> <th>메뉴</th> <th>샷</th> <th>우유</th> <th>시럽</th></tr>";
            $n = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['menu'] . "</td>";
                echo "<td>" . $row['coffee'] . "</td>";
                echo "<td>" . $row['milk'] . "</td>";
                echo "<td>" . $row['syrup'] . "</td>";
                echo "</tr>";
                $n++;
            }
            echo "</table>";
            mysqli_close($conn);
            ?>
        </div>
        <div style="width: 500px; background-color: rgb(128,255,128,0.5)">
            <h2>재료별 재고량</h2>
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
                <input type="button" value="현재 재고량 수정" onclick="location.href='http://localhost/databasePROJECT/update_current.php'">
                <input type="button" value="주문량 수정" onclick="location.href='http://localhost/databasePROJECT/update_order.php'"><br>
                <input type="button" value="메뉴 수정" onclick="location.href='http://localhost/databasePROJECT/update_menu.php'">
                <input type="button" value="레시피 수정" onclick="location.href='http://localhost/databasePROJECT/update_recipe.php'"><br>
                <input type="button" value="뒤로가기" onclick="location.href='http://localhost/databasePROJECT/mainScreen.php'">
            </h2>
        </div>        
    </center>
</body>
</html>
