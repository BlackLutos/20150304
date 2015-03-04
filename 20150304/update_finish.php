<?php
session_start()
?>
<meta charset="utf-8">
<?php
include 'config.php';

$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$other = $_POST['other'];

if ($_SESSION['id'] != null && $pw != null && $pw == $pw2) {
    $id = $_SESSION['id'];

    $sql = "UPDATE member set `pw` = '$pw', `phone` = $phone, `address` = '$address', `other` = '$other' WHERE `id` = '$id'";
    if (mysql_query($sql)) {
        
        echo '修改成功';
        header("refresh:1; url=member.php");
    }
} else {
        echo '修改失敗';
        header("refresh:1; url=member.php");
}
?>