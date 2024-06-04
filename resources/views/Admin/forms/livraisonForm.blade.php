@extends('Layouts.vendeurLayout')
@section('content')
<div>entre en stock</div>
<x-panel>
    <div class='d-flex flex-row justify-content-between p-2'>
        <div>
            creation de livraison
        </div>
        <div>
            date : 
        </div>
    </div>

    <div>
        <form  action='{{route("config.livraison.save")}}' method='POST' class="d-flex flex-wrap flex-row">
            @csrf
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">categorie de Produit :</label>
                <select  class="form-select" id='catId' style="width: 100%; height: 36px;" name='catId'>
                    <option value="" >selectionner une categorie</option>
                    @foreach($cats as $cat)                   
                    <option value="{{$cat->id}}" >{{$cat->nom}}</option>
                
                    @endforeach           
                
                 </select>
                @error('nom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">Produits  :</label>
                <select  class="form-select" id='produits' style="width: 100%; height: 36px;" name='produits'>
               
                    <!-- @foreach($cats as $cat)                   
                    <option value="{{$cat->id}}" >{{$cat->nom}}</option>
                    
                
                    @endforeach            -->
                
                 </select>
                @error('nom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">quantites :</label>
                <input type="number" class="form-control" id="quantite" placeholder="Enter text" name='quantite'>
                @error('unite')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
                <label for="exampleInputText" class="form-label">Montant :</label>
                <input type='number'  class="form-control" id="montant" placeholder="Enter text" name='montant'>
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3" style="width: 45%; margin: 20px 15px;">
              <div><span> prix unitaire : </span><span class='text-danger' id='prix'> <span></div> 
            </div>

            <div class="mb-3 d-flex justify-content-end" style="width: 100%; margin: 20px 15px;">      
                <input type="submit" class="form-control btn btn-primary rounded" value="enregistrer" placeholder="Enter text" style="width: 30%;" >
            </div>
        </form>
    </div>
</x-panel>


<!-- chargement de donnees dynamiquement par js -->
<script type="text/javascript">
    // Préparer les données PHP pour JavaScript
    var options2 = @json($produits);
    var q= document.getElementById('quantite')
    var som= document.getElementById('montant')
   

    document.getElementById('catId').addEventListener('change', function() {
        var selectedId = this.value;
        var select2 = document.getElementById('produits');

        // Vider le second select
        select2.innerHTML = '<option value="">Sélectionnez une option</option>';

        // Si une option valide est sélectionnée, remplir le second select
        if (selectedId && options2[selectedId]) {
            options2[selectedId].forEach(function(option) {
                var newOption = document.createElement('option');
                newOption.value = option.id;
                newOption.text = option.nom;
                newOption.setAttribute('data-price',option.prixunitaire)
                select2.appendChild(newOption);
            });
        }
    });

    //selection du prix et de la quantite
    var price;
    document.getElementById('produits').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var price = selectedOption.getAttribute('data-price');
        document.getElementById('prix').textContent = price ? price : 'N/A';
        som.value = price ? price : ' ';
    });
    // q.addEventListener('change',()=>{
    //     som.value = this.value * price;
    // })
</script>

@endsection
