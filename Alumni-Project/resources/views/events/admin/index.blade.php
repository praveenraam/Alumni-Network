@extends('layouts.app')
@section('title', 'Jobs')

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
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Job Openings</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                  <ul class="nearby-contct">
                                    @foreach($events as $event)
                                       <li style="list-style: none;">
                                          <div class="nearly-pepls">
                                                <div class="pepl-info">
                                                   <h5 class="card-title">{{ $event->title }}</h5>
                                                   <p class="card-text">{{ $event->description }}</p>
                                                   <p class="card-text"><strong>Event Deadline:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</p>
                                                   @if($event->coordinator_id == null)
                                                      <p class="card-text"><strong>Event Co-Ordinator :</strong> None accepted</p>
                                                   @else
                                                      <p class="card-text"><strong>Event Co-Ordinator :</strong> {{ $event->coordinator->name }}</p>
                                                   @endif
                                                </div>
                                          </div>
                                          
                                          <div style="display: flex; align-items: center; gap: 20px; margin-top: 20px;">
                                                <button class="mtr-btn btn btn-primary" style="height: auto;" onclick="window.location.href='/admin/events/{{$event->id}}/registration'">
                                                   <span>Registrations</span>
                                                </button>
                                                <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');" style="display: inline; margin: 0;">
                                                   @csrf
                                                   @method('DELETE')
                                                   <button type="submit" class="btn btn-danger" style="height: auto;"><span>Delete</span></button>
                                                </form>
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
