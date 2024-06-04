@extends('Layouts.vendeurLayout')
@section('content')
<div>entre en stock</div>
<x-panel>
    <div class='d-flex flex-row justify-content-between p-2'>
        <div>
            creation de produit
        </div>
        <div>
            date : 
        </div>
    </div>

    <div>
        <form  action='{{route("config.produit.save")}}' method='POST' class="d-flex flex-wrap flex-row">
            @csrf
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">categorie  :</label>
                <select  class="form-select" id='paramSelector' style="width: 100%; height: 36px;" name='catId'>
                @foreach($cats as $cat)                   
                <option value="{{$cat->id}}" >{{$cat->nom}}</option>
               
                @endforeach           
                
            </select>
                @error('nom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">nom :</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter text" name='nom'>
                @error('unite')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">prix unitaire :</label>
                <input type='number'  class="form-control" id="exampleInputText" placeholder="Enter text" name='prixunitaire'>
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-end" style="width: 100%; margin: 20px 15px;">      
                <input type="submit" class="form-control btn btn-primary rounded" value="enregistrer" placeholder="Enter text" style="width: 30%;" >
            </div>
        </form>
    </div>
</x-panel>
@endsection