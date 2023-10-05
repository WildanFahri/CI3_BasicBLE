<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table mt-2">
				<thead class="thead-light">
					<tr>
						<th scope="col">ID Data</th>
						<th scope="col">Nama</th>
						<th scope="col">Data</th>
						<th scope="col">Created at</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0;
					foreach ($ble as $prd) : $i++ ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $prd['nama']; ?></td>
							<td><?= $prd['data_ble']; ?></td>
							<td><?= $prd['created_at']; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildata1" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var table = '';
				for (var i = 0; i < data.length; i++) {
					table += '<tr>' +
						'<td>' + data[i].id + '</td>' +
						'<td>' + data[i].data_ble + '</td>' +
						'<td>' + data[i].created_at + '</td>' +
						'<tr>';
				}
				$('#table1').html(table);
			}
		});
	}, 0);
	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildata2" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var table = '';
				for (var i = 0; i < data.length; i++) {
					table += '<tr>' +
						'<td>' + data[i].id + '</td>' +
						'<td>' + data[i].data_ble + '</td>' +
						'<td>' + data[i].created_at + '</td>' +
						'<tr>';
				}
				$('#table2').html(table);
			}
		});
	}, 0);
	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildata3" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var table = '';
				for (var i = 0; i < data.length; i++) {
					table += '<tr>' +
						'<td>' + data[i].id + '</td>' +
						'<td>' + data[i].data_ble + '</td>' +
						'<td>' + data[i].created_at + '</td>' +
						'<tr>';
				}
				$('#table3').html(table);
			}
		});
	}, 0);
	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildata4" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var table = '';
				for (var i = 0; i < data.length; i++) {
					table += '<tr>' +
						'<td>' + data[i].id + '</td>' +
						'<td>' + data[i].data_ble + '</td>' +
						'<td>' + data[i].created_at + '</td>' +
						'<tr>';
				}
				$('#table4').html(table);
			}
		});
	}, 0);
</script>