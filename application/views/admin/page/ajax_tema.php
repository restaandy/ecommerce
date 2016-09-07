<legend>Tema</legend>
<div class="row">
<div class="col-md-11">

<select class="form-control" id="tema" onchange="load_subtema(event)">
	<option value="0">-- Pilih Tema --</option>
	<?php
	foreach ($tema as $key) {
		?>
		<option value="<?php echo $key['id']; ?>"><?php echo $key['tema']; ?></option>
		<?php
	}
	?>
</select>
</div>

<div class="col-md-1">
<button onclick="tambahtema()" class="btn btn-xs btn-primary">Tambah</button>
<button onclick="edittema()" class="btn btn-xs btn-warning">Edit</button>
<button onclick="hapustema()" class="btn btn-xs btn-danger">Hapus</button>

</div>
</div>

<form method="POST" style="display:none;" id="formtema" action="<?php echo base_url().'admin/insert_tema'; ?>">
<div class="form-group">
<label>Tambah Tema</label>
<input type="text" value="<?php echo $idjenjang; ?>" class="hide" id="id_jenjang" name='id_jenjang'>
<input type="text" name="tema" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</div>
</form>

<div class="modal fade" id="edittema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Tema</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'admin/edit_tema'; ?>">
         <div class="form-group">
<label>Edit Tema</label>
<input type="text" class="hide" id="id_tema" name='id_tema'>
<input type="text" name="tema" id="tema" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</div>  	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapustema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Tema</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'admin/hapus_tema'; ?>">
         <div class="form-group">
<input type="text" class="hide" id="id_tema_hps" name='id_tema_hps'>
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Hapus</button>
</div>  	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function load_subtema(e){
		$('#loadsubtema').html('');
    $('#halsubtema').html('');
	    $('#load1').removeClass('hide');
	    var id=$(e.target).val();
	    var idjenjang=$('#id_jenjang').val();
      if(id!=0){
	    $.post("<?php echo base_url().'admin/ajax_subtema'; ?>",{idtema:''+id,idjenjang:idjenjang},function(data){
	      $('#load1').addClass('hide');
	      $('#loadsubtema').html(data);
	    });
      }else{
        $('#loadsubtema').html('');
         $('#halsubtema').html('');
         $('#load1').addClass('hide');
      }
	}
	function tambahtema(){
		$('#formtema').toggle('fast');
	}
	function edittema(){
		if($('#tema').val()!=0){  
      $('#edittema #id_tema').val($('#tema').val());
	    $('#edittema').modal('show');	
	  }
  }
	function hapustema(){
    if($('#tema').val()!=0){
		 $('#hapustema #id_tema_hps').val($('#tema').val());
		 $('#hapustema').modal('show');
    }
	}
</script>	