<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}> --}}
    
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <!-- JavaScript Bundle with Popper -->

    

    
    <title>Lemukutan Informasi</title>
    @include("frontend.f_layouts.navbar")
    
    
    {{-- style sendiri --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css')}}"> --}}
    
    
    
    
</head>
<body>
    <main>
        <style>
            body{
             
                background-color:#BAD5F0; 
                background-image:url({{url('asset/background.webp')}});
                 
                                 
                background-repeat:   no-repeat;
                background-position: center center; 
              
                
                   
            }

            body.div{
                background-color:#faba55 ; 
            }
        </style>
        
        @yield("content")
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

<footer>

</footer>
</html>
