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
                    <h1 class="m-0">Data Gor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Gor</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Tabel Gor -->
    <button class="btn btn-success btn-sm ml-3 mt-3" data-bs-toggle="modal" data-bs-target="#add_gor"><i class="fa fa-plus "> Add</i></button>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Foto Gor</th>
                <th scope="col">Nama Gor</th>
                <th scope="col">No Rekening</th>
                <th scope="col">Alamat</th>
                <th scope="col">latitude</th>
                <th scope="col">Longtitude</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM gor");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['foto_gor'])) ? '../../img/' . $row['foto_gor'] : '../../img/lapangan.png';
                        echo "
                          <tr>
                            <td>
                            <img src='".$image."' height='30px' width='30px'>
                            </td>
                            <td>".$row['nama_gor']."</td>
                            <td>".$row['no_rek']."</td>
                            <td>".$row['alamat_gor']."</td>
                            <td>".$row['latitude']."</td>
                            <td>".$row['longtitude']."</td>
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id_gor']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id_gor']."'><i class='fa fa-trash'></i> Delete</button>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
        </tbody>
    </table>
</div>

<!-- Modal add_gor -->
<div class="modal fade" id="add_gor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Gor</h1>
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
                            <label for="no_rekening" class="form-label">No Rekening</label>
                            <input type="number" class="form-control" id="no_rekening" name="no_rekrning">
                        </div>
                        <div class="mb-3">
                            <label for="latitude">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude">
                        </div>
                        <div class="mb-3">
                            <label for="longtitude">Longtitude</label>
                            <input type="text" class="form-control" id="lingtitude" name="lingtitude">
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label fw-bold" for="foto_gor">Foto Gor</label>
                            <input class="form-control" type="file" id="foto_gor">
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

<!-- End-tabel -->

<!-- Modal edit_foto_gor -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="gor_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div> 
<!-- Modal delete_gor -->
<div class="modal fade" id="delete_gor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Gor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="fw-bold">Anda yakin ingin menghapus Gor?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>