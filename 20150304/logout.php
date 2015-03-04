<?php
session_start()
?>
<meta charset="utf-8">
<?php
unset($_SESSION['id']);
 
header("refresh:1; url=index.php");
echo '登出中......';
?> 