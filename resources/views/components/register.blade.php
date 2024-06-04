
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

    
    
        <div class="m-auto w-auto text-center p-" style="font-weight: bold; font-size: 1.5rem;">Register</div>
        <!-- registration form -->

        <div class="mb-3">
            {{$slot}}           
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
            <div class="mb-3 w-100 d-flex flex-row">
                <!-- <div class="" style="height: 225px; width: 275px;">
                    <img src=" " style="width: 100%; height: 100%;" id="profileDisplay"/>
                </div> -->
                <div class=" d-flex align-items-end">
                    <input type="file" id="image" class="form-control"  name='image'/>
                    @error('profile')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                    <!-- <button type="button" class="btn text-white btnProfile" style="background: gray;">parcourir fichier...</button> -->
                </div>
            </div>
            <div class="mb-3 w-100 d-flex justify-content-center pt-2">                
                <input type="submit" class="btn btn-primary w-100 text-white" id="exampleInputText" value="enregistrer">
            </div>

            
            
        </div>

