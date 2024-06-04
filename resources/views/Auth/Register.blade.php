@extends('Layouts.authLayout')
@section('content')
    <form action='{{route("vendeur.save")}}' method='POST' >
        @csrf
        <div class="m-auto w-auto text-center p-" style="font-weight: bold; font-size: 1.5rem;">Register</div>
        <div class="" >
            <label for="basicSelect" class="form-label d-block"> point de vente : </label>
            <select  class="form-select" id='paramSelector' style="width: 100%; height: 36px;" name='pv_id'>
                @foreach($pvs as $pv)                   
                <option value="{{$pv->id}}" >{{$pv->nompv}}</option>
               
                @endforeach           
                
            </select>
            </div>
            <div class="mb-3">
            
            <div class="mb-3">
                <label for="exampleInputText" class="form-label fs-5">nom :</label>
                <input type="text" class="form-control" id="exampleInputText" name='nom' placeholder="Enter le nom" name='nom'>
                @error('nom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">post-nom</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter le postnom" name='postnom'>
                @error('postnom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">prenom</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter le prenom" name='prenom'>
                @error('prenom')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>           
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">numero</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter le numero" name='numero'>
                @error('numero')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">mot de passe</label>
                <input type="password" class="form-control" id="exampleInputText" placeholder="Enter le mot de passe" name='password'>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full mb-3 mt-3">
                    <input type="file" id="image" class="form-control w-full"  name='image'/>
                    @error('profile')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                    <!-- <button type="button" class="btn text-white btnProfile" style="background: gray;">parcourir fichier...</button> -->
                </div>
            <!-- <div class="mb-3 w-100 d-flex flex-row">
                 <div class="" style="height: 225px; width: 275px;">
                    <img src=" " style="width: 100%; height: 100%;" id="profileDisplay"/>
                </div> -->
                <!-- <div class=" d-flex align-items-end"> -->
                
            <!-- </div> --> 
            <div class="mb-3 w-100 d-flex justify-content-center pt-2">                
                <input type="submit" class="btn btn-primary w-100 text-white" id="exampleInputText" value="enregistrer">
            </div>

            
            
        </div>
        

    </form>
    
@endsection
@section('scripts')
<!-- <script>
      var btn = document.querySelector('.btnProfile');
     btn.addEventListener('click',()=>{
        document.getElementById('profile').click();        
     })

     document.getElementById('profile').addEventListener('change',(e)=>{
            var filename = e.target;
            var path = filename.files[0].name            
            document.getElementById('profileDisplay').src = path;
        })
</script> -->
@endsection