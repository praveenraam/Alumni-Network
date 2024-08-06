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
                                    @foreach($jobOpenings as $jobOpening)
                                     <li>
                                        <div class="nearly-pepls">
                                           {{-- <figure>
                                              <a href="time-line.html" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
                                           </figure> --}}
                                           <div class="pepl-info">
                                                {{-- <h4> {{ $jobOpening->title }}</h4> --}}
                                                <h5 class="card-title">{{ $jobOpening->title }}</h5>
                                                <p class="card-text">{{ $jobOpening->description }}</p>
                                                <p class="card-text">
                                                    <strong>Location & Company:</strong>
                                                    <span class="location-company">
                                                        <span>{{ $jobOpening->company }}</span> in
                                                        <span>{{ $jobOpening->location }}</span> 
                                                    </span>
                                                </p>
                                                <p class="card-text"><strong>Application Deadline:</strong> {{ \Carbon\Carbon::parse($jobOpening->application_deadline)->format('d M Y') }}</p>
                                                <p class="card-text"><strong>Type:</strong> {{ $jobOpening->type ? 'Job' : 'Internship' }}</p>
                                                <p class="card-text"><strong>Posted By:</strong> {{ $jobOpening->alumni->name }}</p>
                                              {{-- <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                              <span>ftv model</span> --}}
                                                @php
                                                   // Ensure the URL starts with http:// or https://
                                                   $link = $jobOpening->application_link;
                                                   if (!preg_match('/^https?:\/\//', $link)) {
                                                         $link = 'http://' . $link;
                                                   }
                                                @endphp
                                                <a href="{{ $link }}" title="" class="add-butn" data-ripple="" target="_blank">Click to apply</a>  
                                                <form action="{{ route('jobOpenings.destroy', $jobOpening->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job opening?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>                                                  
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
{{-- <div class="container">
    <h1>Job Openings</h1>
    @foreach($jobOpenings as $jobOpening)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $jobOpening->title }}</h5>
                <p class="card-text">{{ $jobOpening->description }}</p>
                <p class="card-text"><strong>Company:</strong> {{ $jobOpening->company }}</p>
                <p class="card-text"><strong>Location:</strong> {{ $jobOpening->location }}</p>
                <p class="card-text"><strong>Application Deadline:</strong> {{ $jobOpening->application_deadline->format('d M Y') }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $jobOpening->type ? 'Job' : 'Internship' }}</p>
            </div>
        </div>
    @endforeach
    @if($jobOpenings->isEmpty()) <p>No Jobs</p>
    @endif
</div> --}}
@endpush
