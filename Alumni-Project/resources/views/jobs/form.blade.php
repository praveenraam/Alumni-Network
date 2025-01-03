@extends('layouts.app')

@section('title', 'Create Job Opening')

@push('bodycontent')
<section>
    <div class="gap gray-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                   @include('layouts.includes.sidebar')
                   <div class="col-lg-9">
                     <div class="loadMore">
                         <div class="central-meta">
                             <div class="editing-info">
                                 <h5 class="f-title"><i class="ti-info-alt"></i> Create Job Opening</h5>
                                 <div class="form-group">
                                     @if ($errors->any())
                                         <div class="alert alert-danger fade-out" id="error-alert">
                                             @foreach ($errors->all() as $error)
                                                 <p class="text-danger">{{ $error }}</p>
                                             @endforeach
                                         </div>
                                     @endif
                                 </div>
                                  <form action="{{Route('jobOpenings.insert')}}" method="POST">
                                    @csrf
                                       <div class="form-group">
                                          <input type="text" name="title" id="title"
                                             required="required">
                                          <label class="control-label" for="title">Job Title</label>
                                          <i class="mtrl-select"></i>
                                       </div>
                                       <div class="form-group">
                                             <textarea name="description" id="description" required="required"></textarea>
                                             <label class="control-label" for="description">Job
                                                Description</label>
                                             <i class="mtrl-select"></i>
                                       </div>
                                       <div class="form-group">
                                             <input type="text" name="company" id="company"
                                                required="required">
                                             <label class="control-label" for="company">Company</label>
                                             <i class="mtrl-select"></i>
                                       </div>
                                       <div class="form-group">
                                             <input type="text" name="location" id="location"
                                                required="required">
                                             <label class="control-label" for="location">Location</label>
                                             <i class="mtrl-select"></i>
                                       </div>
                                       <div class="form-group">
                                             <input type="text" name="application_link" id="application_link"
                                                value="{{ old('application_link') }}" required="required">
                                             <label class="control-label" for="application_link">Application
                                                Link</label>
                                             <i class="mtrl-select"></i>
                                       </div>
                                       <div class="form-group">
                                             <input type="date" name="application_deadline"
                                                id="application_deadline" required="required">
                                             <label class="control-label" for="application_deadline">Application
                                                Deadline</label>
                                             <i class="mtrl-select"></i>
                                       </div>
                                       <div class="form-group">
                                             <select name="type" id="type" required="required">
                                                <option value="" disabled selected>Select Job Type
                                                </option>
                                                <option value="1">Job</option>
                                                <option value="0">Internship</option>
                                             </select>
                                             <i class="mtrl-select"></i>
                                       </div>
                                       <div class="submit-btns">
                                             <button type="button" class="mtr-btn"
                                                onclick="window.history.back();"><span>Cancel</span></button>
                                             <button type="submit" class="mtr-btn"><span>Save</span></button>
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
       </div>
    </div>
</section>
@endpush
