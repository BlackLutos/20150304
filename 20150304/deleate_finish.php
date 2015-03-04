<?php
session_start()
?>
<?php
include 'config.php';
$id = $_POST['id'];
if ($_SESSION != null) {
    $sql = "DELETE FROM member where `id` = '$id'";
    if(mysql_query($sql)) {
        header("refresh:1; url=member.php");
        echo '成功';
    }
}