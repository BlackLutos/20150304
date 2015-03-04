<?php
session_start()
?>
<meta charset="utf-8">
<?php
include 'config.php';
$id = $_POST['id'];
$pw = $_POST['pw'];
$sql = "SELECT * FROM member WHERE `id` = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if ($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)  {
    $_SESSION['id'] = $id;
    header("refresh:1; url=member.php");    
    echo '登入成功';
} else {
    header("refresh:1; url=index.php");
    echo '帳號或密碼錯誤';
}