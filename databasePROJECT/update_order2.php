<?php
$conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
if (mysqli_connect_errno()) {
    echo "연결실패<br>이유dfd : " . mysqli_connect_error();
}
$sql = "UPDATE countorder SET count=" . $_GET['count'] . " "."WHERE menu =\"" . $_GET['menu']."\"";
mysqli_query($conn, "UPDATE recommand SET current=8 WHERE ingredient='syrup'");
mysqli_query($conn, "UPDATE recommand SET current=26 WHERE ingredient='milk'");
mysqli_query($conn, "UPDATE recommand SET current=26 WHERE ingredient='coffee'");

if (mysqli_query($conn, $sql)) {
    echo "<script>alert(\"갱신이 완료되었습니다.\");</script>";
    echo "<script>location.href='http://localhost/databasePROJECT/update_order.php'</script>";
} else {
    echo "<script>alert(\"갱신이 실패하였습니다. 입력값을 확인 해주세요!\");</script>";
    echo "<script>location.href='http://localhost/databasePROJECT/update_order.php'</script>";
}
mysqli_close($conn);
?>

