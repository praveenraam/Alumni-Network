@extends('layouts.app')
@section('title', 'Profile')

@push('bodycontent')
<section>
    <div class="feature-photo">
       <figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
       <div class="add-btn">
          <span>1205 followers</span>
          <a href="#" title="" data-ripple="">Add Friend<span class="ripple"><span class="ink" style="height: 110px; width: 110px; background-color: rgb(217, 217, 217); top: -45.325px; left: -14.475px;"></span></span></a>
       </div>
       <form class="edit-phto">
          <i class="fa fa-camera-retro"></i>
          <label class="fileContainer">
          Edit Cover Photo
          <input type="file">
          </label>
       </form>
       <div class="container-fluid">
          <div class="row merged">
             <div class="col-lg-2 col-sm-3">
                <div class="user-avatar">
                   <figure>
                      <img src="images/resources/user-avatar.jpg" alt="">
                      <form class="edit-phto">
                         <i class="fa fa-camera-retro"></i>
                         <label class="fileContainer">
                         Edit Display Photo
                         <input type="file">
                         </label>
                      </form>
                   </figure>
                </div>
             </div>
             <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                   <ul>
                      <li class="admin-name">
                         <h5>  Griffith</h5>
                         <span>department</span>
                      </li>
                      <li>
                         <a class="active" href="time-line.html" title="" data-ripple="">time line</a>
                         <a class="" href="#" title="" data-ripple="">more</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
<section>
    <div class="gap gray-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                   @include('layouts.includes.sidebar')
                   <div class="col-lg-9">
                     <div class="central-meta">
                        <div class="about">
                           <div class="personal">
                              <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                              <p>
                                 Welcome to your alumni profile page! Here, you can review and update your personal and professional details. Keeping your profile information current helps us stay connected and ensures you receive the latest updates, invitations to events, and opportunities for networking and mentorship.
                              </p>
                           </div>
                           <div class="d-flex flex-row mt-2">
                              <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                                 <li class="nav-item">
                                    <a href="#personal_info" class="nav-link active show" data-toggle="tab">Profile Info</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#academic_info" class="nav-link" data-toggle="tab">Academic Info</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#additional_info" class="nav-link" data-toggle="tab">Additional Info</a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active show" id="personal_info">
                                    <ul class="basics">
                                        <li >
                                            <strong>Name:</strong> 
                                            {{ $student->name ?? 'Need to set' }}
                                        </li>
                                        {{-- This is a different type, use if needed --}}
                                        {{-- <li class="list-group-item">
                                            <strong>Name:</strong> 
                                            {{ $student->name ?? 'Need to set' }}
                                        </li> --}}
                                        <li>
                                            <strong>Date of Birth:</strong> 
                                            {{ $student->date_of_birth ?? 'Need to set' }}
                                        </li>
                                    
                                        <li>
                                            <strong>Contact Number:</strong> 
                                            {{ $student->contact_number ?? 'Need to set' }}
                                        </li>
                                        <li>
                                            <strong>Email:</strong> 
                                            <a style="text-transform: lowercase;" href="mailto:{{ $student->email }}">{{ $student->email }}</a>
                                        </li>
                                        <li>
                                            <strong>Address:</strong> 
                                            {{ $student->address ?? 'Need to set' }}
                                        </li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="academic_info" role="tabpanel">
                                    <div class="tab-pane fade active show" id="personal_info">
                                       <ul class="basics">
                                            <li>
                                                <strong>Roll Number:</strong> 
                                                {{ $student->roll_number ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Batch (Year of Joining):</strong> 
                                                {{ $student->batch ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Degree:</strong> 
                                                {{ $student->degree ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Department:</strong> 
                                                {{ $student->department ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Current Semester/Year:</strong> 
                                                {{ $student->current_semester ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>CGPA:</strong> 
                                                {{ $student->cgpa ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Interests:</strong> 
                                                {{ $student->interests ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Skills:</strong> 
                                                {{ $student->skills ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Programming Languages Known:</strong> 
                                                {{ $student->programming_languages ?? 'Need to set' }}
                                            </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="additional_info" role="tabpanel">
                                    <div class="tab-pane fade active show" id="personal_info">
                                       <ul class="basics">
                                            <li>
                                                <strong>LinkedIn Profile:</strong>
                                                @if($student->linkedin_profile == null)
                                                    Need to set
                                                @else  
                                                    @php
                                                        $linkedIn = $student->linkedin_profile;
                                                        $isUrl = strpos($linkedIn, '.com') !== false;
                                                    @endphp
                                            
                                                    @if($isUrl)
                                                        <a href="{{ $linkedIn }}" target="_blank" rel="noopener noreferrer" style="text-decoration: underline;">Click to Redirect</a>
                                                    @else
                                                        {{ $linkedIn }}
                                                    @endif
                                                @endif
                                            </li>
                                        
                                            <li>
                                                <strong>GitHub Profile:</strong> 
                                                @if($student->github_profile == null)
                                                    Need to set
                                                @else  
                                                    @php
                                                        $github = $student->github_profile;
                                                        $isUrl = strpos($github, '.com') !== false;
                                                    @endphp
                                            
                                                    @if($isUrl)
                                                        <a href="{{ $github }}" target="_blank" rel="noopener noreferrer" style="text-decoration: underline;">Click to Redirect</a>
                                                    @else
                                                        {{ $github }}
                                                    @endif
                                                @endif
                                            </li>
                                            <li>
                                                <strong>Personal Website/Portfolio:</strong> 
                                                @if($student->personal_website == null)
                                                    Need to set
                                                @else
                                                    @php
                                                        $personalWebsite = $student->personal_website;
                                                        if (!preg_match("~^(?:f|ht)tps?://~i", $personalWebsite)) {
                                                            $personalWebsite = "http://" . $personalWebsite;
                                                        }
                                                    @endphp
                                                    <a href="{{ $personalWebsite }}" target="_blank" rel="noopener noreferrer"style="text-decoration: underline;">Click to  Redirect</a>
                                                @endif
                                            </li>
                                            
                                        
                                            <li>
                                                <strong>Certifications:</strong> 
                                                {{ $student->certifications ?? 'Need to set' }}
                                            </li>
                                        
                                            <li>
                                                <strong>Internships Status:</strong> 
                                                {{ $student->internships_status ?? 'Need to set' }}
                                            </li>
                                            <li>
                                                <strong>Internships Experience:</strong> 
                                                {{ $student->internships_experience ?? 'Need to set' }}
                                            </li>                         
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
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
