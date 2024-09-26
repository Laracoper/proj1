<?
session_start();
require '../connect/connect.php';

require_once 'inc/header.php';
require 'mail.php';



// print_r($_POST);
$id = $_GET['id'];


$sql = "SELECT * FROM users where `id` = $id";
$res = $pdo->prepare($sql);
$res->execute();
$user = $res->fetch();



?>

<main class="container pt-5">
    <p class="h1">update users</p>
    <div class="row">
        <div class="col-md-6">
                
            <form action="update-page.php" method="get" class="mb-4">
                <input type="hidden" name="id" value="<?=$user['id']?>">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="имя" name="name" value="<?=$user['name']?>">
                    <label for="floatingInput">name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="фамилия" name="surname" value="<?=$user['surname']?>">
                    <label for="floatingInput">фамилия</label>
                </div>
             
                <button type="submit" class="btn btn-warning">отправить</button>
            </form>

        </div>
        <div class="col-md-6">
            <? if (!empty($_SESSION['errors'])) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['errors'];
                    unset($_SESSION['errors']) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <? } ?>
            <? if (!empty($_SESSION['success'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['success'];
                    unset($_SESSION['success']) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <? } ?>
        </div>


    </div>


</main>


<? require_once 'inc/footer.php' ?>