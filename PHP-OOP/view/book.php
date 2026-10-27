<?php require "template/header.php" ?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header text-center text-center font-bold">
                List Book PPLG Library
            </div>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <input type="text" class="form-control" placeholder="Search book"/>
                    <button class="m-2 btn btn-info">Find</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-info">
                            <tr>
                                <th>No.</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Year</th>
                                <th>Publisher</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php require "template/footer.php" ?>