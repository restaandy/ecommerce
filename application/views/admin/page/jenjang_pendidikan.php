<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
        Jenjang Pendidikan <small></small>
        </h1>
        <ol class="breadcrumb">
           <li class="active">
              <i class="fa fa-dashboard"></i> Jenjang Pendidikan
           </li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
      <div class="col-md-6"> 
      <legend>Form Jenjang Pendidikan</legend>
        <form method="POST" action="<?php echo base_url().'admin/insert_jenjang'; ?>">
          <div class="form-group">
           <label>Tambah Jenjang</label>
           <input type="text" class="form-control" name="jenjang">
          </div>
          
          <div class="form-group">
           <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
          </div> 
        
              
        </div>
        <div class="col-md-6">
        </form>
        <legend>Daftar Jenjang Pendidikan</legend>
            <table class="table table-striped">
          <tr>
            <td>No</td>
            <td>Jenjang</td>
            <td>Keterangan</td>
            <td>Aksi</td>
          </tr>
          <?php
          $x=1;
          foreach ($jenjang as $key) {
            ?>
            <tr>
              <td><?php echo $x; ?></td>
              <td><?php echo $key['jenjang']; ?></td>
              <td><?php echo $key['keterangan']; ?></td>
              <td><a href="<?php echo base_url().'admin/delete_jenjang/'.$key['id'].'/keys'; ?>">Delete</a> | <a href="">Edit</a> | <a href="#" data-gambar="<?php echo $key['foto']; ?>" data-id="<?php echo $key['id']; ?>" onclick="change_gambar(event)">Gambar</a></td>
            </tr>
            <?php
            $x++;
          }
          ?>
        </table>
        </div>
    </div>
  </div>
</div>
</div>
<!-- Button trigger modal -->
<button onclick="d()">click</button>
<!-- Modal -->
<script type="text/javascript">
  function d(){
    $('#myModal').modal('show');
    //$('#myModal').addClass('in');
  }
  function change_gambar(e){
    $('#gambarupload #gambaruploadan').attr('src','<?php echo base_url(); ?>aset/img/'+$(e.target).attr('data-gambar'));
    $('#gambarupload #id_gambar').val($(e.target).attr('data-id'));
    $('#gambarupload #nama_gambar').val($(e.target).attr('data-gambar'));
    //alert($('#gambarupload #nama_gambar').val());
    $('#gambarupload').modal('show');
  }
</script>
<div class="modal fade" id="gambarupload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <img src="" id="gambaruploadan" width="500" height="500">
        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/upload">
            <input type="text" name="id_jenjang" id="id_gambar" class="hide">
            <input type="text" name="nama_gambar" id="nama_gambar" class="hide">
            <input type="file" name="gambar" accept="image/*">
             <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
