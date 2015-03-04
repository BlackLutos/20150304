<?php
session_start()
?>
<meta charset="utf-8">
<?php
include 'config.php';

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$other = $_POST['other'];

if ($id != null && $pw != null && $pw == $pw2) {
    $sql = "INSERT INTO `member` (id,pw,phone,address,other) values ('$id','$pw','$phone','$address','$other')";
}
if (mysql_query($sql)) {
    header("refresh:1; url=index.php");
    echo '註冊成功.....即將跳回登入頁..';
} else {
    header("refresh:1; url=index.php");
    echo '新增失敗.....即將跳回登入頁..';
} 
?>
