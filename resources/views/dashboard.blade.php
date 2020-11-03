<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('chartjs/Chart.bundle.js') }}"></script>
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
                                <div class="card-header">Data Logs</div>
                                    <div class="card-body">                
                                            <canvas id="myChart"></canvas>
                                                <script>
                                                    var ctx = document.getElementById("myChart").getContext('2d');
                                                    var myChart = new Chart(ctx, {
                                                        type: 'bar',
                                                        data: {
                                                            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                                                            datasets: [{
                                                                label: '# of Votes',
                                                                data: [12, 19, 3, 23, 2, 3],
                                                                backgroundColor: [
                                                                'rgba(255, 99, 132, 0.2)',
                                                                'rgba(54, 162, 235, 0.2)',
                                                                'rgba(255, 206, 86, 0.2)',
                                                                'rgba(75, 192, 192, 0.2)',
                                                                'rgba(153, 102, 255, 0.2)',
                                                                'rgba(255, 159, 64, 0.2)'
                                                                ],
                                                                borderColor: [
                                                                'rgba(255,99,132,1)',
                                                                'rgba(54, 162, 235, 1)',
                                                                'rgba(255, 206, 86, 1)',
                                                                'rgba(75, 192, 192, 1)',
                                                                'rgba(153, 102, 255, 1)',
                                                                'rgba(255, 159, 64, 1)'
                                                                ],
                                                                borderWidth: 1
                                                            }]
                                                        },
                                                        options: {
                                                            scales: {
                                                                yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero:true
                                                                    }
                                                                }]
                                                            }
                                                        }
                                                    });
                                                </script>
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
