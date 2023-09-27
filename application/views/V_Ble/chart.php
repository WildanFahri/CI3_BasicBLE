<div class="container" style="text-align:center;">
	<div class="mt-3">
		<h3>Grafik Heart rate</h3>
	</div>
</div>

<div class="container">
	<div class="mt-3">
		<canvas id="line" height="100"></canvas>
	</div>
	<div class="mt-3">
		<canvas id="pie" height="100"></canvas>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script type="text/javascript">
	let chart = null;
	setInterval(function() {
		const mychart = (chartType) => {
			$.ajax({
				url: '<?= base_url() . "C_Ble/grafik" ?>',
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
						type: chartType,
						data: chartData,
					}

					if (chart != null) {
						chart.destroy();
					}

					chart = new Chart(ctx, config);
				}
			})
		}
		mychart('line')
	}, 1000);
</script>