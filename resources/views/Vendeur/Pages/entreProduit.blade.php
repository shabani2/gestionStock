@extends('Layouts.vendeurLayout')
@section('content')
<div>livraison recu en stock</div>
<x-panel>
    <div class='d-flex flex-row justify-content-between p-2'>
        <div>
            gestion de stock
        </div>
        <div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='width:100px'>
                 options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style='background:#e0e0e0'>
            <a class="dropdown-item " href="#" style='color:#212121'>ajouter</a>
            <a class="dropdown-item " href="#" style='color:#212121'>export</a>
            <a class="dropdown-item " href="#" style='color:#212121'>select all</a>
            </div>
        </div>
        </div>
    </div>

    
</x-panel>
@endsection