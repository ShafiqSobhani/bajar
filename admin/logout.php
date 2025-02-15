<?php

session_start();
session_destroy();

header("Location: login.php");
exit; // It's good practice to include exit; after a header redirect
?>
