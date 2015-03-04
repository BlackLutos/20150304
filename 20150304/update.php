<?php
session_start()
?>
<meta charset="utf-8">
<?php
include 'config.php';
if ($_SESSION['id'] != null) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM member WHERE `id` = '$id'";
    $result = mysql_query($sql);
    $row = mysql_fetch_row($result);

    echo "<form method=\"post\" action=\"update_finish.php\">";
    echo "帳號:<input type=\"text\" name=\"id\" value=\"$row[1]\" required>(此項目無法修改)<br><br>";
    echo "密碼:<input type=\"password\" name=\"pw\" value=\"$row[2]\" required><br><br>";
    echo "密碼確認:<input type=\"password\" name=\"pw2\" value=\"$row[2]\" required><br><br>";
    echo "電話:<input type=\"text\" name=\"phone\" value=\"$row[3]\" ><br><br>";
    echo "地址:<input type=\"text\" name=\"address\" value=\"$row[4]\" ><br><br>";
    echo "備註:<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea><br>";
    echo "<input type=\"submit\">";
    echo "</form>"; 
} else {

}
?>