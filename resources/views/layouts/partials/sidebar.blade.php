 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Pages</li>
        @can('admin')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Personnes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          {{-- <li>
            <a href="{{ route('personnes.index') }}">
              <i class="bi bi-circle"></i><span>Utilisateurs</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('etudiants.index') }}">
              <i class="bi bi-circle"></i><span>Etudiants</span>
            </a>
          </li>
          <li>
            <a href="{{ route('professeurs.index') }}">
              <i class="bi bi-circle"></i><span>Professeurs</span>
            </a>
          </li>
        </ul>
      </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Gestion des Filières</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{route('filieres.index')}}">
                <i class="bi bi-circle"></i><span>Filieres</span>
              </a>
            </li>
            <li>
              <a href="{{route('modules.index')}}">
                <i class="bi bi-circle"></i><span>modules</span>
              </a>
            </li>
            <li>
              <a href="{{route('matieres.index')}}">
                <i class="bi bi-circle"></i><span>matières</span>
              </a>
            </li>
            <li>
              <a href="{{route('niveaux.index')}}">
                <i class="bi bi-circle"></i><span>niveaux</span>
              </a>
            </li>
          </ul>
        </li><!-- End Components Nav -->
        @endcan
        @can('enseignant')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Gestion des absences</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{route('absences.index')}}">
                  <i class="bi bi-circle"></i><span>Ajouter</span>
                </a>
              </li>
              <li>
                <a href="{{route('absences.modifier')}}">
                  <i class="bi bi-circle"></i><span>Modifier</span>
                </a>
              </li>
              <li>
                <a href="/exportView">
                  <i class="bi bi-circle"></i><span>Exporter</span>
                </a>
              </li>
            </ul>
          </li><!-- End Components Nav -->
          @endcan

          @can('etudiant')
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>etudiant</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="{{route('etudiants.mesabsences')}}">
                    <i class="bi bi-circle"></i><span>mes absences</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Components Nav -->
            @endcan

    </li><!-- End Forms Nav -->
      </ul>

</aside><!-- End Sidebar-->
