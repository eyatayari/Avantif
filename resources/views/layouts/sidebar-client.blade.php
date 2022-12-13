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
        <a class="nav-link collapsed " href="{{route('rendez-vous')}}">
          <i class="bi bi-grid"></i>
          <span>Mes rendez-vous</span>
        </a>
      </li><!-- End rendez-vous Nav -->
      

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('reservation')}}">
          <i class="bi bi-journal-text"></i>
          <span>un nouveau rendez-vous</span>
        </a>
      </li><!-- End factures Nav -->
    



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('client-profile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('logout')}}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Déconnexion </span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->