<?php
include("../sign-in/connect.php");

$firstID = $_POST["firstID"];
$firstPWD = $_POST["firstPWD"];
$firstNAME = $_POST["firstNAME"];
$firstMAJOR = $_POST["firstMAJOR"];
$firstDATE = $_POST["firstDATE"];
$firstHOBBY = $_POST["firstHOBBY"];
$firstADDRESS = $_POST["firstADDRESS"];

$sql = "SELECT * FROM member where userid='".$firstID."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <script>
    alert("중복된 아이디가 존재합니다.");
    window.location.href = '/sign-in/';
    </script>
<?php
} else {

    $sql = "INSERT INTO member (userid, userpwd, username, major, userbirth, userhobby, useraddress, userintroduce)
    VALUES ('".$firstID."', '".$firstPWD."', '".$firstNAME."', '".$firstMAJOR."', '".$firstDATE."', '".$firstHOBBY."', '".$firstADDRESS."', '')";

    if (mysqli_query($conn, $sql)) {
        echo "저장되었습니다.";
        echo "<a href='/sign-in/'>홈으로</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>