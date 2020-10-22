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
		var datas = <?php echo json_encode($datas) ?>

		Highcharts.chart('chart-container', {
			title:{
				text: 'Pengguna Baru, 2020'
			},
			subtitle:{
				text: 'Source : ADA IDE'
			},
			xAxis:{
				categories:['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli', 'Agt', 'Sep', 'Okt', 'Nov', 'Des']
			},
			yAxis:{
				title:{
					text: 'Jumlah Pengguna Baru'
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
				name: 'Pengguna Baru',
				data:datas
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