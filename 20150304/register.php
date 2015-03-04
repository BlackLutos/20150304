<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>註冊</title>
</head>
<body>
    <form method="post" action="register_finish.php">
        帳號:<input type="text" name="id" required><br><br>
        密碼:<input type="password" name="pw" required><br><br>
        密碼確認:<input type="password" name="pw2" required><br><br>
        電話:<input type="text" name="phone" ><br><br>
        地址:<input type="text" name="address" ><br><br>
        備註:<textarea name="other" cols="45" rows="5"></textarea><br>
             <input type="submit">
    </form>
</body>
</html>