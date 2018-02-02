<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('gudang/bootstrap/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('gudang/bootstrap/js/bootstrap.js'); ?>"></script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div class="row">
				<table class="table table-hover table-bordered">
					<caption>Rute Penerbangan</caption>
					<thead>
						<tr>
							<th>Id</th>
							<th>Depart Date</th>
							<th>Depart Time</th>
							<th>Rute From</th>
							<th>Rute To</th>
							<th>Price</th>
						</tr>
					</thead>
					<?php foreach ($data as $d) { ?>
					<tbody>
						<tr>
							<td><?php echo $d['id']; ?></td>
							<td><?php echo $d['depart_date']; ?></td>
							<td><?php echo $d['depart_time']; ?></td>
							<td><?php echo $d['rute_from']; ?></td>
							<td><?php echo $d['rute_to']; ?></td>
							<td><?php echo $d['price']; ?></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>