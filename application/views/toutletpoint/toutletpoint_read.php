

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Toutletpoint 
        <small>Read Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Toutletpoint </li>
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
	    <tr><td>Outlet</td><td><?php echo $outlet; ?></td></tr>
	    <tr><td>Totalpoint</td><td><?php echo $totalpoint; ?></td></tr>
	    <tr><td>Bulan</td><td><?php echo $bulan; ?></td></tr>
	    <tr><td>Tahun</td><td><?php echo $tahun; ?></td></tr>
	    <tr><td>Aktif</td><td><?php echo $aktif; ?></td></tr>
	    <tr><td>Usedpoint</td><td><?php echo $usedpoint; ?></td></tr>
	    <tr><td>Sisapoint</td><td><?php echo $sisapoint; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('toutletpoint') ?>" class="btn btn-default">Cancel</a></td></tr>
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