@extends('Layouts.vendeurLayout')
@section('content')
<div>entre en stock</div>
<x-panel>
    <div class='d-flex flex-row justify-content-between p-2'>
        <div>
            creation de categorie
        </div>
        <div>
            date : 
        </div>
    </div>

    <div>
        <form  action='{{route("config.cat.save")}}' method='POST' class="d-flex flex-wrap flex-row">
            @csrf
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">nom  :</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter text" name='nom'>
                @error('nom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">unite :</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter text" name='unite'>
                @error('unite')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">image :</label>
                <input type='file'  class="form-control" id="exampleInputText" placeholder="Enter text" name='image'>
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