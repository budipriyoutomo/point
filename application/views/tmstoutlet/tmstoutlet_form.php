

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Tmstoutlet 
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tmstoutlet </li>
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
            <label for="varchar">Outlet <?php echo form_error('outlet') ?></label>
            <input type="text" class="form-control" name="outlet" id="outlet" placeholder="Outlet" value="<?php echo $outlet; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tmstoutlet') ?>" class="btn btn-default">Cancel</a>
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