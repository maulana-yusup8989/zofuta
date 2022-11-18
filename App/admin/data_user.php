<?php include '../template/header.php' ?>
<?php include '../template/navbar.php' ?>
<?php include '../template/sidebar.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- tabel user -->
    <button class="btn btn-success btn-sm ml-3 mt-3"><i class="fa fa-plus "> Add</i></button>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Nama User</th>
                <th scope="col">Nomor Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
        </tbody>
    </table>




</div>
<?php include '../template/footer.php' ?>