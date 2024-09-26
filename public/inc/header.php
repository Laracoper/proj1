<?
require '../connect/connect.php';

$sql = "SELECT * FROM header";
$res = $pdo->prepare($sql);
$res->execute();
$headers = $res->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrap"> 
    <header class="position-fixed w-100 z-3 opacity-75">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <div class="container-fluid bg-dark py-2">
                <a class="navbar-brand text-white" href="/"><?= $headers['title'] ?></a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php"><?= $headers['field1'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="contact.php"><?= $headers['field2'] ?></a>
                        </li>
                        <a href="create.php" class="btn btn-warning">добавить</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>