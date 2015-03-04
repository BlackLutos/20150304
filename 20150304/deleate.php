<?php
session_start()
?>
<meta charset="utf-8">
<?php
if ($_SESSION['id'] != null) {
    echo"<form method=\"post\" action=\"deleate_finish.php\">";
    echo"<input type=\"text\" name=\"id\"><br>";
    echo"<input type=\"submit\">";
    echo"</form>";
} else {
    header("refresh:1; url=index.php");
    echo '權限不足';
}