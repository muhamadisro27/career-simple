@extends('layouts.app')

@section('content')

<div class="col-12 grid-margin">
  @if (session()->has('success'))
    <div class="alert alert-success mb-5">
      {{ session('success') }}
    </div>
  @endif
   <div class="card">
     <div class="card-body">
       <h4 class="card-title">Biodata</h4>
       <form action="{{ route('profile.update') }}" method="POST" class="form-sample">
         @method('PUT')
         @csrf
         <input type="hidden" name="academic_id" value="{{ old('academic_id', $user->academicRecord->id) }}" />
         <input type="hidden" name="job_id" value="{{ old('job_id', $user->jobRecord->id) }}" />
         <input type="hidden" name="training_id" value="{{ old('training_id', $user->trainingRecord->id) }}" />
         <input type="hidden" name="skill_id" value="{{ old('skill_id', $user->skill->id) }}" />
         <p class="card-description">
           Personal info
         </p>
         <div class="row">
           {{-- Name --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Name</label>
               <div class="col-sm-9">
                 <input type="text" value="{{ old('name', $user->name ) }}" class="form-control" name="name" />
               </div>
             </div>
           </div>
           {{-- ID Card Number --}}
           <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label">ID Card Number</label>
              <div class="col-sm-7">
                <input type="text" value="{{ old('id_card_number', $user->id_card_number ) }}" class="form-control" name="id_card_number" readonly />
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
                 <input type="date" value="{{ old('birthdate', $user->birthdate ) }}" class="form-control" name="birthdate" placeholder="dd/mm/yyyy"/>
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
                <input type="text" class="form-control" name="birthplace" value="{{ old('birthplace', $user->birthplace ) }}" />
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
                <input type="email" value="{{ old('email', $user->email ) }}" class="form-control" name="email" />
              </div>
            </div>
          </div>
          {{-- Phone Number --}}
          <div class="col-md-6">
           <div class="form-group row">
             <label class="col-sm-4 col-form-label">Phone Number</label>
             <div class="col-sm-8">
               <input type="number" class="form-control" name="phone_number" value="{{ old('phone_number', $user->phone_number ) }}"/>
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
                 <input type="text" name="address" class="form-control" value="{{ old('address', $user->address ) }}" />
               </div>
             </div>
           </div>
           {{-- Address Domicile --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Address Domicile</label>
               <div class="col-sm-9">
                 <input type="text" name="address_domicile" value="{{ old('address_domicile', $user->address_domicile ) }}" class="form-control" />
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Contact Closest Person</label>
               <div class="col-sm-9">
                 <input type="number" name="closest_person" class="form-control" value="{{ old('closest_person', $user->closest_person ) }}" />
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
                  <select name="educational_stage" class="form-control">
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
              </div>
            </div>
           {{-- Institution Name --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Institution Name</label>
               <div class="col-sm-9">
                 <input type="text" name="institution_name" value="{{ old('institution_name', $user->academicRecord->institution_name) }}" class="form-control" />
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
                  <input type="text" name="major" value="{{ old('major', $user->academicRecord->major) }}" class="form-control" />
                </div>
              </div>
            </div>
           {{-- Year --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Graduation Year</label>
               <div class="col-sm-9">
                 <input type="text" name="academic_year" value="{{ old('academic_year', $user->academicRecord->graduation_year) }}" class="form-control" />
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
                  <input type="text" name="gpa" value="{{ old('gpa', $user->academicRecord->gpa) }}" class="form-control" />
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
                <input type="text" name="company_name" value="{{ old('company_name', $user->jobRecord->company_name) }}" class="form-control" />
              </div>
            </div>
          </div>
           {{-- Last Position --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Last Position</label>
               <div class="col-sm-9">
                 <input type="text" name="last_position" value="{{ old('last_position', $user->jobRecord->last_position) }}" class="form-control" />
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
                  <input type="number" name="last_income" value="{{ old('last_income', $user->jobRecord->last_income) }}" class="form-control" />
                </div>
              </div>
            </div>
           {{-- Year --}}
           <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Year</label>
               <div class="col-sm-9">
                 <input type="text" name="job_year" value="{{ old('job_year', $user->jobRecord->year) }}" class="form-control" />
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
                  <input type="text" name="course_name" value="{{ old('course_name', $user->trainingRecord->course_name) }}" class="form-control" />
                </div>
              </div>
            </div>
            {{-- Sertifikat --}}
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Sertifikat</label>
                <div class="col-sm-9">
                  <select name="is_sertifikat" class="form-control">
                    <option value="true">Ya</option>
                    <option value="false">Tidak</option>
                  </select>
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
                 <input type="text" name="training_year" value="{{ old('training_year', $user->trainingRecord->year) }}" class="form-control" />
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
                  <input type="text" name="skill_title" value="{{ old('skill_title', $user->skill->title) }}" class="form-control" />
                </div>
              </div>
            </div>
         </div>
         {{-- Button --}}
         <div class="d-flex flex-row justify-content-end">
           <button type="submit" class="btn btn-primary text-light btn-rounded btn-fw">Submit</button>
         </div>
       </form>
     </div>
   </div>
 </div>
@endsection