

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Ttasklist 
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ttasklist </li>
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

        <div class="form-group">
              <label for="varchar">Outlet <?php echo form_error('outlet') ?></label>
       <select class='form-control select2' style='width: 100%;' name='outlet' id='outlet' >
       <option value="#">-None-</option>
             <?php
                  foreach ($outlet as $outletlist) {
                 ?>
                  <option <?php echo $outlet_selected == $outletlist->id ? 'selected="selected"' : '' ?>
                  value="<?php echo $outletlist->id;?>"><?php echo $outletlist->outlet ?></option>
                  <?php
                }
                ?>
     </select>
     </div>


	    <div class="form-group">
            <label for="datetime">Aktif Dari <?php echo form_error('aktifdari') ?></label>
            <input type="date" class="form-control" name="aktifdari" id="aktifdari" placeholder="Aktifdari" value="<?php echo $aktifdari; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Aktif Sampai <?php echo form_error('aktifsampai') ?></label>
            <input type="date" class="form-control" name="aktifsampai" id="aktifsampai" placeholder="Aktifsampai" value="<?php echo $aktifsampai; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ttasklist') ?>" class="btn btn-default">Cancel</a>
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