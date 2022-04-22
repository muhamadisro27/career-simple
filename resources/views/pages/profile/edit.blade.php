@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin">
   <div class="card">
     <div class="card-body">
       <h4 class="card-title">Biodata</h4>
       <form action="{{ route('profile.update') }}" method="POST" class="form-sample">
         @method('PUT')
         @csrf
         <p class="card-description">
           Personal info
         </p>
         <div class="row">
           {{-- Name --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Name</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" name="name" />
               </div>
             </div>
           </div>
           {{-- ID Card Number --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label">ID Card Number</label>
              <div class="col-sm-7">
                <input type="number" class="form-control" name="id_card_number" readonly />
              </div>
            </div>
          </div>
         </div>
         <div class="row">
           {{-- Sex --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Sex</label>
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
          {{-- Date of Birth --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Date of Birth</label>
               <div class="col-sm-9">
                 <input type="date" class="form-control" name="birthdate" placeholder="dd/mm/yyyy"/>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           {{-- Birth of Place --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Birth of Place</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="birthplace" />
              </div>
            </div>
          </div>
          {{-- Religion --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Religion</label>
              <div class="col-sm-9">
                <select name="religion" class="form-control">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
            </div>
          </div>
         </div>
         <div class="row">
           {{-- Blood Type --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Blood Type</label>
              <div class="col-sm-9">
                <select name="blood_type" class="form-control">
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                  <option value="-">-</option>
                </select>
              </div>
            </div>
          </div>
           {{-- Status --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
                <select name="status" class="form-control">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>
              </div>
            </div>
          </div>
         </div>
         <div class="row">
          {{-- Email --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" />
              </div>
            </div>
          </div>
          {{-- Phone Number --}}
          <div class="col-md-6">
           <div class="form-group row">
             <label class="col-sm-4 col-form-label">Phone Number</label>
             <div class="col-sm-8">
               <input type="number" class="form-control" name="phone_number"/>
             </div>
           </div>
         </div>
        </div>
         <p class="card-description">
           Address
         </p>
         <div class="row">
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Address</label>
               <div class="col-sm-9">
                 <input type="text" name="address" class="form-control" />
               </div>
             </div>
           </div>
           {{-- Address Domicile --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Address Domicile</label>
               <div class="col-sm-9">
                 <input type="text" name="address_domicile" class="form-control" />
               </div>
             </div>
           </div>
         </div>
         {{-- Closest Person --}}
         <div class="row">
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Contact Closest Person</label>
               <div class="col-sm-9">
                 <input type="number" name="closest_person" class="form-control" />
               </div>
             </div>
           </div>
         </div>
         <div class="d-flex flex-row justify-content-end">
           <button type="submit" class="btn btn-primary text-light btn-rounded btn-fw">Submit</button>
         </div>
       </form>
     </div>
   </div>
 </div>
@endsection