<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['email']);

header("location:index.html?logout=true");
?>
