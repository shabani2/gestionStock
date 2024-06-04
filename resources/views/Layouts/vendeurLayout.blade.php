<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de stock</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/docs.css')}}">
    <script src="{{asset('css/all.min.js')}}"></script>
    <script src="{{asset('css/bootstrap.bundle.js')}}"></script>
    <style>
    .accordion-item:hover{
        background : gray;
    }
    .accordion{
    background-color: transparent;
    width: 300px;
   }
   .accordion-item {
        border: none;
        background-color: transparent;
    }
    .submenu:hover{
        background :#616161
    }
    
    .accordion-header {
        border: none;
        background-color: transparent;
    }
    
    .accordion-button {
        border: none;
        box-shadow: none;
        background-color: transparent;
    }
    
    .accordion-button:not(.collapsed) {
        border: none;
        box-shadow: none;
        background-color: transparent;
    }
    .accordion a{
      background: transparent;
      text-decoration: none;
      color: white;
    }
    </style>
</head>
<body>
  <!-- navbar ou side bar -->
  <div class="" style="position: relative;">
    <div class="w-25 text-white" style="height: 100%; position: fixed;top: 0;left: 0; background:#212121">
      <div class='bg-success' style='width:100%, min-height:13%;padding:15px'>sidebar</div>
      <div class='mt-3'>
        <x-vendeur-onglet/>
      </div>
      
    </div>

    <!-- partie principale of displaying -->
    <div class="flex flex-column " style="width: 75%; margin-left: 25%;">
      <div class="w-100 p-3 d-flex flex-row justify-content-between text-white" style='background:#212121'>
        <div>ffggaass</div>
        <div>connexion option</div>
      </div>

      <!-- container bloc for items -->
      <div class="pt-5 pl-3 pr-3 d-flex flex-column align-items-center border border-danger" style="width:100%; min-height:100vh;background:#eeeeee">
      @yield('content')
        
      </div>


    </div>

  </div>







  <script src="{{asset('css/jquery.js')}}"></script>
  <script src="{{asset('css/popper.js')}}"></script>
  <script src="{{asset('css/bootstrap.js')}}"></script>

  @yield('scripts')
    

</body>
</html>