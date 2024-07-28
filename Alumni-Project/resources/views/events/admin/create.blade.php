@extends('layouts.app')
@section('title', 'Create Job Opening')

@push('bodycontent')
<section>
    <style>
        .fade-out {
            transition: opacity 1s ease-in-out;
        }
    </style>
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
                                          <form action="{{ route('events.store') }}" method="POST">
                                                @csrf
                                                <input type="text" name="title" placeholder="Event Title">
                                                <textarea name="description" placeholder="Event Description"></textarea>
                                                <input type="date" name="event_date">
                                                <button type="submit">Create Event</button>
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
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                setTimeout(function() {
                    errorAlert.style.opacity = '0';
                }, 5000);

                setTimeout(function() {
                    errorAlert.style.display = 'none';
                }, 6000); // 1 second after starting the fade out
            }
        });
    </script>
@endpush
