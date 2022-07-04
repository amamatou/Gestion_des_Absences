@extends('layouts.mainlayout')

@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="div-block-13">
      <div class="div_radio flex_div_center">
          <label class="flex_div_center_item"><input type="radio" name="tarif" value="Tout">Tout</label>
          <label class="flex_div_center_item"><input type="radio" name="tarif" value="Sexe">Par sexe</label>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Absences <span>| Filieres</span></h5>
            <div class="Tout filieres_stat">
              <div class="d-flex align-items-center">
                {{ $absences_filiere->container() }}
    
                <script src="{{ $absences_filiere->cdn() }}"></script>
                {{ $absences_filiere->script() }}
              </div>
            </div>
            <div class="Sexe filieres_stat">
              <div class="d-flex align-items-center">
                {{ $absences_filiere_sex->container() }}
    
                <script src="{{ $absences_filiere_sex->cdn() }}"></script>
                {{ $absences_filiere_sex->script() }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Absences <span>| Matieres</span></h5>
            <div class="Tout matieres_stat">
              <div class="d-flex align-items-center">
                {{ $absences_matiere->container() }}
    
                <script src="{{ $absences_matiere->cdn() }}"></script>
                {{ $absences_matiere->script() }}
              </div>
            </div>
            <div class="Sexe matieres_stat">
              <div class="d-flex align-items-center">
                {{ $absences_matiere_sex->container() }}
    
                <script src="{{ $absences_matiere_sex->cdn() }}"></script>
                {{ $absences_matiere_sex->script() }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Absences <span>| Modules</span></h5>
            <div class="Tout modules_stat">
              <div class="d-flex align-items-center">
                {{ $absences_module->container() }}
    
                <script src="{{ $absences_module->cdn() }}"></script>
                {{ $absences_module->script() }}
              </div>
            </div>
            <div class="Sexe modules_stat">
              <div class="d-flex align-items-center">
                {{ $absences_module_sex->container() }}
    
                <script src="{{ $absences_module_sex->cdn() }}"></script>
                {{ $absences_module_sex->script() }}
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>

    
@endsection