@extends('layouts.app')
@section('title', 'News Feed')

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
                                <h5 class="f-title"><i class="ti-info-alt"></i>Change Password</h5>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{route('alumni.change-password.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Personal Information -->
                                    <div class="form-group"> 
                                        <input type="password" name="current_password">
                                        <label class="control-label" for="full_name">Current Password</label><i class="mtrl-select"></i>
                                    </div>
                                    <div class="form-group"> 
                                        <input type="password" name="new_password" id="new_password" >
                                        <label class="control-label" for="full_name">New Password</label><i class="mtrl-select"></i>
                                    </div>
                                    
                                    <div class="form-group"> 
                                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" >
                                        <label class="control-label" for="full_name">New Password</label><i class="mtrl-select"></i>
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
