@extends('layouts.app')
@section('title', 'Profile Settings')

@push('bodycontent')
<section>
    <div class="gap gray-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                    @include('layouts.includes.sidebar')
                   <div class="col-lg-9">
                        <div class="central-meta">
                            <div class="editing-info">
                                <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{route('alumni.update', $alumni->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Personal Information -->
                                        {{-- <div class="form-group"> 
                                            <input type="text" name="name" value="{{$alumni->name}}" >
                                            <label class="control-label" for="full_name">Full Name</label><i class="mtrl-select"></i>
                                        </div> --}}
                                        {{-- <div class="form-group">
                                            <input type="text" name="roll_no"  value="{{$alumni->roll_no}}">
                                            <label class="control-label" for="roll_number">Roll Number</label><i class="mtrl-select"></i>
                                        </div> --}}                                     
                                        <div class="form-group">
                                            <input type="email" name="email"  value="{{$alumni->email}}">
                                            <label class="control-label" for="email">Email Address</label><i class="mtrl-select"></i>
                                        </div>
                                        {{-- <div class="form-group">
                                            <input type="file" name="profile_picture"  >
                                            <label class="control-label" for="profile_picture">Profile Picture</label><i class="mtrl-select"></i>
                                        </div> --}}
                                        <div class="form-group">
                                            <input type="text" name="contact_no"  value="{{$alumni->contact_no}}">
                                            <label class="control-label" for="contact_no">Contact Number</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="date_of_birth"  value="{{$alumni->date_of_birth}}">
                                            <label class="control-label" for="date_of_birth">Date of Birth</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Educational Background -->
                                        <div class="form-group">
                                            <input type="text" name="batch" value="{{$alumni->batch}}" >
                                            <label class="control-label" for="batch">Batch (e.g., 2018-2022)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="degree"  value="{{$alumni->degree}}">
                                            <label class="control-label" for="degree">Degree (e.g., B.Tech, M.Tech)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="department"  value="{{$alumni->department}}">
                                            <label class="control-label" for="department">Department (e.g., CSE, IT)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="specialization"  value="{{$alumni->specialization}}">
                                            <label class="control-label" for="specialization">Specialization</label><i class="mtrl-select"></i>
                                        </div>
                                        <!-- Images -->

                                        <div class="form-group">
                                            <input type="file" name="profile_pic" accept="image/*">
                                            <label class="control-label" for="profile_pic">Profile Picture</label>
                                            <i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Professional Information -->
                                        <div class="form-group">
                                            <input type="text" name="current_job"  value="{{$alumni->current_job}}">
                                            <label class="control-label" for="current_job">Current Job Title</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company_name" value="{{$alumni->company_name}}" >
                                            <label class="control-label" for="company_name">Company Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="industry" value="{{$alumni->industry}}" >
                                            <label class="control-label" for="industry">Industry</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="experience" value="{{$alumni->experience}}" >
                                            <label class="control-label" for="experience">Years of Experience</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="skills" value="{{$alumni->skills}}" >
                                            <label class="control-label" for="skills">Skills and Expertise</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="linkedin_profile" value="{{$alumni->linkedin_profile}}" >
                                            <label class="control-label" for="linkedin_profile">LinkedIn Profile</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="github_profile" value="{{$alumni->github_profile}}" >
                                            <label class="control-label" for="github_profile">GitHub Profile</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Engagement and Interests -->
                                        <div class="form-group">
                                            <select id="mentorship_availability" name="mentorship_availability"  >
                                                <option value="1" {{$alumni->mentorship_availability == 1 ? 'selected' : ''}}>Available</option>
                                                <option value="0" {{$alumni->mentorship_availability == 0 ? 'selected' : ''}}>Not Available</option>
                                            </select>
                                            <label class="control-label" for="mentorship_availability">Mentorship Availability</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="area_of_interest" value="{{$alumni->area_of_interest}}" >
                                            <label class="control-label" for="area_of_interest">Areas of Interest (e.g., Startups, Research, Community Service)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <select name="webinars_participation" id="webinar_participation">
                                                <option value="1">Available</option>
                                                <option value="0">Not Available</option>
                                            </select>
                                            <label class="control-label" for="webinars_participation">Willingness to events.</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Location Information -->
                                        <div class="form-group">
                                            <input type="text" name="current_city" value="{{$alumni->current_city}}" >
                                            <label class="control-label" for="current_city">Current City</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="current_country" value="{{$alumni->current_country}}" >
                                            <label class="control-label" for="current_country">Current Country</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="submit-btns">
                                            <button type="button" class="mtr-btn" onclick="window.history.back();"><span>Cancel</span></button>
                                            <button type="submit" class="mtr-btn"><span>Update</span></button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endpush
