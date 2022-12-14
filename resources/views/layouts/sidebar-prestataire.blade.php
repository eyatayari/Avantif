  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Modules</li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="#">
          <i class="bi bi-grid"></i>
          <span>Mes rendez-vous</span>
        </a>
      </li><!-- End rendez-vous Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Mes clients</span>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Liste clients</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Ajouter client</span>
            </a>
          </li>
        </ul> 
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Mes factures</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route("all-factures")}}">
              <i class="bi bi-circle"></i><span>Liste factures</span>
            </a>
          </li>
          <li>
            <a href="{{route("add-facture")}}">
              <i class="bi bi-circle"></i><span>Ajouter facture</span> 
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="{{route("all-product")}}">
          <i class="bi bi-basket"></i><span>Produits</span>
        </a>
       
      </li><!-- End Icons Nav -->



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('profile-prestataire')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <form action="{{route("logout")}}" method="get">
        @csrf
          <button type="submit" class="btn ">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>D??connexion </span>
          </button>

        </form>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->