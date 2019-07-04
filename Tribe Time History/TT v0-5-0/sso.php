<?php
    if($_GET["test"]=="self")
    {
        session_start();
        $_SESSION["time"] = time();
	   $_SESSION["name"] = "Hadi Ahmed";
	   $_SESSION["id"] = "0000000";
    }

?>

<!DOCTYPE html>
<html>

<head>
  <title>Tribe Time Scheduling Portal</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
</head>
    
<body>
    <div id="titlebar"><img id="logo" src="WVLogo.png" alt="WVHS Logo">
        <div id="text">Tribe Time Scheduling Portal</div>
    </div>
    
    <a href="student.php">student</a>
    <a href="teacher.php">teacher</a>
    
</body>
</html>
