<table class="table table-striped">
	<tr>
		<td>No</td>
		<td>Tema</td>
		<td>Sub Tema</td>
		<td>Hal Isi Subtema</td>
		<td>Aksi Data</td>
	</tr>
	<?php
	$x=1;$idtema=0;$idsubtema=0;
	foreach ($kategori as $key) {
	  ?>
	   <tr>
	   	<td><?php if($idtema!=$key['id_tema']){ echo $x; $x++;}?></td>
		<td><?php if($idtema!=$key['id_tema']){echo $key['tema']; $idtema=$key['id_tema'];} ?></td>
		<td><?php if($idsubtema!=$key['id_subtema']){echo $key['subtema']; $idsubtema=$key['id_subtema'];} ?></td>
		<td><?php echo $key['nama']; ?></td>
		<td>
		<?php	
		 if($key['nama']!=''){
		 ?>
		  <a href="#" data-sub="<?php echo $key['id_subtema']; ?>" data-id="<?php echo $key['id_hal_subtema']; ?>" onclick="edit_hal_subtema(event);">Edit</a>
	    <?php
	    }
	    ?>
	   </tr>
	  <?php
	}
	?>
</table>
  <script>
function edit_hal_subtema(e){
  $('#hal_subtema id_hal_subtema').val($(e.target).attr('data-id'));
   $.post('<?php echo base_url(); ?>admin/load_pelajaran',{id:$(e.target).attr('data-id'),sub:$(e.target).attr('data-sub')},function(data){
     $('#hal_subtema .modal-body').html(""+data);
     $('#hal_subtema').modal('show');   
   });

}
  </script>

<div class="modal fade" id="hal_subtema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pelajaran</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      	
      </div>
    </div>
  </div>
</div>  