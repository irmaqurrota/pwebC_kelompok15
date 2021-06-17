  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Tutor</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <?php
          Flasher::Message();
          ?>
        </div>
      </div>
      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <div class="btn-group float-right"><a href="<?= base_url; ?>/mahasiswa/tambah" class="btn float-right btn btn-primary">Tambah Tutor</a></div>
        </div>

      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>ID</th>
              <th>Nama Tutor</th>
              <th>Jenis Kelamin</th>
              <th>Bidang</th>
              <th style="width: 150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['mahasiswa'] as $row) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row['Nim']; ?></td>
                <td><?= $row['Nama_Mhs']; ?></td>
                <td><?= $row['Jenis_Kelamin']; ?></td>
                <td><?= $row['Program_Studi']; ?></td>
                <td>
                  <a href="<?= base_url; ?>/mahasiswa/edit/<?= $row['Nim'] ?>" class="btn btn-success btn-sm">Edit</a> <a href="<?= base_url; ?>/mahasiswa/hapus/<?= $row['Nim'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');">Hapus</a>
                </td>
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
  <!-- /.card-body -->
  <!-- /.card-footer-->
  </div>
  <!-- /.card -->

  </section>