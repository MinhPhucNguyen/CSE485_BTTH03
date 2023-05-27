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
                    <h4 class="d-inline-block">Add New Article</h4>
                    <a href="?route=article" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Summary</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Content</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group mb-4">
                            <label name="category" for="">Category</label>
                            <select class="form-control ">
                                <?php foreach ($categories as $category) {
                                ?>
                                    <option value="<?= $category->getID()?>"><?=$category->getName()?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Author</label>
                            <select name="author" class="form-control ">
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <button class="btn  btn-success">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>