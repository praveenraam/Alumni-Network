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
                         <h5>Janice Griffith</h5>
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
                                    <a href="#professional_info" class="nav-link" data-toggle="tab">Professional Info</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#volunteering" class="nav-link" data-toggle="tab">Volunteering</a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active show" id="personal_info">
                                    <ul class="basics">
                                       <li><strong>Name : </strong> </i>
                                          @if($alumni->Name != null)
                                            <p> {{ $alumni->Name }} </p>
                                          @else
                                             Need to set
                                          @endif
                                       </li>
                                       <li><strong>Roll No : </strong> </i>
                                          @if($alumni->roll_no != null)
                                             {{ $alumni->roll_no }}
                                          @else
                                             Need to set
                                          @endif
                                       </li>
                                       <li><strong>Email : </strong>
                                          @if($alumni->email != null)
                                             {{ $alumni->email }}
                                          @else
                                             Need to set
                                          @endif
                                       </li>
                                       <li>
                                          <strong>Contact No : </strong>
                                          @if($alumni->contact_no != null)
                                             {{ $alumni->contact_no }}
                                          @else
                                             Need to set
                                          @endif
                                       </li>
                                       <li>
                                          <strong>Date of Birth: </strong>
                                          @if($alumni->date_of_birth != null)
                                              {{ $alumni->date_of_birth }}
                                          @else
                                              Need to set
                                          @endif
                                      </li>
                                      <li>
                                          <strong>Specialization: </strong>
                                          @if($alumni->specialization != null)
                                              {{ $alumni->specialization }}
                                          @else
                                              Need to set
                                          @endif
                                      </li>
                                      <li>
                                          <strong>Department: </strong>
                                          @if($alumni->department != null)
                                              {{ $alumni->department }}
                                          @else
                                              Need to set
                                          @endif
                                      </li>
                                      <li>
                                          <strong>Degree: </strong>
                                          @if($alumni->degree != null)
                                              {{ $alumni->degree }}
                                          @else
                                              Need to set
                                          @endif
                                      </li>
                                      <li>
                                          <strong>Batch: </strong>
                                          @if($alumni->batch != null)
                                              {{ $alumni->batch }}
                                          @else
                                              Need to set
                                          @endif
                                      </li>                                      
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="professional_info" role="tabpanel">
                                    <div class="tab-pane fade active show" id="personal_info">
                                       <ul class="basics">
                                          <li>
                                             <strong>Current Job: </strong>
                                             @if($alumni->current_job != null)
                                                 {{ $alumni->current_job }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Company Name: </strong>
                                             @if($alumni->company_name != null)
                                                 {{ $alumni->company_name }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Industry: </strong>
                                             @if($alumni->industry != null)
                                                 {{ $alumni->industry }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Experience: </strong>
                                             @if($alumni->experience != null)
                                                 {{ $alumni->experience }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Skills: </strong>
                                             @if($alumni->skills != null)
                                                 {{ $alumni->skills }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>LinkedIn Profile: </strong>
                                             @if($alumni->linkedin_profile != null)
                                                 {{ $alumni->linkedin_profile }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>GitHub Profile: </strong>
                                             @if($alumni->github_profile != null)
                                                 {{ $alumni->github_profile }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Current City: </strong>
                                             @if($alumni->current_city != null)
                                                 {{ $alumni->current_city }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Current Country: </strong>
                                             @if($alumni->current_country != null)
                                                 {{ $alumni->current_country }}
                                             @else
                                                 Need to set
                                             @endif
                                         </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="volunteering" role="tabpanel">
                                    <div class="tab-pane fade active show" id="personal_info">
                                       <ul class="basics">
                                          <li>
                                             <strong>Mentorship Availability: </strong>
                                             @if($alumni->mentorship_availability == 1)
                                                 Available
                                             @else
                                                 Not available
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Willingness to Events: </strong>
                                             @if($alumni->webinars_participation == 1)
                                                Willing to participate
                                             @else
                                                Not willing to participate
                                             @endif
                                         </li>
                                         <li>
                                             <strong>Area of Interest: </strong>
                                             @if($alumni->area_of_interest != null)
                                                {{ $alumni->area_of_interest }}
                                             @else
                                                Need to set
                                             @endif
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
