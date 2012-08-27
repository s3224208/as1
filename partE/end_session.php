<?php
session_start();

unset($_SESSION['session']);
unset($_SESSION['result']);
header("Location: search.php");
exit;
?>
