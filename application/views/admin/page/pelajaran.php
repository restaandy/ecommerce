<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
        Materi Ajar <small></small>
        </h1>
        <ol class="breadcrumb">
           <li class="active">
              <i class="fa fa-dashboard"></i> Materi Ajar
           </li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
      <div class="col-md-12">
      <legend>Jenjang Pendidikan</legend>
        
        <select class="form-control" onchange="load_tema(event)" id="jenjang">
          <option value="0">-- Pilih Jenjang --</option>
          <?php
            foreach ($jenjang as $key) {
              ?>
              <option value="<?php echo $key['id']; ?>"><?php echo $key['jenjang']; ?></option>
             <?php
            }
          ?>
        </select>
        <img id="load1" class="hide" src="<?php echo base_url() ?>aset/img/loading.gif">    
       
       <div id="loadtema" style="margin-top:20px;"></div>
      </div>

  </div>
</div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<script type="text/javascript">
  function load_tema(e){
    $('#loadtema').html('');
    $('#load1').removeClass('hide');
    var id=$(e.target).val();
    $.post("<?php echo base_url().'admin/kategori2'; ?>",{idjen:''+id},function(data){
      $('#load1').addClass('hide');
      $('#loadtema').html(data);
    });
  }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
