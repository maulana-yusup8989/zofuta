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
    <button class="btn btn-success btn-sm ml-3 mt-3" data-bs-toggle="modal" data-bs-target="#add_lapangan"><i class="fa fa-plus "> Add</i></button>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nama Gor</th>
                <th scope="col">Nama Lapangan</th>
                <th scope="col">Keterangan Lapangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Foto Lapangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><img src="" alt="Foto_lapangan"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-edit">Edit</i></button>
                    <button class="btn btn-danger btn-sm mr-2" data-bs-toggle="modal" data-bs-target="#delete_lapangan"><i class="fa fa-trash"> Delete</i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include 'template/footer.php' ?>

<!-- Modal add_Lapangan -->
<div class="modal fade" id="add_lapangan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Lapangan</h1>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="mb-3">
                            <label for="nama_gor" class="form-label">Nama Gor</label>
                            <input type="text" class="form-control" id="nama_gor" name="nama_gor">
                        </div>
                        <div class="mb-3">
                            <label for="nama_lapangan" class="form-label">Nama Lapangan</label>
                            <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Keterangan Lapangan</label>
                            <input type="text" class="form-control" id="ket_lapangan" name="ket_lapangan">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga_sewa" name="harga_sewa">
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label fw-bold" for="foto_lapangan">Foto Lapangan
                                <input class="form-control" type="file" id="foto_lapangan" name="foto_lapangan">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- End-Modal add_lapangan -->
<!-- Modal delete_lapangan -->
<div class="modal fade" id="delete_lapangan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Lapangan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="fw-bold">Anda yakin ingin menghapus lapangan?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>