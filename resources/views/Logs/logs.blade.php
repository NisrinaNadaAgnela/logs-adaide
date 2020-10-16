<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="background-color: lightblue">
                                    <th>Id</th>
                                    <th>Instance</th>
                                    <th>Identity</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            @foreach ($logs as $row)
                            <tbody>
                                <tr>    
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->instance }}</td>
                                    <td>{{ $row->identity }}</td>
                                    <td>{{ $row->date }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- <button type="button" name="button" class="btn btn-success"> <a href="logs" style="color: white;">Masuk</a> </button> -->
                </div>
            </div>
        </div>
    </div>
</div>
</html>