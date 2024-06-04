<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de stock</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('css/all.min.js')}}"></script>
   
</head>
<body class='h-100' style=''>
    <div class=' d-flex justify-content-center w-100 h-100 p-5' style='height: 100%;background-color: #ede7f6;' >        
        <div class='rounded p-3 bg-white' style='width:50%'>
            @yield('content')
        </div>
    </div>

    
    <script src="{{asset('css/jquery.js')}}"></script>
    <script src="{{asset('css/popper.js')}}"></script>
    <script src="{{asset('css/bootstrap.js')}}"></script>

    @yield('scripts')
    
</body>
</html>