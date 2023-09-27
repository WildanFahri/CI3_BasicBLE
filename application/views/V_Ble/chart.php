<div class="container" style="text-align:center;">
	<div class="mt-3">
		<h2>Grafik Heart rate</h2>
	</div>
</div>

<div class="row mt-4 mx-auto">
	<div class="col-6" style="width: 100%">
		<h4 style="text-align:center;">Atlet 1</h4>
		<h6 style="text-align:center;">Data Terakhir : &nbsp;<span class="badge badge-primary" id="last1"></span> bpm</h6>
		<canvas id="data1" height="100"></canvas>
	</div>

	<div class="col-6" style="width: 100%">
		<h4 style="text-align:center;">Atlet 2</h4>
		<h6 style="text-align:center;">Data Terakhir : &nbsp;<span class="badge badge-primary" id="last2"></span> bpm</h6>
		<canvas id="data2" height="100"></canvas>
	</div>
</div>
<div class="row mt-4 mx-auto">
	<div class="col-6" style="width: 100%">
		<h4 style="text-align:center;">Atlet 3</h4>
		<h6 style="text-align:center;">Data Terakhir : &nbsp;<span class="badge badge-primary" id="last3"></span> bpm</h6>
		<canvas id="data3" height="100"></canvas>
	</div>

	<div class="col-6" style="width: 100%">
		<h4 style="text-align:center;">Atlet 4</h4>
		<h6 style="text-align:center;">Data Terakhir : &nbsp;<span class="badge badge-primary" id="last4"></span> bpm</h6>
		<canvas id="data4" height="100"></canvas>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script type="text/javascript">
	let chart1 = null;
	let chart2 = null;
	let chart3 = null;
	let chart4 = null;

	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildataterakhir1" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var last = '';
				for (var i = 0; i < data.length; i++) {
					last += data[i].data_ble;
				}
				$('#last1').html(last);
			}
		});
	}, 0);

	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildataterakhir2" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var last = '';
				for (var i = 0; i < data.length; i++) {
					last += data[i].data_ble;
				}
				$('#last2').html(last);
			}
		});
	}, 0);

	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildataterakhir3" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var last = '';
				for (var i = 0; i < data.length; i++) {
					last += data[i].data_ble;
				}
				$('#last3').html(last);
			}
		});
	}, 0);

	setInterval(function() {
		$.ajax({
			url: '<?= base_url() . "C_Ble/ambildataterakhir4" ?>',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				var last = '';
				for (var i = 0; i < data.length; i++) {
					last += data[i].data_ble;
				}
				$('#last4').html(last);
			}
		});
	}, 0);

	setInterval(function() {
		const mychart1 = (chartType) => {
			$.ajax({
				url: '<?= base_url() . "C_Ble/grafik1" ?>',
				type: 'GET',
				dataType: 'json',
				success: data => {
					let chartX = []
					let chartY = []
					data.map(data => {
						chartX.push(data.created_at)
						chartY.push(data.data_ble)
					})
					const chartData = {
						labels: chartX,
						datasets: [{
							label: 'Heart Rate',
							data: chartY,
							backgroundColor: ['lightcoral'],
							borderColor: ['lightcoral'],
							borderWidth: 4,
							animation: {
								duration: 0
							},

						}]
					}

					const ctx = document.getElementById(chartType).getContext('2d')
					const config = {
						type: 'line',
						data: chartData,
					}

					if (chart1 != null) {
						chart1.destroy();
					}

					chart1 = new Chart(ctx, config);
				}
			})
		}
		mychart1('data1')
	}, 1000);

	setInterval(function() {
		const mychart2 = (chartType) => {
			$.ajax({
				url: '<?= base_url() . "C_Ble/grafik2" ?>',
				type: 'GET',
				dataType: 'json',
				success: data => {
					let chartX = []
					let chartY = []
					data.map(data => {
						chartX.push(data.created_at)
						chartY.push(data.data_ble)
					})
					const chartData = {
						labels: chartX,
						datasets: [{
							label: 'Heart Rate',
							data: chartY,
							backgroundColor: ['lightcoral'],
							borderColor: ['lightcoral'],
							borderWidth: 4,
							animation: {
								duration: 0
							},

						}]
					}

					const ctx = document.getElementById(chartType).getContext('2d')
					const config = {
						type: 'line',
						data: chartData,
					}

					if (chart2 != null) {
						chart2.destroy();
					}

					chart2 = new Chart(ctx, config);
				}
			})
		}
		mychart2('data2')
	}, 1000);

	setInterval(function() {
		const mychart3 = (chartType) => {
			$.ajax({
				url: '<?= base_url() . "C_Ble/grafik3" ?>',
				type: 'GET',
				dataType: 'json',
				success: data => {
					let chartX = []
					let chartY = []
					data.map(data => {
						chartX.push(data.created_at)
						chartY.push(data.data_ble)
					})
					const chartData = {
						labels: chartX,
						datasets: [{
							label: 'Heart Rate',
							data: chartY,
							backgroundColor: ['lightcoral'],
							borderColor: ['lightcoral'],
							borderWidth: 4,
							animation: {
								duration: 0
							},

						}]
					}

					const ctx = document.getElementById(chartType).getContext('2d')
					const config = {
						type: 'line',
						data: chartData,
					}

					if (chart3 != null) {
						chart3.destroy();
					}

					chart3 = new Chart(ctx, config);
				}
			})
		}
		mychart3('data3')
	}, 1000);

	setInterval(function() {
		const mychart4 = (chartType) => {
			$.ajax({
				url: '<?= base_url() . "C_Ble/grafik4" ?>',
				type: 'GET',
				dataType: 'json',
				success: data => {
					let chartX = []
					let chartY = []
					data.map(data => {
						chartX.push(data.created_at)
						chartY.push(data.data_ble)
					})
					const chartData = {
						labels: chartX,
						datasets: [{
							label: 'Heart Rate',
							data: chartY,
							backgroundColor: ['lightcoral'],
							borderColor: ['lightcoral'],
							borderWidth: 4,
							animation: {
								duration: 0
							},

						}]
					}

					const ctx = document.getElementById(chartType).getContext('2d')
					const config = {
						type: 'line',
						data: chartData,
					}

					if (chart4 != null) {
						chart4.destroy();
					}

					chart4 = new Chart(ctx, config);
				}
			})
		}
		mychart4('data4')
	}, 1000);
</script>