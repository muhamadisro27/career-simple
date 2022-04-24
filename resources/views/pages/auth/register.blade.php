@extends('layouts.guest')

@section('content')
<div class="container-scroller">
   <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="content-wrapper d-flex align-items-center auth px-0">
       <div class="row w-100 mx-0">
         <div class="col-lg-4 mx-auto">
           <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             <h4 class="pb-3">Register Here!</h4>
             @if (session()->has('failed'))
               <div class="alert alert-danger" role="alert">
                  {{ session('failed') }}
               </div>
             @endif
             <form action="{{ route('register') }}" method="POST">
               @csrf
               <div class="form-group">
                 <input type="text" name="id_card_number" class="form-control form-control-lg @error('id_card_number') is-invalid @enderror" value="{{ old('id_card_number') }}" placeholder="ID Card Number" autocomplete="off">
               </div>
               @error('id_card_number')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
               <div class="form-group">
                 <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name" autocomplete="off">
               </div>
               @error('name')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
               <div class="form-group">
                 <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" autocomplete="off">
               </div>
               @error('email')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
               <div class="form-group">
                 <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password">
               </div>
               @error('password')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
               <div class="col-md-12">
                  <div class="form-group row d-flex flex-row justify-content-between">
                  <div class="col-sm-4">
                     <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" name="sex" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="male" checked>
                        Male
                        </label>
                     </div>
                  </div>
                  <div class="col-sm-5">
                     <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" name="sex" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="female">
                        Female
                        </label>
                     </div>
                  </div>
                  </div>
               </div>
               <div class="mt-3 d-flex flex-row justify-content-end">
                  <button type="submit" class="btn btn-primary text-light btn-rounded btn-fw">Sign up</button>
               </div>
            </form>
           </div>
         </div>
       </div>
     </div>
     <!-- content-wrapper ends -->
   </div>
   <!-- page-body-wrapper ends -->
 </div>
@endsection