@extends('layouts.app')
@section('title', 'Registrations')

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
                            <ul class="nav nav-tabs mb-3">
                               <li class="nav-item"><a class="active" href="" data-toggle="tab">Registered Students</a></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active fade show">
                                  @if($registeredStudents->isEmpty())
                                    <p>No registrations for this event.</p>
                                  @else
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Event</th>
                                          <th>Event Date</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($registeredStudents as $registration)
                                          <tr>
                                            <td>{{ $registration->student->name }}</td>
                                            <td>{{ $registration->student->email }}</td>
                                            <td>{{ $registration->event->title }}</td>
                                            <td>{{ \Carbon\Carbon::parse($registration->event->event_date)->format('d M Y') }}</td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  @endif
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
