<?php

session_start();
session_destroy();
echo 'Ha cerrado su cuenta';
header('Location:index.php');
?>