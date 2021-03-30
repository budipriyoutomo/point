

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Point Group
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Point Group </li>
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

        <div class="row" style="margin-bottom: 10px">

        </div>
        
        <form action="./Taddpointgroup/generate" method="post">
        <div class="form-group">
          <!-- <label for="varchar" name="point" id="point"><?php echo $point; ?></label> -->
          <input type="text" name="point" id="point" value="<?php echo $point; ?>" hidden/>
        </div>
        <div class="form-group">
             <label for="varchar" id="usernameid" hidden><?php echo $this->session->userdata('id'); ?></label>
             
             <label for="varchar">Task <?php echo form_error('task') ?></label>
        <select class='form-control select2' style='width: 100%;' name='task' id='task' >
        <option value="#">-None-</option>
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

<button type="submit" class="btn btn-primary">Generated</button>
      <a href="<?php echo site_url('taddpointgroup') ?>" class="btn btn-default">Cancel</a>
      </form>

			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<script>
 var pointnode
   $(document).ready(function () {
    pointnode = document.getElementById("point");
    $('#task').on('select2:select', function(e){
        var data = e.params.data.text;
            akhir = data.search("Point");
            awal = data.search("Get");
            i = data.slice(awal+3,akhir);
            pointnode.innerHTML = i.trim();   
            pointnode.value= i.trim();  
    });
    
   });
</script>