<?php
    session_start();
    if(!isset($_SESSION["id"]))
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
            <button onclick="viewCurrent()" class="button">Current Tribe Time Location</button></li>
          <li><br></li>
          <li><button onclick="makeChange()" class="button">Change Tribe Time Location</button></li>
        </ul>
      </div>
      <button id="logout" class="button" onclick="logout()">Logout</button>
    </div>

    <div id="content" class="card">
      <div id="information">
        <div id="current">Next Tribe Time is <span id="date">date</span>.<br><br><br>You are currently assigned to <span id="class">class</span> in room <span id="room">room</span>.
        </div>
        <div id="change">Make a Change<br><br>Choose a New Class<br><br>
          <select id="select">
            <option value="113">Quiet Study</option>
          </select>
          <button id="approveChange" class="button" onclick="submitChange()">OK</button>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="script.js"></script>
  <footer id="footer"> Property of Waubonsie Valley High School | <a href="wvhs.ipsd.org">wvhs.ipsd.org</a> | email@domain.com</footer>
</body>

</html>
