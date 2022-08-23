<?php
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('h:i:s ');
echo "Time:".$date;
header("Refresh:1");
?>