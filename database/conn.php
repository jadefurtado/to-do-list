<?php 

$hostname = 'localhost';
$database = 'to_do_list';
$username = 'postgres';
$pass = 'toor';

try{
    $pdo = new PDO("pgsql:host={$hostname};dbname={$database}", $username, $pass);
} catch(PDOException $e) {
    echo "Erro: ".$e->getMessage();
}