@extends('layouts.app')
@section('title', 'Jobs')

@push('bodycontent')
<section>

   <style>
      
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
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Job Openings</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                  <ul class="nearby-contct">
                                    @foreach($events as $event)
                                       <li>
                                          <div class="nearly-pepls">
                                                <div class="pepl-info">
                                                   <h5 class="card-title">{{ $event->title }}</h5>
                                                   <p class="card-text">{{ $event->description }}</p>
                                                   <p class="card-text"><strong>Event Deadline:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</p>
                                                   <p class="card-text"><strong>Event Co-Ordinator:</strong> {{ $event->coordinator->name }}</p>
                                                   @php
                                                      $studentId = Session::get('user_id'); 
                                                      $isRegistered = $event->registrations->contains('student_id', $studentId);
                                                   @endphp
                                                   @if($isRegistered)
                                                   <p>You are already <strong> Registered </strong> for this event.</p>
                                                   @endif
                                                </div>
                                          </div>
                                          @if(!$isRegistered)
                                                <form action="{{ route('events.register', $event->id) }}" method="post">
                                                   @csrf
                                                   <button type="submit" class="mtr-btn"><span>Register</span></button>
                                                </form>
                                          @endif
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
