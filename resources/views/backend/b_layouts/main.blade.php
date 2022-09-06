<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}> --}}

    <title>Lemukutan Informasi</title>
    {{-- @include("site.layouts.backend.partial.navbar") --}}
    
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- style sendiri --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css')}}"> --}}


   

</head>
<body>
    
    @yield("content")

</body>

<footer>

</footer>
</html>
