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
                                <form method="post" action="{{route('student.update', $student->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <!-- Personal Information -->
                                        {{-- <div class="form-group">
                                            <input type="text" name="name" value="{{ $student->name }}" >
                                            <label class="control-label" for="full_name">Name</label><i class="mtrl-select"></i>
                                        </div> --}}

                                        {{-- <div class="form-group">
                                            <input type="text" name="email" value="{{ $student->email }}" >
                                            <label class="control-label" for="name">email</label><i class="mtrl-select"></i>
                                        </div> --}}

                                        <div class="form-group">
                                            <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}" >
                                            <label class="control-label" for="date_of_birth">Date of Birth</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="contact_number" value="{{ $student->contact_number }}" >
                                            <label class="control-label" for="contact_number">Contact Number</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="address" value="{{ $student->address }}" >
                                            <label class="control-label" for="address">Address</label><i class="mtrl-select"></i>
                                        </div>

                                        <!-- Academic Information -->
                                        <div class="form-group">
                                            <input type="text" name="roll_number" value="{{ $student->roll_number }}" >
                                            <label class="control-label" for="roll_number">Roll Number</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="batch" value="{{ $student->batch }}" >
                                            <label class="control-label" for="batch">Batch (Year of Joining)</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="degree" value="{{ $student->degree }}" >
                                            <label class="control-label" for="degree">Degree</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="department" value="{{ $student->department }}" >
                                            <label class="control-label" for="department">Department</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="current_semester" value="{{ $student->current_semester }}" >
                                            <label class="control-label" for="current_semester">Current Semester/Year</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="cgpa" value="{{ $student->cgpa }}" >
                                            <label class="control-label" for="cgpa">CGPA</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="interests" value="{{ $student->interests }}">
                                            <label class="control-label" for="interests">Interests</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="skills" value="{{ $student->skills }}">
                                            <label class="control-label" for="skills">Skills</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="programming_languages" value="{{ $student->programming_languages }}">
                                            <label class="control-label" for="programming_languages">Programming Languages Known</label><i class="mtrl-select"></i>
                                        </div>

                                        <!-- Images -->

                                        <div class="form-group">
                                            <input type="file" name="student_profile_pic" accept="image/*">
                                            <label class="control-label" for="profile_pic">Profile Picture</label>
                                            <i class="mtrl-select"></i>
                                        </div>

                                        <!-- Additional Information -->

                                        <div class="form-group">
                                            <input type="text" name="linkedin_profile" value="{{ $student->linkedin_profile }}">
                                            <label class="control-label" for="linkedin_profile">LinkedIn Profile</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="github_profile" value="{{ $student->github_profile }}">
                                            <label class="control-label" for="github_profile">GitHub Profile</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="personal_website" value="{{ $student->personal_website }}">
                                            <label class="control-label" for="personal_website">Personal Website/Portfolio</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="certifications" value="{{ $student->certifications }}">
                                            <label class="control-label" for="certifications">Certifications</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="internships_status" value="{{ $student->internships_status }}">
                                            <label class="control-label" for="internships_status">Internships Status</label><i class="mtrl-select"></i>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="internships_experience">{{ $student->internships_experience }}</textarea>
                                            <label class="control-label" for="internships_experience">Internships Experience</label><i class="mtrl-select"></i>
                                        </div>

                                        <!-- Submit Button -->
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
