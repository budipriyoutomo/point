

  <!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Staff
        <small>Control panel</small>
      </h1>

    </section>
<!-- Main content -->
	      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

        <div class="row" style="margin-bottom: 10px">

            <div class="col-md-12 text-right">
                
	    </div>

        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>NIK</th>
		    <th>Nama</th>
		    <th>Jabatan</th>
		    <th>Outlet</th>
		    <th>TotalPoint</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>

        </table>
		<div class="row" style="margin-bottom: 10px">

            <div class="col-md-6">


		  </div>
</div>


			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

		</section>
		</div>
