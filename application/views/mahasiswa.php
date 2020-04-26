<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
    <table class="table"> 
    <tr> 
    <th>NO</th>
    <th>NAMA MAHASISWA</th>
    <th>NIM</th>
    <th>TANGGAL LAHIR</th>
    <th>JURUSAN</th>
    <th colspan="2">AKSI</th>
    </tr>
    <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) :?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mhs->nama?></td>
            <td><?php echo $mhs->nim?></td>
            <td><?php echo $mhs->tgl_lahir?></td>
            <td><?php echo $mhs->jurusan?></td>
            <td><?php echo anchor('mahasiswa/detail/'.$mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td onclick=><?php echo anchor('mahasiswa/edit/'.$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

    </table>
    </section>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('mahasiswa/tambah_aksi'); ?>
      
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control"/>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select class="form-control" name="jurusan">
                  <option <?php if ($mhs->jurusan == 'Sistem Informasi') echo 'selected'; ?>>  Sistem Informasi</option>
                  <option <?php if ($mhs->jurusan == 'Sistem Komputer') echo 'selected'; ?>>   Sistem Komputer</option>
                  <option <?php if ($mhs->jurusan == 'Manajemen Informatika') echo 'selected'; ?>>  Manajemen Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" name="foto" class="form-control"/>
            </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>