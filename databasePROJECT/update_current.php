<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>현재 재고량 수정</title>
    </head>
        <style>
            body{
                background-image: url(image/background.jpg);
            }
        </style>    
    <body>
    <center>
        <div style="width: 1000px; background-color: buttonface">
            <h2>현재 재고량 수정</h2>
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
        <div style="width: 500px; background-color: buttonface">
            <h2>갱신 내용 입력</h2><p>
            <form action="update_current2.php">
                수정할 재료 입력: <input type="text" name="ingredient"><p>
                수정할 재고량 입력: <input type="text" name="current"><p>
                <input type="submit" value="갱신">
            </form>
        </div> 
        <div style="width: 1000px; background-color: buttonface">
            <h2>
                <input type="button" value="뒤로가기" onclick="location.href='http://localhost/databasePROJECT/mainScreen.php'">
            </h2>
        </div>        
    </center>
</body>
</html>
