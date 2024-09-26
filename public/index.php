<?
// session_start();
require '../connect/connect.php';
// require '../vendor/autoload.php';


require_once 'inc/header.php';
?>


<?
$sql = "SELECT * FROM users";
$res = $pdo->prepare($sql);
$res->execute();
$users = $res->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="container pt-5 main">
    <div class="row">
        <div class="col-md-4">
            <? if (!empty($users)) { ?>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>name</th>
                            <th>surname</th>


                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($users as $user) { ?>
                            <tr>

                                <td><?= $user['name'] ?></td>
                                <td><?= $user['surname'] ?></td>

                                <th><a href="update.php?id=<?= $user['id'] ?>">update</a></th>
                            </tr>
                        <? } ?>
                    </tbody>

                </table>
            <? } else {  ?>
                <div class="alert alert-primary mt-3" role="alert">
                    пользователей пока нет
                    <a href="create.php" class="btn btn-warning">добавить</a>
                </div>
            <? } ?>
        </div>
        <div class="col-md-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active rel">
                        <img src="assets/img/sles4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item rel">
                        <img src="assets/img/print_9265079_6864732-1024x683.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item rel">
                        <img src="assets/img/Без названия.jpg" class="d-block w-100" alt="img">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="d-inline-flex gap-1">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href2
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </div>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</main>



<? require_once 'inc/footer.php' ?>