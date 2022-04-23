@extends('layouts.guest')

@section('content')
<div class="container-scroller">
   <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="content-wrapper d-flex align-items-center auth px-0">
       <div class="row w-100 mx-0">
         <div class="col-lg-4 mx-auto">
           <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             <h4>Hello! let's get started</h4>
             <form action="{{ route('login') }}" method="post" class="pt-3">
               <div class="form-group">
                 <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
               </div>
               <div class="form-group">
                 <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
               </div>
               <div class="mt-3 d-flex flex-row justify-content-end">
                  <button type="submit" class="btn btn-primary text-light btn-rounded btn-fw">Login</button>
               </div>
            </form>
               <div class="text-center mt-4 fw-light">
                 Don't have an account? <a href="{{ route('register-form') }}" class="text-primary">Register</a>
               </div>
           </div>
         </div>
       </div>
     </div>
     <!-- content-wrapper ends -->
   </div>
   <!-- page-body-wrapper ends -->
 </div>
@endsection