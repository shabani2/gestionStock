@extends('Layouts.vendeurLayout')
@section('content')
<div>formulaire pour caisse</div>
<x-panel>
    <div class='d-flex flex-row justify-content-between p-2'>
        <div>
            gestion de stock
        </div>
        <div>
            date : 
        </div>
    </div>

    <div>
    <form  action{{}} class="d-flex flex-wrap flex-row">

        <div class="" style="width: 45%; margin: 20px 15px;">
        <label for="basicSelect" class="form-label d-block"> type de compte : </label>
        <select  class="form-select" id='paramSelector' style="width: 100%; height: 36px;">
            <option selected>Choisir une option</option>
            <option value="admin">administrateur</option>
            <option value="vendeur">vendeur</option>
            
        </select>
        </div>


        <div class="mb-3" style="width: 45%; margin: 20px 15px;">
            <label for="exampleInputText" class="form-label">prix unitaire</label>
            <input type="text" class="form-control" id="exampleInputText" placeholder="Enter text">
        </div>

        <div class="mb-3" style="width: 45%; margin: 20px 15px;">
            <label for="exampleInputText" class="form-label">quantite</label>
            <input type="text" class="form-control" id="exampleInputText" placeholder="Enter text">
        </div>

        <div class="mb-3" style="width: 45%; margin: 20px 15px;">
            <label for="exampleInputText" class="form-label">Montant a payer</label>
            <input type="text" class="form-control" id="exampleInputText" placeholder="Enter text">
        </div>
        <div class="mb-3 d-flex justify-content-end" style="width: 100%; margin: 20px 15px;">      
            <input type="submit" class="form-control btn btn-primary rounded" value="enregistrer" placeholder="Enter text" style="width: 30%;">
        </div>
    </form>
    </div>
</x-panel>
<div class='pt-5'></div>
<x-panel>
    <div class='d-flex flex-row justify-content-between p-2'>
        <div>
            vente journaliere
        </div>
        <div>
            heure : 
        </div>
    </div>

    
</x-panel>
@endsection
