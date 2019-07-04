<?php
session_start();
session_unset();
session_destroy();

header('LOCATION: http://waubonsiestudent.org');

?>
