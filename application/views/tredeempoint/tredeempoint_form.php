

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Tredeempoint 
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tredeempoint </li>
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
        <?php if($this->session->userdata('role') == 'Staff'){
          ?>
	    <div class="form-group">
            <input type="hidden" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <!--<label for="date"> Tanggal Redeem <?php echo form_error('tglredeem') ?></label>-->
            <input type="hidden" class="form-control" name="tglredeem" id="tglredeem" placeholder="Tglredeem" value="<?php echo $tglredeem; ?>"  />
        </div>
        <!--
	    <div class="form-group">
            <label for="int">Idgift <?php echo form_error('idgift') ?></label>
            <input type="text" class="form-control" name="idgift" id="idgift" placeholder="Idgift" value="<?php echo $idgift; ?>" />
        </div>
        -->

        <?php } else {
          ?>
          <div class="form-group">
            <label for="varchar">NIK <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="date"> Tanggal Redeem <?php echo form_error('tglredeem') ?></label>
            <input type="text" class="form-control" name="tglredeem" id="tglredeem" placeholder="Tglredeem" value="<?php echo $tglredeem; ?>"  />
        </div>
        <?php }?>

        <div class="form-group">
              <label for="varchar">Gift <?php echo form_error('idgift') ?></label>
        <select class='form-control select2' style='width: 100%;' name='idgift' id='idgift' >
             <?php
                  foreach ($idgift as $gift) {
                 ?>
                  <option <?php echo $gift_selected == $gift->id ? 'selected="selected"' : '' ?>
                  value="<?php echo $gift->id;?>"><?php echo $gift->namagift ?></option>
                  <?php
                }
                ?>
        </select>
        </div>
        <?php if($this->session->userdata('role')!= 'Staff'){?>
        <div class="form-group">
        <label for="enum">Status <?php echo form_error('status') ?></label>
  			<select class="form-control select2" style="width: 100%;" name="status" id="status" >
                    <option id =1>Waiting</option>
                    <option id =2>Accepted</option>
                    <option id =3>Rejected</option>

                  </select>
          </div>
        <?php } else {?>
          <div class="form-group">
            <input type="hidden"  class="form-control" name="status" id="status" placeholder="status" value="<?php echo $status; ?>" />
        </div>
        <?php }?> 
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tredeempoint') ?>" class="btn btn-default">Cancel</a>
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
    