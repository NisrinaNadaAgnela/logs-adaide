<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('chartjs/Chart.bundle.js') }}"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="margin-top: 20px">
                <div class="card-header">Data Logs</div>
                    <div class="card-body">
                        <div class="chart">
                            @foreach($logs as $row)
                            <canvas id="myChart"></canvas>
                            @endforeach
                            <script>
                                var ctx = document.getElementById("myChart");
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: [{{ $row->date }}],
                                        datasets: [{
                                                label: 'Data Grafik Logs',
                                                data: [{{ $row->id }}],
                                                backgroundColor: [
                                                    'rgb(255, 255, 0)'
                                                    // 'rgba(54, 162, 235, 0.2)',
                                                    // 'rgba(255, 206, 86, 0.2)',
                                                    // 'rgba(75, 192, 192, 0.2)',
                                                    // 'rgba(153, 102, 255, 0.2)',
                                                    // 'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(253, 215, 3)'
                                                    // 'rgba(54, 162, 235, 1)',
                                                    // 'rgba(255, 206, 86, 1)',
                                                    // 'rgba(75, 192, 192, 1)',
                                                    // 'rgba(153, 102, 255, 1)',
                                                    // 'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 3
                                            }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!-- <button type="button" name="button" class="btn btn-success"> <a href="logs" style="color: white;">Masuk</a> </button> -->
                </div>
            </div>
        </div>
    </div>
</div>
</html>