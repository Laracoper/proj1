<?
require '../connect/connect.php';

$sql = "SELECT * FROM footer";
$res = $pdo->prepare($sql);
$res->execute();
$footer = $res->fetch(PDO::FETCH_ASSOC);
// print_r($footer);

?>

<footer>
    <div class="bg-dark text-secondary px-1 py-1 text-center">
        <div class="py-1">
            <h1 class="display-5 fw-bold text-white"><?= $footer['title'] ?></h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4"><?= $footer['description'] ?></p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-info btn-sm px-4 me-sm-3 fw-bold">Custom button</button>
                    <button type="button" class="btn btn-outline-light px-4">Secondary</button>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>