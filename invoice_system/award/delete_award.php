<?php
include_once "../../PDO.php";
$delete="DELETE FROM `award_numbers` WHERE `year`='{$_GET['year']}' && `period`='{$_GET['period']}'";
$pdo->exec($delete);
to("number_search.php");
?>