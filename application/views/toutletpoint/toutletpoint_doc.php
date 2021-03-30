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
        <h2>Toutletpoint List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Outlet</th>
		<th>Totalpoint</th>
		<th>Bulan</th>
		<th>Tahun</th>
		<th>Aktif</th>
		<th>Usedpoint</th>
		<th>Sisapoint</th>
		
            </tr><?php
            foreach ($toutletpoint_data as $toutletpoint)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $toutletpoint->outlet ?></td>
		      <td><?php echo $toutletpoint->totalpoint ?></td>
		      <td><?php echo $toutletpoint->bulan ?></td>
		      <td><?php echo $toutletpoint->tahun ?></td>
		      <td><?php echo $toutletpoint->aktif ?></td>
		      <td><?php echo $toutletpoint->usedpoint ?></td>
		      <td><?php echo $toutletpoint->sisapoint ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>