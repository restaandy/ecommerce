<legend>Hal Sub Tema</legend>

<div class="row">
<div class="col-md-11">
<select class="form-control" id="halsubteman" onchange="">
	<option value="0">-- Pilih Hal SubTema --</option>
	<?php
	foreach ($hal as $key) {
		?>
		<option value="<?php echo $key['id']; ?>"><?php echo $key['nama']; ?></option>
		<?php
	}
	?>
</select>
</div>
<div class="col-md-1">
<button onclick="tambahhalsubtema()" class="btn btn-xs btn-primary">Tambah</button>
<button onclick="edithalsubtema()" class="btn btn-xs btn-warning">Edit</button>
<button onclick="hapushalsubtema()" class="btn btn-xs btn-danger">Hapus</button>
</div>
</div>

<form method="POST" style="display:none;" id="formhalsubtema" action="<?php echo base_url().'admin/insert_halsubtema'; ?>">
<div class="form-group">
<label>Tambah SubTema</label>
<input type="text" class="hide" value="<?php echo $idtema; ?>" name="idtema">
<input type="text" class="hide" value="<?php echo $idsubtema; ?>" name="idsubtema">
<input type="text" class="hide" value="<?php echo $idjenjang; ?>" name="idjenjang">
<input type="text" name="halsubtema" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</div>
</form>

<div class="modal fade" id="hapushalsubtema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus SubTema</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'admin/hapus_halsubtema'; ?>">
         <div class="form-group">
<input type="text" class="hide" id="id_halsubtema_hps" name='id_halsubtema_hps'>
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

<div class="modal fade" id="edithalsubtema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit SubTema</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'admin/edit_halsubtema'; ?>">
         <div class="form-group">
<label>Edit Tema</label>
<input type="text" class="hide" id="id_halsubtemaa" name='id_halsubtema'>
<input type="text" name="halsubtema" id="" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Edit</button>
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
	function tambahhalsubtema(){
		$('#formhalsubtema').toggle('fast');
	}
	function edithalsubtema(){
		if($('#halsubteman').val()!=0){
		$('#edithalsubtema #id_halsubtemaa').val($('#halsubteman').val());
		//alert($('#edithalsubtema #id_halsubtemaa').val());
	    $('#edithalsubtema').modal('show');
	    }	
	}
	function hapushalsubtema(){
		if($('#halsubteman').val()!=0){
		$('#hapushalsubtema #id_halsubtema_hps').val($('#halsubteman').val());
		//alert($('#hapushalsubtema #id_halsubtema_hps').val());
		$('#hapushalsubtema').modal('show');
	  }
	}
</script>	