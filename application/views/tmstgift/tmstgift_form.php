

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Tmstgift 
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tmstgift </li>
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
            <label for="varchar">Namagift <?php echo form_error('namagift') ?></label>
            <input type="text" class="form-control" name="namagift" id="namagift" placeholder="Namagift" value="<?php echo $namagift; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Point <?php echo form_error('point') ?></label>
            <input type="text" class="form-control" name="point" id="point" placeholder="Point" value="<?php echo $point; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Productimage <?php echo form_error('productimage') ?></label>
            <input type="text" class="form-control" name="productimage" id="productimage" placeholder="Productimage" value="<?php echo $productimage; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tmstgift') ?>" class="btn btn-default">Cancel</a>
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