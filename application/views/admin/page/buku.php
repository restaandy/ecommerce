<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
      <legend>Buku referensi</legend>

      <div class="col-md-4">
      <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/postbuku">
      	<div class="form-group">
      	<label>Jenjang</label>
      	<select class="form-control" name="id_jenjang" required>
      		<?php
      		foreach ($jenjang as $key) {
      		 ?>
      		 <option value="<?php echo $key['id']; ?>"><?php echo $key['jenjang']; ?></option>
      		 <?php
      		}
      		?>
      	</select>
      	<div class="form-data">
      	<label>Kategori</label>
      	<select class="form-control" name="kategori" required>
      		<option value="">-- Pilih Kategori --</option>
      		<option value="guru">Guru</option>
      		<option value="siswa">Siswa</option>
      	</select>
      	</div>
        <div class="form-group">
          <label>Judul Buku</label>
          <input type="text" name="judul" class="form-control" required>
        </div>
      	<div class="form-group">
      	<label>Cover Buku</label>
      		<input type="file" name="cover" accept="image/*" required>
      	</div>
      	<div class="form-group">
      	<label>File Buku</label>
      		<input type="file" name="buku" accept=".pdf" required>
      	</div>
      	<div class="form-group">
      	<button type="submit" name="simpan" value="yes" class="btn btn-primary">Simpan</button>
      	</div>
      </form>
      </div>

      </div>
      <table class="table table-striped">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Cover</th>
          <th>view / Edit /Hapus</th>
        </tr>
        <?php
        $x=1;
        foreach ($buku as $key) {
          ?>
          <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo $key['nama_buku']; ?></td>
            <td><?php echo $key['kategori']; ?></td>
            <td><img src="<?php echo base_url().'aset/cover/'.$key['cover_buku']; ?>" width="100" height="120"></a></td>
            <td>
              <a href="#" id="<?php echo $key['id']; ?>">Edit</a>
              ||
              <a href="#" id="<?php echo $key['id']; ?>">Hapus</a>
            </td>
          </tr>
          <?php
          $x++;
        }
        ?>
      </table>
    </div>
  </div>
</div>      