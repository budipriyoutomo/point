

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
<!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        User
        <small>Update/Create Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User </li>
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
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	      <div class="form-group">
              <label for="enum">Role <?php echo form_error('role') ?></label>
  			<select class="form-control select2" style="width: 100%;" name="role" id="role" >
                    <option>Admin</option>
                    <option>User</option>
                  </select>
          </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pp <?php echo form_error('pp') ?></label>
            <input type="text" class="form-control" name="pp" id="pp" placeholder="Pp" value="<?php echo $pp; ?>" />
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
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
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
