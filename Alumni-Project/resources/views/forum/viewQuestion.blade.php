@extends('layouts.app')
@section('title', 'Questions')

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
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Questions</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                    <ul class="nearby-contct">
                                        @foreach($questions as $question)
                                          <a href="{{ route('question.answers', ['id' => $question->id]) }}">
                                             <div class="nearby-pepls">
                                                   <div class="pepl-info">
                                                      <h5>{{ $question->title }}</h5>
                                                      <p>{{ $question->body }} </p>
                                                   </div>
                                             </div>
                                          </a>
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
