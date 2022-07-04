@extends('layouts.mainlayout')

@section('content')
    {{-- <div>
    <h1>Modification</h1>
    <form id="email-form"  action="{{ route('modules.store') }}"  method="POST">
            @csrf
            <div class="div-block-11">
              <h3 class="heading-5">Editer</h3>
              <div class="html-embed w-embed">
                <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
              </div>
              <label for="codeModule">code Module</label>
              <input type="text" class="text-field-4 w-input"  maxlength="256" name="codeModule"  placeholder="Entrez le codeModule" id="codeModule">
               <br> <label for="intitule">intitule</label>
              <input type="text"  class="text-field-5 w-input" maxlength="256" name="intitule"  placeholder="Entrez l'intitulé du module" id="intitule">
              <br>

              <label for="responsableModule">responsableModule</label>
              <input type="text"  class="text-field-5 w-input" maxlength="256" name="responsableModule"  placeholder="Entrez le responsableModule" id="responsableModule">
              <br>

              <label for="semestre">semestre</label>
              <input type="text"  class="text-field-5 w-input" maxlength="256" name="semestre"  placeholder="Entrez le semestre" id="semestre">
              <br>
              <label for="filiereId">module</label>
              <select name="moduleIntitule">
                @foreach($filieres as $filiere)
                    <option> {{$filiere->codeFiliere}} </option>
                @endforeach
              </select>
            
            </div>
            <div class="div-block-12"> <button type="submit" class="btn btn-primary"> Créer</button></div>
        </form>
    </div> --}}

    <div class="pagetitle">
      <h1>Nouveau Module</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('index')}}">Accueil</a></li>
          <li class="breadcrumb-item">Nodules</li>
          <li class="breadcrumb-item active">Nouvelle module</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-6 center" >

          <div class="card">
            <div class="card-body">
              
              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Creation d'un module</h5>
                <p class="text-center small">Entrer les informations du module</p>
              </div>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                  </ul>
                </div>
              @endif

              <form class="row g-3 needs-validation" novalidate id="email-form"  action="{{ route('modules.store') }}"  method="POST">
                @csrf
                <div class="col-12">
                  <label for="codeModule" class="form-label">Code Module</label>
                  <input type="text" name="codeModule" class="form-control" id="codeModule" required>
                  <div class="invalid-feedback">Veuillez entrer le code du module</div>
                </div>
                <div class="col-12">
                  <label for="intitule" class="form-label">Intitule</label>
                  <input type="text" name="intitule" class="form-control" id="intitule" required>
                  <div class="invalid-feedback">Veuillez entrer l'intitule</div>
                </div>

                <div class="col-12">
                  <label class="form-label">Niveau</label>
                     <select class="form-select" aria-label="Default select example" name="niveaux_id">
                       <option selected>Choisissez</option>
                       @foreach($nivaux as $niveau)
                          <option value="{{$niveau->id}}"> {{$niveau->intitule}} </option>
                       @endforeach
                     </select>
                  </div>

                <div class="col-12">
                  <label class="form-label">Semestre</label>
                     <select class="form-select" aria-label="Default select example" name="semestre">
                       <option value="1">Choisissez</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                     </select>
                  </div>

                <div class="col-12">
                <label class="form-label">Responsable Module</label>
                   <select class="form-select" aria-label="Default select example" name="responsableModule">
                     <option selected>Choisissez</option>
                     @foreach($profs as $prof)
                        <option value="{{$prof->id}}"> {{$prof->user->lastname}} </option>
                     @endforeach
                   </select>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Enregistrer</button>
                </div>
              </form>


            </div>
          </div>

        </div>
      </div>
    </section>

@endsection

