
<form method="POST"  enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/save_pelajaran">
 <div class="form-group">
  <label>Nama Materi</label>	
  <input type="hidden" name="id_hal_subtema" value="<?php echo $id; ?>">
  <input type="hidden" name="id_subtema" value="<?php echo $sub; ?>">
  <input type="text" name="materi" class="form-control">
 </div>
 <div class="form-group">
    <label>File Materi</label>
      	<input type="file" name="filemateri" accept=".pdf" required>
  </div>
  <div class="form-group">
  	<button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
  </div>
</form>
<table class="table table-striped">
<tr>
	<th>No</th>
	<th>Nama Materi</th>
	<th>View</th>
</tr>
<?php
$x=1;
foreach ($materi as $key) {
	?>
	<tr>
	<th><?php echo $x; ?></th>
	<th><?php echo $key['materi']; ?></th>
	<th><?php echo $key['link_file']; ?></th>
</tr>
	<?php
	$x++;
}
?>
</table>