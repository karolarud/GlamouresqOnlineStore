<!--https://www.hostinger.in/tutorials/how-to-connect-php-to-mysql-->
<?php
require_once '../PDOconfig.php'; //access the login values
try {
    $connection = new PDO($dsn, $Username, $Password, $options);
    //echo 'Connected to $dbname at $host successfully.';
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
