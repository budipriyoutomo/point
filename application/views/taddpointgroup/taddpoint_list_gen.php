
  <!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Staff
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
		    <th>
                <span style="align:center">
								<input type="checkbox" id="selectAll" onclick="handleClick(this);" >
								<label for="selectAll"></label>
							</span>
                </th>
                </tr>
            </thead>
      
        </table> 
		<div class="row" style="margin-bottom: 10px">

            <div class="col-md-6">
            <button type="submit" class="btn btn-primary" onclick="getdata()" >Save</button>
            <?php echo anchor(site_url('taddpointgroup/Ecancel'), '<i class="fa fa-close"></i> Cancel ', 'class="btn btn-danger"'); ?>


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

        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            
            $(document).ready(function() {
              
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                    {
                        return {
                            "iStart": oSettings._iDisplayStart,
                            "iEnd": oSettings.fnDisplayEnd(),
                            "iLength": oSettings._iDisplayLength,
                            "iTotal": oSettings.fnRecordsTotal(),
                            "iFilteredTotal": oSettings.fnRecordsDisplay(),
                            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                        };
                    };

               var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                        
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    select: true, 
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "json", "type": "POST"},
                    columns: [
                        
                        {
                            "data": "id",
                            "orderable": false
                        },{"data": "nik"},{"data": "nama"},{"data": "jabatan"},{"data": "outlet"},{"data": "totalpoint"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);

                    }

                });


            });

                
            
            function handleClick(cb){
                var checkbox = $('table tbody input[type="checkbox"]');  
             
                   if(cb.checked){
                        checkbox.each(function(index,value){   
                                 value.checked = true;
                        });
                    } else{
                        checkbox.each(function(index,value){
                            value.checked = false;
                            
                        });
                    } 
                }

            function getdata(){
                var checkbox = $('table tbody input[type="checkbox"]');  
                var table = $('#mytable').DataTable();
                var data = [];
                var myData;
                
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1; //January is 0!
                var yyyy = today.getFullYear();

                if (dd < 10) {
                dd = '0' + dd;
                }

                if (mm < 10) {
                mm = '0' + mm;
                }

                today = yyyy + '-' + mm + '-' + dd;
                
                var task = document.getElementById('task').value;
                var iduser = document.getElementById('usernameid').innerHTML;
                
                var point = document.getElementById('point').value;

                
                checkbox.each(function(index,value){   
                        if(value.checked){
                            var nik = table.row(index).data().nik; 
                            data.push({
                                'nik': nik,
                                'tgladd': today,
                                'task': task,
                                'point': point,
                                'user': iduser,
                            });
                            
                            //dataString = json_encode(data);
                        }
                    });

                   /*
                    $.ajax({  
                        url: 'savedata',
                        data: {myData: data},
                        type: 'post',
                        dataType: 'json',                       
                        success: function(data){
                            console.log(data);
                        },
                        error: function(e){
                            console.log(e.message);
                        }
                    });
                    */
                    $.post('savedata', {sendData: JSON.stringify(data)}, function(res) {
                        alert(res);
                        window.location = "../Taddpointgroup";
                    }, "json");
            }
        </script>