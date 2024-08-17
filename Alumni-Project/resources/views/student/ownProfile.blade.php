@extends('layouts.app')
@section('title', 'Profile')

@push('bodycontent')
<section>
    <div class="feature-photo">
        <figure class="cover-container d-flex justify-content-center align-items-center overflow-hidden">
            <img src="{{ asset('storage/ANP-Cover.png') }}" alt="Cover Post" class="img-fluid">
        </figure>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                       <figure class="text-center">
                          <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; margin: auto;">
                            @if($student->std_profile_picture)
                            <img src="{{ asset('storage/' . $student->std_profile_picture) }}" alt="Profile Picture" class="img-fluid">
                            @else
                                <img src="{{ asset('storage/default.png') }}" alt="Profile Picture" class="img-fluid">
                            @endif
                          </div>
                       </figure>       
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5> {{$student->name}}</h5>
                                <span>{{$student->department}}</span>
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
                                 Welcome to your Student profile page! Here, you can view your personal and professional details. Keeping your profile information current helps us stay connected and ensures you receive the latest updates, invitations to events, and opportunities for networking and mentorship.
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
                                                        if ($isUrl && !preg_match("/^http(s)?:\/\//", $linkedIn)) {
                                                            $linkedIn = 'https://' . $linkedIn;
                                                        }
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
                                                        if ($isUrl && !preg_match("/^http(s)?:\/\//", $github)) {
                                                            $github = 'https://' . $github;
                                                        }
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
