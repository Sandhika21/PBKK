<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Submit Formulir</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="position-absolute translate-middle bg-warning bg-gradient rounded">
            @foreach($response as $key -> $response)
            @if ($loop->last)
            <img src="{{ asset('storage/image/'.$response) }}" style="width: 200px; height: 300px;">
            @endif
            <div class="p-2">
                <a>
                    {{$key}} = {{$response}}
                </a>
            </div>
            @endforeach
            @if (session('submission'))
            <div class="alert alert-success">
                {{ session('submission') }}
            </div>
        </div>
    </div>
</body>
</html>

