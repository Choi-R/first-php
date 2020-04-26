<div class="content-wrapper">
<section class="content">
    <!-- <?php foreach($mahasiswa as $mhs) {?> -->
    <form action="<?php echo base_url().'mahasiswa/update';?>" method="post">
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id?>" >
            <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama?>" >
        </div>
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim?>" >
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir?>" >
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan" value="<?php echo $mhs->jurusan?>" >
                <option <?php if ($mhs->jurusan == 'Sistem Informasi') echo 'selected'; ?>>  Sistem Informasi</option>
                <option <?php if ($mhs->jurusan == 'Sistem Komputer') echo 'selected'; ?>>   Sistem Komputer</option>
                <option <?php if ($mhs->jurusan == 'Manajemen Informatika') echo 'selected'; ?>>  Manajemen Informatika</option>
            </select>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat?>" >
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $mhs->email?>" >
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp?>" >
        </div>

        <button type="reset" class="btn btn-danger"> Reset</button>
        <button type="submit" class="btn btn-primary"> Simpan</button>
    </form>
<!-- <?php }?> -->
</section></div>