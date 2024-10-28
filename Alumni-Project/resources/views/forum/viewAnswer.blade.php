@extends('layouts.app')
@section('title', 'Add Questions')

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
                         <div class="frnds">
                            <ul class="nav nav-tabs">
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Question</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                  <ul class="nearby-contct">

                                       <!-- Display the question details -->
                                      <h3>{{ $question->title }}</h3>
                                      <p>{{ $question->body }}</p>
                                      <hr>
                                      @if(Auth::guard('alumni')->check())
                                          <form action="{{ route('answers.store', $question->id) }}" method="POST">
                                             @csrf
                                             <div class="form-group">
                                                <textarea type="text" name="body" required required></textarea>
                                                <label for="body" class="control-label">Answer the Question</label>
                                             </div>
                                             <button type="submit" class="mtr-btn"><span>Submit Answer</span></button>
                                          </form>
                                          <hr>
                                       @endif
                                       
                                      <li>

                                        
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
