@extends('layouts.mainlayout')

@section('content')
    <div>
    <h1>Modification</h1>
    <form id="email-form"  action="{{ route('matieres.update',$matiere) }}"  method="POST">
            @csrf
            @method('put')
            <div class="div-block-11">
              <h3 class="heading-5">Editer</h3>
              <div class="html-embed w-embed">
                <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
              </div>
              
              <label for="codeMatiere">code Matière</label>
              <input type="text" class="text-field-4 w-input" value="{{$matiere->codeMatiere}}" maxlength="256" name="codeMatiere"  placeholder="Entrez le codeMatiere" id="codeMatiere">
               <br> <label for="intitule">intitule</label>
              <input type="text" value="{{$matiere->intitule}}" class="text-field-5 w-input" maxlength="256" name="intitule"  placeholder="Entrez l'intitulé du module" id="intitule">
              <br>

              <label for="responsableMatiere">responsableMatiere</label>
              <input type="text" value="{{$matiere->responsableMatiere}}" class="text-field-5 w-input" maxlength="256" name="responsableMatiere"  placeholder="Entrez le responsableMatiere" id="responsableMatiere">
              <br>
              <label for="filiereId">module</label>
              <select name="moduleIntitule">
                @foreach($modules as $module)
                    <option> {{$module->intitule}} </option>
                @endforeach
              </select>
            
            </div>
            <div class="div-block-12"> <button type="submit" class="btn btn-primary"> Modifier</button></div>
        </form>
    </div>
@endsection

