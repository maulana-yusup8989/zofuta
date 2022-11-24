<?php include 'template/header.php' ?>
<?php include 'template/navbar.php' ?>
<?php include 'template/sidebar.php' ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Payment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Payment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Tabel Gor -->
    <button class="btn btn-success btn-sm ml-3 mt-3"><i class="fa fa-plus "> Add</i></button>
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
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Amin</th>
                <td>KING FUTSAL</td>
                <td>1 (Satu)</td>
                <td>07:00</td>
                <td>08:00</td>
                <td>22-11-2022</td>
                <td><img src="" alt="Bukti_pembayaran"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-print">Print</i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Yana</th>
                <td>KING FUTSAL</td>
                <td>2 (Dua)</td>
                <td>08:00</td>
                <td>09:00</td>
                <td>22-11-2022</td>
                <td><img src="" alt="Bukti_pembayaran"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-print">Print</i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Jamal</th>
                <td>KING FUTSAL</td>
                <td>1 (Satu)</td>
                <td>08:00</td>
                <td>09:00</td>
                <td>22-11-2022</td>
                <td><img src="" alt="Bukti_pembayaran"></td>
                <td> <button class="btn btn-primary btn-sm mr-2"><i class="fa fa-print">Print</i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include 'template/footer.php' ?>