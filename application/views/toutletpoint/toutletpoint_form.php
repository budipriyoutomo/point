

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Toutletpoint 
        <small>Update/Create Data</small>
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
	
		
        
        <form action="<?php echo $action; ?>" method="post">
	    
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
              <label for="varchar">Bulan <?php echo form_error('bulan') ?></label>
       <select class='form-control select2' style='width: 100%;' name='bulan' id='bulan' >
       <option value="#">-None-</option>
       <option value="1">Januari</option>
       <option value="2">Februari</option>
       <option value="3">Maret</option>
       <option value="4">April</option>
       <option value="5">Mei</option>
       <option value="6">Juni</option>
       <option value="7">Juli</option>
       <option value="8">Agustus</option>
       <option value="9">September</option>
       <option value="10">Oktober</option>
       <option value="11">November</option>
       <option value="12">Desember</option>      
        </select>
     </div>

	      <div class="form-group">
              <label for="varchar">Tahun <?php echo form_error('tahun') ?></label>
       <select class='form-control select2' style='width: 100%;' name='tahun' id='tahun' >
       <option value="#">-None-</option>
             <?php
                  for($i=2019;$i<2039;$i++) {
                 ?>
                  <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                  <?php
                }
                ?>
        </select>
      </div>

	    <div class="form-group">
            <label for="int">Total Point <?php echo form_error('totalpoint') ?></label>
            <input type="text" class="form-control" name="totalpoint" id="totalpoint" placeholder="Totalpoint" value="<?php echo $totalpoint; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Used Point <?php echo form_error('usedpoint') ?></label>
            <input type="text" class="form-control" name="usedpoint" id="usedpoint" placeholder="Usedpoint" value="<?php echo $usedpoint; ?>" readonly/>
        </div>
        
	    <div class="form-group">
            <label for="int">Sisa Point <?php echo form_error('sisapoint') ?></label>
            <input type="text" class="form-control" name="sisapoint" id="sisapoint" placeholder="Sisapoint" value="<?php echo $sisapoint; ?>" readonly/>
        </div>


	    <div class="form-group">
            <label for="tinyint">Aktif <?php echo form_error('aktif') ?></label>
            <input type="text" class="form-control" name="aktif" id="aktif" placeholder="Aktif" value="<?php echo $aktif; ?>" />
        </div>
	    
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('toutletpoint') ?>" class="btn btn-default">Cancel</a>
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