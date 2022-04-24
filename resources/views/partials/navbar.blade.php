<div class="navbar-menu-wrapper d-flex align-items-top"> 
   <ul class="navbar-nav">
     <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
       @if (Route::has('login'))
        @auth
        <h1 class="welcome-text">Welcome Back, <span class="text-black fw-bold">{{ Auth::user()->name }}</span></h1>
        @endauth
       @endif
       <h3 class="welcome-sub-text">Apply for a job fast and easy</h3>
     </li>
   </ul>
   <ul class="navbar-nav ms-auto">
     {{-- <li class="nav-item dropdown d-none d-lg-block">
       <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
       <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
         <a class="dropdown-item py-3" >
           <p class="mb-0 font-weight-medium float-left">Select category</p>
         </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item preview-item">
           <div class="preview-item-content flex-grow py-2">
             <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
             <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
           </div>
         </a>
         <a class="dropdown-item preview-item">
           <div class="preview-item-content flex-grow py-2">
             <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
             <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
           </div>
         </a>
         <a class="dropdown-item preview-item">
           <div class="preview-item-content flex-grow py-2">
             <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
             <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
           </div>
         </a>
         <a class="dropdown-item preview-item">
           <div class="preview-item-content flex-grow py-2">
             <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
             <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
           </div>
         </a>
       </div>
     </li>
     <li class="nav-item d-none d-lg-block">
       <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
         <span class="input-group-addon input-group-prepend border-right">
           <span class="icon-calendar input-group-text calendar-icon"></span>
         </span>
         <input type="text" class="form-control">
       </div>
     </li>
     <li class="nav-item">
       <form class="search-form" action="#">
         <i class="icon-search"></i>
         <input type="search" class="form-control" placeholder="Search Here" title="Search here">
       </form>
     </li> --}}
     <li class="nav-item dropdown d-none d-lg-block user-dropdown">
       <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
         <img class="img-xs rounded-circle" src="{{ asset('images/faces/face8.jpg') }}" alt="Profile image"> </a>
       <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
         <div class="dropdown-header text-center">
           <img class="img-md rounded-circle" src="{{ asset('images/faces/face8.jpg') }}" alt="Profile image">
           <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
           <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
         </div>
         <a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
         <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</button>
         </form>
       </div>
     </li>
   </ul>
   <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
     <span class="mdi mdi-menu"></span>
   </button>
 </div>