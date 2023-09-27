<div class="container" id="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row mt-5">
				<div class="col-md-12">
					<h6>Data Heart Rate Terakhir
						<a id="button" class="btn btn-success"></a>
					</h6>
				</div>
				<!-- <canvas id="myChart" style="width:100%;max-width:700px"></canvas> -->
				<!-- <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div> -->
			</div>
			<table class="table mt-2">
				<thead class="thead-light">
					<tr>
						<th>ID</th>
						<th>Heart Rate</th>
						<th>Created at</th>
					</tr>
				</thead>
				<tbody id="table">

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
			url: '<?= base_url() . "C_Ble/ambildata" ?>',
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
				$('#table').html(table);
			}
		});
	}, 0);


	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildataterakhir" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var last = '';
				for (var i = 0; i < data.length; i++) {
					last += data[i].data_ble;
				}
				$('#button').html(last);
			}
		});
	}, 0);
</script>