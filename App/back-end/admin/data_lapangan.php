<?php include 'template/header.php' ?>
<?php include 'template/navbar.php' ?>
<?php include 'template/sidebar.php' ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Lapangan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Lapangan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- tabel lapangan -->
    <button class="btn btn-success btn-sm ml-3 mt-3"><i class="fa fa-plus "> Add</i></button>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nama Gor</th>
                <th scope="col">Nama Lapangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Keterangan Lapangan</th>
                <th scope="col">Foto Lapangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">KING FUTSAL</th>
                <td>1 (SATU)</td>
                <td>120</td>
                <td>Sintesis</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">KING FUTSAL</th>
                <td>2 (DUA)</td>
                <td>130</td>
                <td>Karet</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">KING FUTSAL</th>
                <td>3 (TIGA)</td>
                <td>120</td>
                <td>Sintesis</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash">Delete</i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include 'template/footer.php' ?>