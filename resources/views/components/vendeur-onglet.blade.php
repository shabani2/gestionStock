
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <div class="accordion" style='width:100%;' id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <a href="{{route('vendeur.dashbord')}}" target="_blank" rel="noopener noreferrer" class="accordion-button text-white"> dashbord</a>
              <!-- <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Dashboard
              </button> -->
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show bg-white text-white" aria-labelledby="panelsStayOpen-headingOne">
              
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"  id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                stock
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <div class='submenu' style="width:100%; padding:10px; cursor:pointer;"><a href="{{route('vendeur.entre')}}">entre en stock</a></div>
                <div class='submenu' style="width:100%; padding:10px; cursor:pointer;"><a href="{{route('vendeur.vente')}}">vente journaliere</a></div>
                <div class='submenu' style="width:100%; padding:10px; cursor:pointer;"><a href="{{route('vendeur.solde')}}">solde</a></div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                caisse
              </button> -->
              <a href="{{route('vendeur.caisseOperation')}}" target="_blank" rel="noopener noreferrer" class="accordion-button text-white"> caisse</a>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <!-- <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                config
              </button> -->
              <a href="#" target="_blank" rel="noopener noreferrer" class="accordion-button text-white" > confiiguration</a>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
              
            </div>
          </div>
        </div>
