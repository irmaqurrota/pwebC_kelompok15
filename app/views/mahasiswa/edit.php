  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Mahasiswa</h1>
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
        <form role="form" action="<?= base_url; ?>/mahasiswa/updatemahasiswa" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['mahasiswa']['id']; ?>">
          <div class="card-body">
            <div class="form-group">
              <label>ID</label>
              <input type="text" class="form-control" placeholder="Masukkan Nim Mahasiswa..." name="Nim" value="<?= $data['mahasiswa']['Nim']; ?>">
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa..." name="Nama_Mhs" value="<?= $data['mahasiswa']['Nama_Mhs']; ?>">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <input type="text" class="form-control" placeholder="Masukkan Jenis Kelamin Mahasiswa..." name="Jenis_Kelamin" value="<?= $data['mahasiswa']['Jenis_Kelamin']; ?>">
            </div>
            <div class="form-group">
              <label>Program Studi</label>
              <input type="text" class="form-control" placeholder="Masukkan Program Studi Mahasiswa..." name="Program_Studi" value="<?= $data['mahasiswa']['Program_Studi']; ?>">
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