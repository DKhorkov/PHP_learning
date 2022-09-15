<!DOCTYPE html>
<html lang='ru'>
<head>
    <title>Страница с формой</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
if (!isset($_REQUEST['submit'])) {?> <!-- "?>" - закрытие скрипта php. Если не нажата кнопка, то будет выдана форма:-->
    <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post"> <!-- "< ?...?>" есть аналог "< ?php echo ... ?>" -->
        Login
    <input type="text" name="login" value=""><br />
    Password
    <input type="password" name="password" value=""><br />
    <input type="submit" name="submit" value="Click button to submit">
</form>
<?php } # Закрытие условия if
else {
    $count = 0;
    if ($_REQUEST['login'] == "d3m0s" and $_REQUEST['password'] == "123") {
        if (isset($_COOKIE['count'])) $count = $_COOKIE['count']; # Подсчет использования скрипта пользователем с помощью куки.
        $count++;
        setcookie("count", $count, 0x7FFFFFFF, "/");
        echo "Hello, {$_REQUEST['login']}";
        echo "<p>Ur IP is {$_SERVER['REMOTE_ADDR']}</p>";
        echo "<p>Количество посещений = $count</p>";
    } else {
        echo "You have no access, {$_REQUEST['login']}";
    }
}
?>
</body>
</html>
