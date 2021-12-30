<?php
include("../sign-in/connect.php");

$sql = "SELECT * FROM member";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
?>
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">번호</font></font></th>
            <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">아이디</font></font></th>
            <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">이름</font></font></th>
            <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">생년월일</font></font></th>
            <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">취미</font></font></th>
        </tr>
        </thead>
        <tbody>
<?php
while($row = $result->fetch_assoc()) {
?>

            <tr>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href='delete.php?idx=<?php echo $row["idx"] ?>'><?php echo $row["idx"] ?></a></font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href='gedit.html?userid=<?php echo $row["userid"] ?>'><?php echo $row["userid"] ?></a></font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row["username"] ?></font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row["major"] ?></font></font></td>
                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row["userbirth"] ?></font></font></td>
            </tr>
<?php
}
} else {
    echo "레코드가 존재하지 않습니다.";
}
?>
        </tbody>
    </table>
</div>
<?php
$conn->close();
?>

