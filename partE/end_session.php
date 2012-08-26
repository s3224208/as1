<?php
session_start();

unset($_SESSION['session']);
header("Location: search.php");
exit;
?>
