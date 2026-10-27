<?php
session_start();

require "../PHP-OOP/view/template/header.php"; ?>

<div class="container mt-2">
    <?php if(isset($_SESSION['validation_name'])) : ?>

        <div class="alert alert-danger">
            <?= $_SESSION['validation_name'] ?>
        </div>

    <?php endif ?>
    <form method="POST">
        <h3 class="text-center"> Add Author </h3>
        <div class="row">
            <input
                class="form-control"
                name="name"
                placeholder="Please input author name.."
            >
            <button
                type="submit"
                class="btn btn-primary"
            >
            Submit
            </button>
            <a
                href="/author"
                class="text-center mt-2"
            >
            Back to Author List
            </a>
        </div>
    </form>
</div>

<?php require "../PHP-OOP/view/template/footer.php"; ?>