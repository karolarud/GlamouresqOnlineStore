<?php

/**
 * Configuration for database connection
 *
 */
$host = "localhost";
$Username = "root";
$Password = "";
$dbname = "glamouresq"; // used in functions
$dsn = "mysql:host=$host;dbname=$dbname"; // used in DBconnect.php
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
