<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Management</title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../public/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="mt-4">
            <h3 class="text-center">Article Management</h3>
        </div>
        <div class="mt-4">
            <div>
                <a href="<?= DOMAIN . '?action=create'?>" class="btn btn-success">Add New Article</a>
            </div>
            <div class="card mt-4">

                <div class="card-header">
                    <h4 class="d-inline-block">Article List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="fw-bolder">
                            <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Summary</td>
                                <td>Content</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($articles as $article) {
                            ?>
                                <tr>
                                    <td><?= $article->getID() ?></td>
                                    <td><?= $article->getTitle() ?></td>
                                    <td><?= $article->getSummary() ?></td>
                                    <td><?= $article->getContent() ?></td>
                                    <td>
                                        <form action="<?= DOMAIN . '?route=/'.'&action=select'?>" method="post">
                                            <button type="submit" class="btn btn-primary" name="edit-btn" value="<?=$article->getID()?>">Edit</button>
                                        </form>
                                        <form action="<?= DOMAIN . '?route=/'.'&action=delete'?>" method="post">
                                            <button type="submit" name="delete-btn" value="<?=$article->getID()?>" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>