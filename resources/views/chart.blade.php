<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<title>Test HighCharts</title>
</head>
<body>
	<div id="chart-container"></div>

	<script src="https://code.highcharts.com/highcharts.js"></script>

	<script>

		var data = <?php echo json_encode($data) ?>
		
		Highcharts.chart('chart-container', {
			chart:{
				type: 'column'
			},
			title:{
				text: 'Grafik State'
			},
			subtitle:{
				text: 'Source : ADA IDE'
			},
			xAxis:{
				categories:data
			},
			yAxis:{
				title:{
					text: 'Jumlah Instanse'
				}
			},
			legend:{
				layout:'vertical',
				align:'right',
				verticalAlign: 'middle'
			},
			plotOptions:{
				series:{
					allowPointSelect:true
				}
			},
			series:[{
				name: 'Jumlah',
				data: jumlah
			}],
			responsive:{
				rules:[
					{
						condition:{
							maxWidth:500
						},
						chartOptions:{
							legend:{
								layout:'horizontal',
								align:'center',
								verticalAlign:'bottom'
							}
						}
					}
				]
			}
		})
	</script>
</body>
</html>