
<script src="<?php echo base_url(); ?>tiny/js/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: ".tinyarea",theme: "modern",width: 870,height: 300,
    plugins: [
         "advlist codesample autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| link unlink anchor | codesample code | image media | forecolor backcolor  | print preview code",
   image_advtab: true ,
   
   external_filemanager_path:"http://localhost/belajarinteraktif/tiny/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "http://localhost/belajarinteraktif/tiny/filemanager/plugin.min.js"}
 });

$(document).on('focusin', function(e) {
  if ($(e.target).closest(".mce-window").length) {
    e.stopImmediatePropagation();
  }
});
</script>
<form method="POST" action="<?php echo base_url(); ?>admin/edit_hal_subtema">
<div class="form-group">
<label>KBM</label>
<input type="text" class="hide" id="id_hal_subtema" value="<?php echo $id; ?>" name="id_hal_subtema">
<textarea class="tinyarea" name="kbm" id="isi"><?php echo $kbm; ?></textarea>
</div>
<div class="form-group">
<label>Kompetensi</label>
<textarea class="tinyarea" name="kompetensi"><?php echo $kompetensi; ?></textarea>
</div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</div>    
</form>