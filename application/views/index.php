  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    <?php 
    if ($this->session->userdata('role')== 'Staff'){
      
    ?>
    <div class="row">
    <div class="col-md-2">
    <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src=<?php echo base_url()."/folderfoto/".$profile_data->pp;?> alt="User profile picture">
              <?php// var_dump($profile_data);?>
              
                <h3 class="profile-username text-center"><?php echo $profile_data->nama;?></h3>
                <p class="text-muted text-center"><?php echo $profile_data->jabatan;?></p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Divisi</b> <a class="pull-right"><?php echo $profile_data->divisi;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Outlet</b> <a class="pull-right"><?php echo $profile_data->outlet;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="pull-right"><?php echo $profile_data->email;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Total Point</b> <a class="pull-right"><?php echo $profile_data->totalpoint;?></a>
                  </li>
                </ul>

              
              
              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    <div class="col-md-5">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Gift List </h3>

              <div class="box-tools pull-right">
                <!--
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                -->
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <!-- /.item -->
                <?php foreach($gift_data as $gift){?>

                
                <li class="item">
                  <div class="product-img">
                    <img src="<?=base_url();?>image/<?php echo $gift->productimage;?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href=tmstgift/read/<?php echo $gift->id;?> class="product-title"><?php echo $gift->namagift;?>
                      <span class="label label-success pull-right">Rp . <?php echo number_format($gift->harga);?></span></a>
                        <span class="product-description">
                        <?php echo 'Redeem Point '. $gift->point ; ?>
                        </span>
                  </div>
                </li>
              <?php 
            }?>
                <!-- /.item -->
               
              </ul>
            </div>

            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="tmstgift" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
        </div>
          <!-- /.box -->

      </div>

    <div class="col-md-5">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <!--
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
                -->
              </div>

            </div>

            <div class="box-body">
              <ul class="todo-list">
                
                <?php foreach($task_data as $task){?>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text"><?php echo $task->taskname;?></span>
                  <small class="label label-info"> <?php echo $task->point ." Point";?></small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <?php 
                }
                ?>
                
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              
            </div>
      </div>
    </div>
    </div>
      <?php 
      } else if ($this->session->userdata('role')== 'User' ){
      ?>
      <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h4>Total Outlet Point</h4>
            <h3><?php echo $point_data->totalpoint; ?></h3>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
        </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h4>Point Used</h4>
            <h3><?php echo $point_data->usedpoint; ?></h3>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
        </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h4>Point Left</h4>
            <h3><?php echo $point_data->sisapoint; ?></h3>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      </div>
<?php

    }
    ?>
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->
