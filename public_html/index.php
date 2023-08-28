<?php
$host = 'postgres';
$port = '5432';
$dbname = 'development';
$user = 'root';
$password = 'root';



try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if ($pdo) {
        echo "Connected to the $dbname database successfully!";
        echo "Hello world!";
    }
} catch (PDOException $e) {
	die($e->getMessage());
} finally {
	if ($pdo) {
		$pdo = null;
	}
}
