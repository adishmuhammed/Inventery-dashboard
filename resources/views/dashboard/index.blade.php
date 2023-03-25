<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <ul class="nav nav-tabs">
        @foreach ($models as $model)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ $model }}">{{ $model }}</a>
            </li>
        @endforeach
    </ul>

    <div class="tab-content">
        @foreach ($models as $model)
            <div id="{{ $model }}" class="tab-pane fade">
                <h3>{{ $model }}</h3>
                // Add the options for CRUD operations here
            </div>
        @endforeach
    </div>
</body>

</html>