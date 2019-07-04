<?php
    include(__DIR__."/resources/lookup.php");
    session_start();
    if($_SESSION["time"] - time() >= 600)
    {
        header("LOCATION: index.php");
        exit();
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

<body id="body">
  <div id="titlebar"><img id="logo" src="WVLogo.png" alt="WVHS Logo">
    <div id="text">Tribe Time Scheduling Portal</div>
  </div>

  <section id="mainpage">
    <div id="menu" class="card">
      <div id="userinfo">
        <span id="Name" style="font-size: 20px;"><?php echo $_SESSION["name"] ?></span>
        <p id="idnum" style="font-size: 15px;"><?php echo $_SESSION["id"] ?></p>

      </div>
      <div id="menuoptions">
        <ul>
          <li>
            <button onclick="viewInfo()" class="button">Tribe Time Information</button></li>
          <li><br></li>
          <li><button onclick="makeChange()" class="button">Change Tribe Time Capacity</button></li>
          <li><br></li>
          <li><button onclick="viewRoster()" class="button">View Tribe Time Roster</button></li>
        </ul>
      </div>
      <button id="logout" class="button" onclick="logout()">Logout</button>
    </div>

    <div id="content" class="card">
      <div id="information">
        <div id="info">Next Tribe Time is <span id="date">date</span>.<br><br><br>Currently, <span id="num">0</span> <span id="grammer">students</span> are signed up for your room.<br>
        </div>
          
        <div id="change">Current Capacity for Tribe Time is <span id="cap">0</span>.<br><br>
            <?php 
                if(date("w") == "1" or true) {
                    echo "Change Capacity:<br>
                    <select id=\"select\">";
                    for($i =0; $i<=20; $i=$i+5) {
                        echo "<option>$i</option>";
                    }
                    echo "</select>";
                    echo "<button id=\"approveChange\" class=\"button\" onclick=\"submitChange()\">OK</button>";
                } else {
                    echo "Unable to change capacity.";
                }
            ?>
        </div>
          
        <div id="roster">Current Roster for Tribe Time<br><br>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="teachscript.js"></script>
  <footer id="footer"> Property of Waubonsie Valley High School | <a href="http://wvhs.ipsd.org">wvhs.ipsd.org</a> | email@domain.com</footer>
</body>

</html>