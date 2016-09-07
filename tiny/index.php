<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/tinymce.min.js"></script>
  <script>
tinymce.init({
    selector: "textarea",theme: "modern",width: 680,height: 300,
    plugins: [
         "advlist codesample autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor code responsivefilemanager"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | codesample code | image media | forecolor backcolor  | print preview code",
   image_advtab: true ,
   
   external_filemanager_path:"http://localhost/tiny/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "http://localhost/tiny/filemanager/plugin.min.js"}
 });

$(document).on('focusin', function(e) {
  if ($(e.target).closest(".mce-window").length) {
    e.stopImmediatePropagation();
  }
});

  </script>
<form method="post" action="somepage">
        <textarea name="content" style="width:100%"></textarea>
</form>




</body>
</html>