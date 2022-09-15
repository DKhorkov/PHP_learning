<!DOCTYPE html>
<html lang='ru'>
<head>
    <title>Страница с формой</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
if ($_REQUEST['login'] == "d3m0s" and $_REQUEST['password'] == "123") {
    echo "Hello, {$_REQUEST['login']}";
} else {
    echo "You have no access";
}
?>
</body>
</html>
