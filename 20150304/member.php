<?php
session_start()
?>
<meta charset="utf-8">
<?php
include 'config.php';
echo '<a href="logout.php">登出</a><br><br>';

if ($_SESSION['id'] != null) {
    echo '<a href="register.php">註冊</a>';
    echo '<a href="update.php">修改</a>';
    echo '<a href="deleate.php">刪除</a><br><br>';

    $sql = "SELECT * FROM `member`";
    $result = mysql_query($sql);
    while($row = mysql_fetch_row($result)) {
        echo "$row[0] - 帳號(名字) : $row[1]," . "電話: $row[3], 地址: $row[4], 備註:$row[5]<br>";
    }
} else {
    header("refresh:1; url=index.php");
    echo '你無此權限';
}
?>