<?php
function get_products_rings(){
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
    $result = $pdo->query('SELECT * FROM products WHERE category=1');
    $products = $result->fetchAll();

    return $products;
}
function get_products_bracelets(){
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
    $result = $pdo->query('SELECT * FROM products WHERE category=2');
    $products = $result->fetchAll();

    return $products;
}
function get_products_necklaces(){
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
    $result = $pdo->query('SELECT * FROM products WHERE category=3');
    $products = $result->fetchAll();

    return $products;
}
function get_products_earrings(){
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
    $result = $pdo->query('SELECT * FROM products WHERE category=4');
    $products = $result->fetchAll();

    return $products;
}
