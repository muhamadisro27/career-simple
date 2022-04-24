@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin">
   <div class="card">
     <div class="card-body">
       <h4 class="card-title">Biodata</h4>
         <p class="card-description">
           Personal info
         </p>
         <div class="row">
           {{-- Name --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Name</label>
               <div class="col-sm-9">
                 <p>{{ $candidate['candidate']['profile']['name'] }}</p>
               </div>
             </div>
           </div>
           {{-- ID Card Number --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label">ID Card Number</label>
              <div class="col-sm-7">
                <p>{{  $candidate['candidate']['profile']['id_card_number'] }}</p>
              </div>
            </div>
          </div>
         </div>
         <div class="row">
           {{-- Sex --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Sex</label>
               <p>{{ $candidate['candidate']['profile']['sex']  }}</p>
            </div>
          </div>
          {{-- Date of Birth --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Birth</label>
               <p>{{ $candidate['candidate']['profile']['birthplace'] }}{{ Carbon\Carbon::parse($candidate['candidate']['profile']['birthdate'])->translatedFormat('d F Y') }}</p>
             </div>
           </div>
         </div>
         <div class="row">
           {{-- Birth of Place --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Religion</label>
              <div class="col-sm-9">
                <p>{{ $candidate['candidate']['profile']['religion'] }}</p>
              </div>
            </div>
          </div>
          {{-- Religion --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Religion</label>
              <div class="col-sm-9">
               <p>{{ $candidate['candidate']['profile']['blood_type'] }}</p>
              </div>
            </div>
          </div>
         </div>
         <div class="row">
           {{-- Blood Type --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
                <p>{{ $candidate['candidate']['profile']['status'] }}</p>
              </div>
            </div>
          </div>
           {{-- Status --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Email</label>
              <p>{{ $candidate['candidate']['profile']['email'] }}</p>
            </div>
          </div>
         </div>
         <div class="row">
          {{-- Email --}}
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Phone Number</label>
              <div class="col-sm-9">
               <p>{{ $candidate['candidate']['profile']['phone_number'] }}</p>
              </div>
            </div>
          </div>
          {{-- Phone Number --}}
          <div class="col-md-6">
           <div class="form-group row">
             <label class="col-sm-4 col-form-label">Closest Contact Person</label>
             <div class="col-sm-8">
               <p>{{ $candidate['candidate']['profile']['closest_person'] }}</p>
             </div>
           </div>
         </div>
        </div>
         <p class="card-description">
           Address
         </p>
         <div class="row">
           {{-- Address --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Address</label>
               <div class="col-sm-9">
                 <p>{{ $candidate['candidate']['profile']['address'] }}</p>
               </div>
             </div>
           </div>
           {{-- Address Domicile --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Address Domicile</label>
               <div class="col-sm-9">
                 <p>{{ $candidate['candidate']['profile']['address_domicile'] }}</p>
               </div>
             </div>
           </div>
         </div>
         <p class="card-description">
          Last Academic Record
         </p>
         <div class="row">
            {{-- Academic Record --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Academic</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['academicRecord']['educational_stage'] }}</p>
                </div>
              </div>
            </div>
           {{-- Institution Name --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Institution Name</label>
               <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['academicRecord']['institution_name'] }}</p>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
            {{-- Major --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Major</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['academicRecord']['major'] }}</p>
                </div>
              </div>
            </div>
           {{-- Year --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Graduation Year</label>
               <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['academicRecord']['graduation_year'] }}</p>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
            {{-- GPA --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">GPA</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['academicRecord']['gpa'] }}</p>
                </div>
              </div>
            </div>
         </div>
         <p class="card-description">
          Last Job Record
         </p>
         <div class="row">
           {{-- Company Name --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Company Name</label>
              <div class="col-sm-9">
               <p>{{ $candidate['candidate']['profile']['jobRecord']['company_name'] }}</p>
              </div>
            </div>
          </div>
           {{-- Last Position --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Last Position</label>
               <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['jobRecord']['last_position'] }}</p>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
            {{-- Last Income --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Income</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['jobRecord']['last_income'] }}</p>
                </div>
              </div>
            </div>
           {{-- Year --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Year</label>
               <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['jobRecord']['year'] }}</p>
               </div>
             </div>
           </div>
         </div>
         <p class="card-description">
          Training Record
         </p>
         <div class="row">
            {{-- Course Name --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Course Name</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['trainingRecord']['course_name'] }}</p>
                </div>
              </div>
            </div>
            {{-- Sertifikat --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Sertifikat</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['trainingRecord']['is_certificate'] === 1 ? 'Ada' : 'Tidak Ada' }}</p>
                </div>
              </div>
            </div>
         </div>
         <div class="row">
           {{-- Year --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Year</label>
               <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['trainingRecord']['year'] }}</p>
               </div>
             </div>
           </div>
         </div>
         <p class="card-description">
          Skill
         </p>
         <div class="row">
            {{-- Skill --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Skill</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['profile']['skill']['title'] }}</p>
                </div>
              </div>
            </div>
            {{-- Salary Expected --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Salary Expected</label>
                <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['salary_expected'] }}</p>
                </div>
              </div>
            </div>
         </div>
         <div class="row">
           {{-- Willing --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Willing to be placed anywhere</label>
              <div class="col-sm-9">
                  <p>{{ $candidate['candidate']['is_willing_placed'] === 1 ? 'Ya' : 'Tidak' }}</p>
              </div>
            </div>
          </div>
         </div>
         <p class="card-description">
            Applied Position
           </p>
           <div class="row">
              {{-- Course Name --}}
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Applied Position</label>
                  <div class="col-sm-9">
                    <p>{{ $candidate['job']['title'] }}</p>
                  </div>
                </div>
              </div>
              {{-- Sertifikat --}}
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Perusahaan</label>
                  <div class="col-sm-9">
                     <p>{{ $candidate['job']['company'] }}</p>
                  </div>
                </div>
              </div>
           </div>
     </div>
   </div>
 </div>
@endsection