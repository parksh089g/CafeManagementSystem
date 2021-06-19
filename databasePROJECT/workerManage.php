<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>직원관리</title>
    </head>
        <style>
            body{
                background-image: url(image/background.jpg);
            }
        </style>    
    <body>
    <center>
        <div style="width: 500px; background-color: rgb(255,128,128,0.5)">
            <h2>직원 목록</h2>
            <?php
            $conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
            if (mysqli_connect_errno()) {
                echo "연결실패<br>이유dfd : " . mysqli_connect_error();
            }
            $result = mysqli_query($conn, "SELECT * FROM worker");
            echo "<table border='2' padding: 10px;> <tr> <th>직원ID</th> <th>이름</th></tr>";
            $n = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "</tr>";
                $n++;
            }
            echo "</table>";
            mysqli_close($conn);
            ?>            
        </div>
        <div style="width: 500px; background-color: rgb(128,128,255,0.5)">
            <h2>직원 근무표</h2>
            <?php
            $conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
            if (mysqli_connect_errno()) {
                echo "연결실패<br>이유dfd : " . mysqli_connect_error();
            } else
            $result = mysqli_query($conn, "SELECT * FROM working");
            echo "<table border='2' padding: 10px;> <tr> <th>직원 ID</th> <th>근무 날짜</th> <th>근무 시간</th></tr>";
            $n = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "</tr>";
                $n++;
            }
            echo "</table>";
            mysqli_close($conn);
            ?>            
        </div>
        <div style="width: 1000px; background-color: buttonface">
            <h2>
                <input type="button" value="직원정보수정">
                <input type="button" value="근무 추가하기" onclick="location.href='http://localhost/databasePROJECT/update_working.php'"><br>
                <input type="button" value="뒤로가기" onclick="location.href='http://localhost/databasePROJECT/mainScreen.php'">
            </h2>
        </div>
    </center>
</body>
</html>
