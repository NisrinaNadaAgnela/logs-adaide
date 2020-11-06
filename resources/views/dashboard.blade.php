<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Grafik Logs</title>
    </head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('chartjs/Chart.bundle.js') }}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <style type="text/css">
        .container {
            width: 75%;
            margin: 15px auto;
        }

    </style>

    <div class="py-10">
        <div class="max-w-7x4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card" style="margin-top: 10px">
                                <!-- <div class="card-header">Data Logs</div>
                                <div class="card-body">
                                    <div id="chart-container">
                                    <script>
                                        var logs = ;
                                            Highcharts.chart('chart-container', {
                                                chart: {
                                                    type: 'column'
                                                },
                                                title: {
                                                    text: 'Pengguna Baru, 2020'
                                                },
                                                subtitle: {
                                                    text: 'Source : ADA IDE'
                                                },
                                                xAxis: {
                                                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli',
                                                        'Agt', 'Sep', 'Okt', 'Nov', 'Des'
                                                    ]
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: 'Jumlah Pengguna Baru'
                                                    }
                                                },
                                                legend: {
                                                    layout: 'vertical',
                                                    align: 'right',
                                                    verticalAlign: 'middle'
                                                },
                                                plotOptions: {
                                                    series: {
                                                        allowPointSelect: true
                                                    }
                                                },
                                                series: [{
                                                    name: 'Pengguna Baru',
                                                    data: logs
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
                                            })

                                    </script> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
