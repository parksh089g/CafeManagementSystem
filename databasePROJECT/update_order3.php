<?php
$conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
if (mysqli_connect_errno()) {
    echo "연결실패<br>이유dfd : " . mysqli_connect_error();
}
$sql = "UPDATE countorder SET count=" . $_GET['count'] . " "."WHERE menu =\"" . $_GET['menu']."\"";
if($_GET['menu']=="americano"){
    $result=mysqli_query($conn , "SELECT current FROM recommand WHERE ingredient='coffee'");
    $temp1=$result-2*$_GET('count');
    $sql2= "UPDATE recommand SET current=".$temp1." "."WHERE ingredient='coffee'";
    mysqli_query($conn, $sql2);//갱신1
}else if($_GET['menu']==='caffelatte'){
    $result=mysqli_query($conn , "SELECT current FROM recommand WHERE ingredient='coffee'");
    $temp1=$result-2*$_GET('count');
    $sql2= "UPDATE recommand SET current=".$temp1." "."WHERE ingredient='coffee'";
    mysqli_query($conn, $sql2);//갱신1
    $result2=mysqli_query($conn , "SELECT current FROM recommand WHERE ingredient='milk'");
    $temp2=$result2-2*$_GET('count');
    $sql3= "UPDATE recommand SET current=".$temp2." "."WHERE ingredient='milk'";    
    mysqli_query($conn, $sql3);//갱신2
}else{
    $result=mysqli_query($conn , "SELECT current FROM recommand WHERE ingredient='coffee'");
    $temp1=$result-2*$_GET('count');
    $sql2= "UPDATE recommand SET current=".$temp1." "."WHERE ingredient='coffee'";
    mysqli_query($conn, $sql2);//갱신1
    $result2=mysqli_query($conn , "SELECT current FROM recommand WHERE ingredient='milk'");
    $temp2=$result2-2*$_GET('count');
    $sql3= "UPDATE recommand SET current=".$temp2." "."WHERE ingredient='milk'";    
    mysqli_query($conn, $sql3);//갱신2
    $result3=mysqli_query($conn , "SELECT current FROM recommand WHERE ingredient='syrup'");
    $temp3=$result3-$_GET('count');
    $sql3= "UPDATE recommand SET current=".$temp3." "."WHERE ingredient='syrup'";    
    mysqli_query($conn, $sql3);//갱신3
}

if (mysqli_query($conn, $sql)) {
    echo "<script>alert(\"갱신이 완료되었습니다.\");</script>";
    echo "<script>location.href='http://localhost/databasePROJECT/update_order.php'</script>";
} else {
    echo "<script>alert(\"갱신이 실패하였습니다. 입력값을 확인 해주세요!\");</script>";
    echo "<script>location.href='http://localhost/databasePROJECT/update_order.php'</script>";
}
mysqli_close($conn);
?>

