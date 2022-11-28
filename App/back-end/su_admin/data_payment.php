<?php include 'includes/session.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/navbar.php' ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php include 'template/sidebar.php' ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Payment Report</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../admin/index.php" class="nav-link">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Tabel Gor -->
    <!-- <button class="btn btn-success btn-sm ml-3 mt-3" data-bs-toggle="modal" data-bs-target="#add_payment"><i class="fa fa-plus "> Add</i></button> -->
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nama User</th>
                <th scope="col">Nama Gor</th>
                <th scope="col">Nama Lapangan</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Bukti Pembayaran</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><img src="../../img/king-futsal.png" style="width: 20px; height: 20px;" alt="Bukti_pembayaran">
                    <button class="btn btn-primary btn-sm ml-3" data-bs-toggle="modal" data-bs-target="#view"><i class="fa fa-search"> View</i></button>
                </td>
                <td>@mdo</td>
                <td><button class="btn btn-success btn-sm">Terima</button>
                    <button class="btn btn-danger btn-sm">Tolak</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include 'template/footer.php' ?>

<div class="modal fade" id="add_payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Payment</h1>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="mb-3">
                            <label for="nama_gor" class="form-label">Nama User</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user">
                        </div>
                        <div class="mb-3">
                            <label for="nama_lapangan" class="form-label">Nama Gor</label>
                            <input type="text" class="form-control" id="nama_gor" name="nama_gor">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Nama Lapangan</label>
                            <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Jam Mulai</label>
                            <input type="text" class="form-control" id="jam_mulai" name="jam_mulai">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Jam Selesai</label>
                            <input type="text" class="form-control" id="jam_selesai" name="jam_selesai">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label fw-bold" for="foto_lapangan">Bukti Pembayaran</label>
                            <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran">
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label fw-bold" for="foto_lapangan">s
                                <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran">
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


<!-- Modal add_gor -->
<div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">View</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <img src="../../img/king-futsal.png" style="width: 400px; height: 200px;" alt="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>