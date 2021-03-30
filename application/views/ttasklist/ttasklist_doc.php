<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Ttasklist List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Task</th>
		<th>Outlet</th>
		<th>Aktifdari</th>
		<th>Aktifsampai</th>
		
            </tr><?php
            foreach ($ttasklist_data as $ttasklist)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $ttasklist->task ?></td>
		      <td><?php echo $ttasklist->outlet ?></td>
		      <td><?php echo $ttasklist->aktifdari ?></td>
		      <td><?php echo $ttasklist->aktifsampai ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>