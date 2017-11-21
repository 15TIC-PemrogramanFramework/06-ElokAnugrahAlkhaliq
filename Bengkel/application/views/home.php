<?php $this->load->view('templates/header');?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
                <h4 class="title">Grafik Total Pengerjaan, 2015-2017</h4>
                <p class="category">Bengkel Rony Vee Wee</p>
            </div>
            <style type="text/css">
		#container {
			min-width: 300px;
			max-width: 1200px;
			height: 600px;
			margin: 0 auto
		}
	</style>
	<script src="<?php echo base_url('code/highcharts.js'); ?>"></script>
	<script src="<?php echo base_url('code/modules/series-label.js'); ?>"></script>
	<script src="<?php echo base_url('code/modules/exporting.js'); ?>"></script>

	<div id="container"></div>



	<script type="text/javascript">

		Highcharts.chart('container', {

			title: {
				text: ''
			},

			subtitle: {
				text: 'Tahun'
			},
			xAxis: {
				categories: ['2015','2016','2017']
			},
			yAxis: {
				title: {
					text: 'Jumlah Pengerjaan'
				}
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle'
			},

			plotOptions: {
				series: {
					label: {
						connectorAllowed: false
					},
					enableMouseTracking: true
				}
			},

			series: [{
				name:'Total',
				data: [<?php echo $catsiram2015; ?>,<?php echo $catsiram2016; ?>,<?php echo $catsiram2017; ?>]
			}],

			responsive: {
				rules: [{
					condition: {
						maxWidth: 500
					},
					chartOptions: {
						legend: {
							layout: 'horizontal',
							align: 'center',
							verticalAlign: 'bottom'
						}
					}
				}]
			}

		});
	</script>
		</div>
		
</div>
</div>
<?php $this->load->view('templates/footer'); ?>