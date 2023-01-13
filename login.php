<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="" method="post" class="form">
    <label for="user">User:</label>
    <input id="user" type="text" name="user" required="required"><br>
    <label for="password">Password:</label>
    <input id="password" type="password" name="password" required="required"><br>
    <input type="submit" value="Login" name="login" class="button"><br>
</form>
<?php
require_once("controller/controller.php");
global $controller;
$controller = new Controller();
if (isset($_POST['login'])) {
    $controller->run();
} ?>


</body>

</html>


