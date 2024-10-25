@extends('layouts.app')
@section('title', 'Questions')

@push('bodycontent')
<section>

   <style>
      .btn-light-blue {
        background-color: #088dcd;
        color: white;
      }
      .btn-light-blue:hover {
        color: white;
      }
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
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Questions</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                    <ul class="nearby-contct">
                                        @foreach($questions as $question)
                                          <li>
                                             <div class="nearby-pepls" style="margin-bottom: 12px">
                                                   <div class="pepl-info">
                                                      <h5>{{ $question->title }}</h5>
                                                      <p>{{ $question->body }} </p>
                                                   </div>
                                                   <a href="forum/answer/{{$question->id}}" class="btn btn-light-blue" style="margin-left:10px">Answers Question</a>
                                             </div>
                                          </li>
                                        @endforeach
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
