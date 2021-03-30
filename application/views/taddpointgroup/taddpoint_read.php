

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Taddpoint 
        <small>Read Data</small>
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
	
        
        <table class="table">
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Tgladd</td><td><?php echo $tgladd; ?></td></tr>
	    <tr><td>Task</td><td><?php echo $task; ?></td></tr>
	    <tr><td>Point</td><td><?php echo $point; ?></td></tr>
	    <tr><td>User</td><td><?php echo $user; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('taddpoint') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>

	</div>
            <!-- /.box-body -->    
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->        
	  </div>