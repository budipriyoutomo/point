

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
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Add Point <?php echo form_error('tgladd') ?></label>
            <input type="text" class="form-control" name="tgladd" id="tgladd" placeholder="Tgladd" value="<?php echo $tgladd; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Task <?php echo form_error('task') ?></label>
            <input type="text" class="form-control" name="task" id="task" placeholder="Task" value="<?php echo $task; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Point <?php echo form_error('point') ?></label>
            <input type="text" class="form-control" name="point" id="point" placeholder="Point" value="<?php echo $point; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">User <?php echo form_error('user') ?></label>
            <input type="text" class="form-control" name="user" id="user" placeholder="User" value="<?php echo $user; ?>" />
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