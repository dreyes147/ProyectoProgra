<?php
session_start();
$_SESSION['usuario'] = array(); 
session_destroy();
header('location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log Out</title>
</head>

<body>
</body>
</html>