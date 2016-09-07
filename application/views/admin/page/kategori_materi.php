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
       
       <div id="loadtema" style="margin-left:20px;margin-top:10px;"></div>
       <div id="loadsubtema" style="margin-left:40px;margin-top:10px;"></div>
       <div id="halsubtema" style="margin-left:60px;margin-top:10px;"></div>
      </div>

  </div>
</div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<script type="text/javascript">
  function d(){
    $('#myModal').modal('show');
    //$('#myModal').addClass('in');
  }
  function load_tema(e){
    $('#loadtema').html('');
    $('#loadsubtema').html('');
    $('#halsubtema').html('');
    $('#load1').removeClass('hide');
    var id=$(e.target).val();
    $.post("<?php echo base_url().'admin/ajax_tema'; ?>",{idjenjang:''+id},function(data){
      $('#load1').addClass('hide');
      $('#loadtema').html(data);
    });
  }
</script>
