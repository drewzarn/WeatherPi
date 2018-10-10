<?php
require('init.php');
$sql = "SELECT outTemp FROM archive ORDER BY dateTime DESC LIMIT 1";
$stmt = $DB->prepare($sql);
$stmt->execute($sqlVars);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo $row['outTemp'] . '°';