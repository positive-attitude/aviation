<?php
$db = new PDO('mysql:host=localhost;dbname=jim_aviation;charset=utf8', 'jim_grccuser', 'p@ssw0rd');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
