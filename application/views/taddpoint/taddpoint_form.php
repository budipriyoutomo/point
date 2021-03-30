

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Taddpoint
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Taddpoint </li>
      </ol>
    </section>
	<!-- Main content -->
    <section class="content">
	      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



        <form action="<?php echo $action; ?>" method="post">
	       <div class="form-group">
              <label for="varchar">NIK <?php echo form_error('nik') ?></label>
       <select class='form-control select2' style='width: 100%;' name='nik' id='nik' >
             <?php
                  foreach ($nik as $niklist) {
                 ?>
                  <option <?php echo $nik_selected == $niklist->nik ? 'selected="selected"' : '' ?>
                  value="<?php echo $niklist->nik;?>"><?php echo $niklist->nik .' | '. $niklist->nama ?></option>
                  <?php
                }
                ?>
     </select>
     </div>

	    <div class="form-group">
            <label for="date">Tgladd <?php echo form_error('tgladd') ?></label>
            <input type="text" class="form-control" name="tgladd" id="tgladd" placeholder="Tgladd" value="<?php echo $tgladd; ?>" readonly/>
        </div>


        <div class="form-group">
             <label for="varchar">Task <?php echo form_error('task') ?></label>
      <select class='form-control select2' style='width: 100%;' name='task' id='task' >
            <?php
                 foreach ($task as $tasklist) {
                ?>
                 <option <?php echo $task_selected == $tasklist->id ? 'selected="selected"' : '' ?>
                 value="<?php echo $tasklist->id;?>"><?php echo $tasklist->taskname .' | Get '.  $tasklist->point .' Point'?></option>
                 <?php
               }
               ?>
    </select>
    </div>

	    <div class="form-group">
            <label for="int">Point <?php echo form_error('point') ?></label>
            <input type="text" class="form-control" name="point" id="point" placeholder="Point" value="<?php echo $point; ?>" readonly/>
        </div>
	    <div class="form-group">
            <label for="int">User <?php echo form_error('user') ?></label>
            <input type="text" class="form-control" name="user" id="user" placeholder="User" value="<?php echo $user; ?>" readonly/>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('taddpoint') ?>" class="btn btn-default">Cancel</a>
	</form>


			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  </div>
     
<script>
 var pointnode
   $(document).ready(function () {
    pointnode = document.getElementById("point");
    $('#task').on('select2:select', function(e){
        var data = e.params.data.text;
            akhir = data.search("Point");
            awal = data.search("Get");
            i = data.slice(awal+3,akhir);
            pointnode.value = i.trim();   
    });
    
   });
</script>