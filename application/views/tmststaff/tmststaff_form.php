

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Tmststaff
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tmststaff </li>
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
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>



        <div class="form-group">
              <label for="varchar">Jabatan <?php echo form_error('jabatan') ?></label>
       <select class='form-control select2' style='width: 100%;' name='jabatan' id='jabatan' >
             <?php
                  foreach ($jabatan as $jablist) {
                 ?>
                  <option <?php echo $jabatan_selected == $jablist->id ? 'selected="selected"' : '' ?>
                  value="<?php echo $jablist->id;?>"><?php echo $jablist->jabatan ?></option>
                  <?php
                }
                ?>
     </select>
     </div>


        <div class="form-group">
              <label for="varchar">Outlet <?php echo form_error('outlet') ?></label>
       <select class='form-control select2' style='width: 100%;' name='outlet' id='outlet' >
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
              <label for="varchar">Divisi <?php echo form_error('divisi') ?></label>
       <select class='form-control select2' style='width: 100%;' name='divisi' id='divisi' >
             <?php
                  foreach ($divisi as $divisilist) {
                 ?>
                  <option <?php echo $divisi_selected == $divisilist->id ? 'selected="selected"' : '' ?>
                  value="<?php echo $divisilist->id;?>"><?php echo $divisilist->divisi ?></option>
                  <?php
                }
                ?>
     </select>
     </div>

     <div class="form-group">
              <label for="enum">Role <?php echo form_error('role') ?></label>
  			<select class="form-control select2" style="width: 100%;" name="role" id="role" >
                    <option>Staff</option>
                  </select>
      </div>
      <div class="form-group">
            <label for="varchar">Pp <?php echo form_error('pp') ?></label>
            <input type="text" class="form-control" name="pp" id="pp" placeholder="Pp" value="<?php echo $pp; ?>" />
      </div>
      <div class="form-group">
            <label for="varchar">Email<?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $email; ?>" />
      </div>
      <div class="form-group">
              <label for="enum">Status <?php echo form_error('status') ?></label>
  			<select class="form-control select2" style="width: 100%;" name="status" id="status" >
                    <option>Aktif</option>
                    <option>Promosi</option>
                    <option>Training</option>
                  </select>
      </div>
     
	    <div class="form-group">
            <label for="int">Totalpoint <?php echo form_error('totalpoint') ?></label>
            <input type="text" class="form-control" name="totalpoint" id="totalpoint" placeholder="Totalpoint" value="<?php echo $totalpoint; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pass <?php echo form_error('pass') ?></label>
            <input type="text" class="form-control" name="pass" id="pass" placeholder="Pass" value="<?php echo $pass; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('tmststaff') ?>" class="btn btn-default">Cancel</a>
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
