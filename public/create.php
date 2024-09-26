<?
session_start();
require '../connect/connect.php';

require_once 'inc/header.php';
require 'mail.php';



// print_r($_POST);




?>

<main class="container pt-5">
    <p class="h1">create users</p>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post" class="mb-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="имя" name="name">
                    <label for="floatingInput">name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="фамилия" name="surname">
                    <label for="floatingInput">фамилия</label>
                </div>
                <!-- <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="email" name="email">
                    <label for="floatingInput">email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="телефон" name="phone">
                    <label for="floatingInput">телефон</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="bio" name="bio">
                    <label for="floatingInput">био</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="город" name="city">
                    <label for="floatingInput">город</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="страна" name="country">
                    <label for="floatingInput">страна</label>
                </div> -->
                <!-- <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="возраст" name="age">
                    <label for="floatingInput">возраст</label>
                </div> -->

                <!-- <div class="form-check mb-4 d-flex align-items-center">
                    <input class="form-check-input p-3" type="checkbox" id="i-check" name="check">
                    <label class="form-check-label px-2" for="i-check">
                        <a href="../policy.php" target="_blank">согласие на обработку персональных данных</a>
                    </label>
                </div> -->
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