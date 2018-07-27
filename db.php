<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'php-tutorial';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
