<?php
include("../sign-in/connect.php");

$idx = $_GET['idx'];

$sql = "DELETE FROM member WHERE idx=".$idx;

if (mysqli_query($conn, $sql)) {
    echo "삭제되었습니다.<br>";
    echo "<a href='list.php'>목록</a>";
} else {
    echo "삭제오류: " . mysqli_error($conn);
}

mysqli_close($conn);

?>