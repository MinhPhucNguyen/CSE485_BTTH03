<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-4">
            <h3 class="text-center">Article Management</h3>
        </div>
        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Article List</h4>
                    <a href="<?= DOMAIN . '?action=create'?>" class="btn btn-success float-end">Add New Article</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="fw-bolder">
                            <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Summary</td>
                                <td>Content</td>
                                <td>Category</td>
                                <td>Author</td>
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
                                    <td><?= $article->getCategory_id() ?></td>
                                    <td><?= $article->getMember_id() ?></td>
                                    <td>
                                        <form action="<?= DOMAIN . '?route=/'.'&action=select'?>" method="post">
                                            <button type="submit" class="btn btn-primary" name="edit-btn" value="<?=$article->getID()?>">Edit</button>
                                        </form>
                                        
                                        <form action="<?= DOMAIN . '?route=/'.'&action=delete'?>" method="post">
                                            <button type="submit" class="btn btn-danger" name="delete-btn" value="<?=$article->getID()?>">Delete</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>