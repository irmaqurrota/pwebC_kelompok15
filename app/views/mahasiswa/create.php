  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/mahasiswa/simpanmahasiswa" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>Nim</label>
              <input type="text" class="form-control" placeholder="Nim Mahasiswa" name="Nim">
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="Nama_Mhs">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <input type="text" class="form-control" placeholder="Jenis Kelamin Mahasiswa" name="Jenis_Kelamin">
            </div>
            <div class="form-group">
              <label>Bidang</label>
              <input type="text" class="form-control" placeholder="Bidang" name="Program_Studi">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>


    </section>
    <!-- /.content -->