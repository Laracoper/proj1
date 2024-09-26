<?
session_start();
require '../connect/connect.php';
require 'mail.php';

$id = $_GET['id'];
$name = $_GET['name'];
$surname = $_GET['surname'];



$sql = "UPDATE `users` SET `name` = ?, `surname` = ? where `id` = $id";
$res = $pdo->prepare($sql);
$res->execute([$name, $surname]);


header('location:/');

print_r($_GET);