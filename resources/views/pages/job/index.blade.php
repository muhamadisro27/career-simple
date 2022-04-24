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
                 <h4 class="card-title card-title-dash">List Job</h4>
                <p class="card-subtitle card-subtitle-dash">Job's Available</p>
               </div>
               {{-- <div>
                 <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
               </div> --}}
             </div>
             <div class="table-responsive  mt-1">
               <table class="table select-table">
                 <thead>
                   <tr>
                     <th>Title</th>
                     <th>Until</th>
                     <th>Quota</th>
                     @role('user')
                     <th></th>
                     @endrole
                     @role('admin')
                     <th></th>
                     @endrole
                   </tr>
                 </thead>
                 <tbody>
                    @foreach ($jobs as $job)   
                    <tr>
                      <td>
                        <div class="d-flex ">
                          {{-- <img src="images/faces/face1.jpg" alt=""> --}}
                          <div>
                            <h6>{{ $job->title }}</h6>
                            <p>{{ $job->company }} - {{ Carbon\Carbon::create($job->created_at)->diffForHumans() }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p>{{ Carbon\Carbon::parse($job->date_to)->translatedFormat('d F Y') }}</p>
                      </td>
                      <td>{{ $job->quota }}</td>
                      @role('user')
                      <td>
                         <form action="{{ route('candidate.apply', $job->id) }}" method="post">
                           @csrf
                           <button style="color:white;" onclick="return confirm('Apply this job ?')" class="btn btn-success btn-rounded btn-fw">Apply</button>
                        </form>
                      </td>
                      @endrole
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