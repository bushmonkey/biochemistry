<?php
session_start();
unset($_SESSION);
session_destroy();
print("<SCRIPT LANGUAGE='JavaScript'>window.location='index.php';</script>");
?>
