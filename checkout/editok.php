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

if ($result->num_rows < 1) {
?>
    <script>
    alert("중복된 아이디가 존재하지 않습니다.");
    window.location.href = '/sign-in/';
    </script>
<?php
} else {

    $sql = "UPDATE member SET userid="."'$firstID'".", username="."'$firstNAME'".", major="."'$firstMAJOR'".", userbirth="."'$firstDATE'".", userhobby="."'$firstHOBBY'".", useraddress="."'$firstADDRESS'"." WHERE userid='".$firstID."'";


    if (mysqli_query($conn, $sql)) {
        echo "수정되었습니다.";
        echo "<a href='/sign-in/'>홈으로</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>