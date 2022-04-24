@extends('layouts.app')


@section('content')
<div class="row">
   <div class="col-sm-12 d-flex flex-column">
     <div class="row flex-grow">
       <div class="col-12 grid-margin stretch-card">
        @if (session()->has('success'))
          <div class="alert alert-success mb-5">
            {{ session('success') }}
          </div>
        @endif
         <div class="card card-rounded">
           <div class="card-body">
             <div class="d-sm-flex justify-content-between align-items-start">
               <div>
                 <h4 class="card-title card-title-dash">My Application</h4>
                {{-- <p class="card-subtitle card-subtitle-dash">You have applied 10 times</p> --}}
               </div>
               {{-- <div>
                 <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
               </div> --}}
             </div>
             <div class="table-responsive  mt-1">
              <table class="table select-table">
                <thead>
                  <tr>
                    <th>Job</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($applies as $apply)   
                   <tr>
                     <td>
                       <div class="d-flex ">
                         {{-- <img src="images/faces/face1.jpg" alt=""> --}}
                         <div>
                           <h6>{{ $apply['job']['title'] }}</h6>
                           <p>{{ $apply['job']['company'] }} - {{ Carbon\Carbon::create($apply['created_at'])->diffForHumans() }}</p>
                         </div>
                       </div>
                     </td>
                   </tr>
                   @endforeach
                </tbody>
              </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection