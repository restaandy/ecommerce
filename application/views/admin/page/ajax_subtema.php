<legend>Sub Tema</legend>

<div class="row">
<div class="col-md-11">
<select class="form-control" id="subtema" onchange="load_hal_subtema(event)">
	<option value="0">-- Pilih SubTema --</option>
	<?php
	foreach ($subtema as $key) {
		?>
		<option value="<?php echo $key['id']; ?>"><?php echo $key['subtema']; ?></option>
		<?php
	}
	?>
</select>
</div>
<div class="col-md-1">
<button onclick="tambahsubtema()" class="btn btn-xs btn-primary">Tambah</button>
<button onclick="editsubtema()" class="btn btn-xs btn-warning">Edit</button>
<button onclick="hapussubtema()" class="btn btn-xs btn-danger">Hapus</button>
</div>
</div>

<form method="POST" style="display:none;" id="formsubtema" action="<?php echo base_url().'admin/insert_subtema'; ?>">
<div class="form-group">
<label>Tambah SubTema</label>
<input type="text" class="hide" value="<?php echo $idtema; ?>" name="idtema">
<input type="text" class="hide" value="<?php echo $idjenjang; ?>" name="idjenjang">
<input type="text" name="subtema" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</div>
</form>

<div class="modal fade" id="hapussubtema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus SubTema</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'admin/hapus_subtema'; ?>">
         <div class="form-group">
<input type="text" class="hide" id="id_subtema_hps" name='id_subtema_hps'>
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

<div class="modal fade" id="editsubtema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit SubTema</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'admin/edit_subtema'; ?>">
         <div class="form-group">
<label>Edit Tema</label>
<input type="text" class="hide" id="id_subtema" name='id_subtema'>
<input type="text" name="subtema" id="subtema" class="form-control">
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
<script type="text/javascript">
	function load_hal_subtema(e){
		
		$('#halsubtema').html('');
	    $('#load1').removeClass('hide');
	    var idsubtema=$(e.target).val();
	    var idtema=$("#tema").val();
	    var idjenjang=$("#jenjang").val();
	    if(idsubtema!=0){
	    $.post("<?php echo base_url().'admin/ajax_hal_subtema'; ?>",{idsubtema:''+idsubtema,idtema:''+idtema,idjenjang:''+idjenjang},function(data){
	      $('#load1').addClass('hide');
	      $('#halsubtema').html(data);
	    });
	    }else{
	    	$('#load1').addClass('hide');
	    	$('#halsubtema').html('');
	    }
		
	}
	function tambahsubtema(){
		$('#formsubtema').toggle('fast');
	}
	function editsubtema(){
		if($('#subtema').val()!=0){
		$('#editsubtema #id_subtema').val($('#subtema').val());
		//alert($('#editsubtema #id_subtema').val());
	    $('#editsubtema').modal('show');
	    }	
	}
	function hapussubtema(){
		if($('#subtema').val()!=0){
		$('#hapussubtema #id_subtema_hps').val($('#subtema').val());
		//alert($('#hapussubtema #id_subtema_hps').val());
		$('#hapussubtema').modal('show');
	    }
	}
</script>	