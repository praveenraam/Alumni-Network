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
                                                
                                                @if($event->coordinator_id == null)
                                                   
                                                   <form action="{{route('event.co-ordinate')}}" method="post">
                                                      @csrf
                                                      <input type="hidden" name="event_id" value="{{ $event->id }}">
                                                      <button type="submit" class="mtr-btn mt-3">
                                                         <span>Be Co-Ordinator</span>
                                                      </button> 
                                                   </form>  
                                                @else
                                                   <p class="card-text"><strong>Event Co-Ordinator :</strong> {{ $event->coordinator->name }}</p>
                                                
                                                   @if($event->coordinator_id == session('user_id'))
                                                      <button class="mtr-btn mt-3" onclick="window.location.href='/alumni/events/{{$event->id}}/registration'"><span>Registrations</span></button>
                                                   @endif
                                                @endif
                                           </div>
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
