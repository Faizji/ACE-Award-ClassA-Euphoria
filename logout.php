<?php
session_start(); // Memulai sesi
session_destroy(); // Menghancurkan sesi

header('Location: index.php?message=logout_success'); 
exit();
?>
