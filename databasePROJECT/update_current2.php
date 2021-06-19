<?php
$conn = mysqli_connect('localhost:3307', 'root', '089000', 'testweb');
if (mysqli_connect_errno()) {
    echo "연결실패<br>이유dfd : " . mysqli_connect_error();
}
$sql = "UPDATE recommand SET current=" . $_GET['current'] . " "."WHERE ingredient =\"" . $_GET['ingredient']."\"";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert(\"갱신이 완료되었습니다.\");</script>";
    echo "<script>location.href='http://localhost/databasePROJECT/update_current.php'</script>";
} else {
    echo "<script>alert(\"갱신이 실패하였습니다. 입력값을 확인 해주세요!\");</script>";
    echo "<script>location.href='http://localhost/databasePROJECT/update_current.php'</script>";
}
mysqli_close($conn);
?>

