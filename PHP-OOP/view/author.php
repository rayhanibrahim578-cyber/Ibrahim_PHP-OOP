<?php 

require "template/header.php";
$no = 1;
?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header text-center text-center font-bold">
                List Author Library
            </div>
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php endif ?>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <input type="text" class="form-control" placeholder="Search author..."/>
                    <a href="/author/create" class="m-2 btn btn-info">Add Author</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-info">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $author) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $author->getName() ?></td>
                                    <td>
                                        <a class="bg-warning p-2 btn btn-rounded text-light" href="/author/ <?= $author->getId() ?>/edit">
                                            update
                                        </a>
                                        <a class="bg-danger p-2 btn btn-rounded text-light" href="/author <?= $author->getId() ?>/delete">
                                            Delete
                                        </a>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php require "template/footer.php" ?>