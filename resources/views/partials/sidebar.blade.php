<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
     <li class="nav-item">
       <a class="nav-link" href="{{ route('dashboard') }}">
         <i class="mdi mdi-grid-large menu-icon"></i>
         <span class="menu-title">Dashboard</span>
       </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="{{ route('candidate.index') }}">
        <i class="mdi mdi-account-circle-outline menu-icon"></i>
         <span class="menu-title">Candidate</span>
       </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="{{ route('job') }}">
        <i class="mdi mdi-briefcase menu-icon"></i>
         <span class="menu-title">Job</span>
       </a>
     </li>
   </ul>
 </nav>