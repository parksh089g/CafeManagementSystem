<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>주문량 수정</title>
        <style>
            body{
                background-image: url(image/background.jpg);
            }
        </style>
    </head>
    <body>
    <center>
        <div style="width: 1000px; background-color: buttonface">
            <h2>주문량 수정</h2>
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
        <div style="width: 500px; background-color: buttonface">
            <h2>갱신 내용 입력</h2><p>
            <form action="update_order2.php">
                수정할 메뉴 입력: <input type="text" name="menu"><p>
                수정할 주문량 입력: <input type="text" name="count"><p>
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
