<?php 
session_start();
session_unset();
unset($_SESSION['activeDocNo']);
session_destroy();
header('Location:verify_documents.php');
?>