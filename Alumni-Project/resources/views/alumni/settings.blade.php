@extends('layouts.app')
@section('title', 'Profile Settings')

@push('bodycontent')
<section>
    <div class="gap gray-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                   <div class="col-lg-3">
                      <aside class="sidebar static">
                         <div class="widget">
                            <h4 class="widget-title">Recent Activity</h4>
                            <ul class="activitiez">
                               <li>
                                  <div class="activity-meta">
                                     <i>10 hours Ago</i>
                                     <span><a title="" href="#">Commented on Video posted </a></span>
                                     <h6>by <a href="time-line.html">black demon.</a></h6>
                                  </div>
                               </li>
                               <li>
                                  <div class="activity-meta">
                                     <i>30 Days Ago</i>
                                     <span><a title="" href="#">Posted your status. “Hello guys, how are you?”</a></span>
                                  </div>
                               </li>
                               <li>
                                  <div class="activity-meta">
                                     <i>2 Years Ago</i>
                                     <span><a title="" href="#">Share a video on her timeline.</a></span>
                                     <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                  </div>
                               </li>
                            </ul>
                         </div>
                         <div class="widget stick-widget" style="">
                            <h4 class="widget-title">Edit info</h4>
                            <ul class="naves">
                               <li>
                                  <i class="ti-info-alt"></i>
                                  <a href="edit-profile-basic.html" title="">Basic info</a>
                               </li>
                               <li>
                                  <i class="ti-mouse-alt"></i>
                                  <a href="edit-work-eductation.html" title="">Education &amp; Work</a>
                               </li>
                               <li>
                                  <i class="ti-heart"></i>
                                  <a href="edit-interest.html" title="">My interests</a>
                               </li>
                               <li>
                                  <i class="ti-settings"></i>
                                  <a href="edit-account-setting.html" title="">account setting</a>
                               </li>
                               <li>
                                  <i class="ti-lock"></i>
                                  <a href="edit-password.html" title="">change password</a>
                               </li>
                            </ul>
                         </div>
                      </aside>
                   </div>
                   <div class="col-lg-9">
                        <div class="central-meta">
                            <div class="editing-info">
                                <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>
                                <form method="post">
                                        @csrf
                                        <!-- Personal Information -->
                                        <div class="form-group">
                                            <input type="text" name="name" required="required">
                                            <label class="control-label" for="full_name">Full Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="roll_no" required="required">
                                            <label class="control-label" for="roll_number">Roll Number</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" required="required">
                                            <label class="control-label" for="email">Email Address</label><i class="mtrl-select"></i>
                                        </div>
                                        {{-- <div class="form-group">
                                            <input type="file" name="profile_picture" required="required">
                                            <label class="control-label" for="profile_picture">Profile Picture</label><i class="mtrl-select"></i>
                                        </div> --}}
                                        <div class="form-group">
                                            <input type="text" name="contact_number" required="required">
                                            <label class="control-label" for="contact_number">Contact Number</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="date_of_birth" required="required">
                                            <label class="control-label" for="date_of_birth">Date of Birth</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Educational Background -->
                                        <div class="form-group">
                                            <input type="text" name="batch" required="required">
                                            <label class="control-label" for="batch">Batch (e.g., 2018-2022)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="degree" required="required">
                                            <label class="control-label" for="degree">Degree (e.g., B.Tech, M.Tech)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="department" required="required">
                                            <label class="control-label" for="department">Department (e.g., CSE, IT)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="specialization" required="required">
                                            <label class="control-label" for="specialization">Specialization</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Professional Information -->
                                        <div class="form-group">
                                            <input type="text" name="current_job_title" required="required">
                                            <label class="control-label" for="current_job_title">Current Job Title</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company_name" required="required">
                                            <label class="control-label" for="company_name">Company Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="industry" required="required">
                                            <label class="control-label" for="industry">Industry</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="years_of_experience" required="required">
                                            <label class="control-label" for="years_of_experience">Years of Experience</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="skills_expertise" required="required">
                                            <label class="control-label" for="skills_expertise">Skills and Expertise</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="url" name="linkedin_profile" required="required">
                                            <label class="control-label" for="linkedin_profile">LinkedIn Profile</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="other_professional_networks" required="required">
                                            <label class="control-label" for="other_professional_networks">Other Professional Networks (e.g., GitHub, Behance)</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Engagement and Interests -->
                                        <div class="form-group">
                                            <input type="text" name="mentorship_availability" required="required">
                                            <label class="control-label" for="mentorship_availability">Mentorship Availability</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="areas_of_interest" required="required">
                                            <label class="control-label" for="areas_of_interest">Areas of Interest (e.g., Startups, Research, Community Service)</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="webinars_participation" required="required">
                                            <label class="control-label" for="webinars_participation">Willingness to participate in webinars, workshops, etc.</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="preferred_communication_channels" required="required">
                                            <label class="control-label" for="preferred_communication_channels">Preferred Communication Channels (e.g., Email, Phone, Social Media)</label><i class="mtrl-select"></i>
                                        </div>
                                    
                                        <!-- Location Information -->
                                        <div class="form-group">
                                            <input type="text" name="current_city" required="required">
                                            <label class="control-label" for="current_city">Current City</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="current_country" required="required">
                                            <label class="control-label" for="current_country">Current Country</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="submit-btns">
                                            <button type="button" class="mtr-btn"><span>Cancel</span></button>
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
