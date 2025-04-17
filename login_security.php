<?php
session_start();
session_unset();
session_destroy();

// Clear cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect to login/homepage
header("Location: index.php");
exit();
?>
