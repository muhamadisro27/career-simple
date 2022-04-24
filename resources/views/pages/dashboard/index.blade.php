@extends('layouts.app')


@section('content')
<div class="row">
   <div class="col-sm-12 d-flex flex-column">
     <div class="row flex-grow">
       <div class="col-12 grid-margin stretch-card">
         <div class="card card-rounded">
           <div class="card-body">
             <div class="d-sm-flex justify-content-between align-items-start">
               <div>
                 <h4 class="card-title card-title-dash">Applicant Candidate</h4>
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
                    <th>Candidate</th>
                    <th>Applied Position</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($applies as $apply)   
                   <tr>
                     <td>
                       <div class="d-flex ">
                         {{-- <img src="images/faces/face1.jpg" alt=""> --}}
                         <div>
                           <h6>{{ $apply['candidate']['profile']['name'] }}</h6>
                           <p>{{ $apply['candidate']['profile']['birthplace'] }} - {{ Carbon\Carbon::parse($apply['candidate']['profile']['birthdate'])->translatedFormat('d F Y') }}</p>
                         </div>
                       </div>
                     </td>
                     <td>
                        {{ $apply['job']['title'] }}
                     </td>
                     <td>
                        <a href="{{ route('dashboard.detail_candidate', $apply->id) }}" style="color:white;" class="btn btn-success btn-rounded btn-fw">Detail</a>
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