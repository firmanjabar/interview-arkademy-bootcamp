<?php
	include "php/show-data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./index.html"><img class="logo" src="./assets/img/logo.png" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#addData">
                        ADD
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container content my-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cashier</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $res) :?>
                <tr>
                    <th scope="row"><?= $res['id']?></th>
                    <td><?= $res['id_cashier']?></td>
                    <td><?= $res['name']?></td>
                    <td><?= $res['id_category']?></td>
                    <td>Rp. <?= $res['price']?></td>
                    <td>
                        <span data-toggle="modal" data-target="#editData" type="button" class="m-1"
                            style="font-size: 20px; color: rgb(59, 160, 255);">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span data-toggle="modal" data-target="#deleteData" type="button" class="m-1"
                            style="font-size: 20px; color: rgb(255, 57, 57);">
                            <i class="fas fa-trash"></i>
                        </span>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <!-- MODAL EDIT -->
    <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="editDataTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataTitle">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nameCashier">Name</label>
                            <input type="text" class="form-control" id="nameCashier" placeholder="Ex. Raisa Andriana" />
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Product</label>
                            <input type="text" class="form-control" id="nameProduct" placeholder="Ex. Cake" />
                        </div>
                        <div class="form-group">
                            <label for="nameCategory">Category</label>
                            <input type="text" class="form-control" id="nameCategory" placeholder="Ex. Food" />
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Ex. Rp. 15.000" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Edit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL ADD -->
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataTitle">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nameCashier">Name</label>
                            <input type="text" class="form-control" id="nameCashier" placeholder="Ex. Raisa Andriana" />
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Product</label>
                            <input type="text" class="form-control" id="nameProduct" placeholder="Ex. Cake" />
                        </div>
                        <div class="form-group">
                            <label for="nameCategory">Category</label>
                            <input type="text" class="form-control" id="nameCategory" placeholder="Ex. Food" />
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Ex. Rp. 15.000" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">ADD</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DELETE -->
    <div class="modal fade" id="deleteData" tabindex="-1" role="dialog" aria-labelledby="deleteDataTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDataTitle">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center">
                    <h5 class=" modal-title">Data Raisa Andriana ID#1</h5>
                    <span class="mb-3" style="font-size: 200px; color: rgb(44, 255, 79);">
                        <i class="fas fa-check-circle"></i>
                    </span>
                    <h5 class="modal-title">Berhasil Dihapus!</h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>