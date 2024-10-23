@extends('layouts.app')
@section('title', 'Add Questions')

@push('bodycontent')
<section>

   <style>
      /* Add any custom CSS styling here */
   </style>

    <div class="gap gray-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                   @include('layouts.includes.sidebar')
                   <div class="col-lg-9">
                      <div class="central-meta">
                         <div class="frnds">
                            <ul class="nav nav-tabs">
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Add Question</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                  <ul class="nearby-contct">
                                      <li>
                                        <form action="{{ route('questions.store') }}" method="POST">
                                           @csrf
                                           <div class="form-group">                                              
                                             <input type="text" name="title" id="title"  required>
                                             <label for="title" class="control-label">Question Title</label>
                                             <i class="mtrl-select"></i>
                                           </div>
                                           

                                           <div class="form-group">
                                             <textarea type="text" name="body" id="body" required></textarea>
                                             <label for="body" class="control-label">Question Body</label>
                                             <i class="mtrl-select"></i>
                                           </div>

                                           <button type="submit" class="mtr-btn"><span>Add </span></button>
                                        </form>
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
</section>
@endpush
