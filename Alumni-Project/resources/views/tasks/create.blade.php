@extends('layouts.app')
@section('title', 'Create Event')

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
                                
                                <div class="central-meta">
                                    <div class="editing-info">
                                        <h5 class="f-title"><i class="ti-info-alt"></i> Create Event</h5>
                                        <div class="form-group">
                                        @if ($errors->any())
                                            <div class="alert alert-danger fade-out" id="error-alert">
                                                @foreach ($errors->all() as $error)
                                                    <p class="text-danger">{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif
                                        </div>
                                        <form action="{{ route('tasks.store') }}" method="POST">
                                            @csrf
                                        
                                            <div class="form-group">
                                                <input type="text" name="title" >
                                                <label class="control-label" for="title">Task Title</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                        
                                            <div class="form-group">
                                                <textarea name="description"></textarea>
                                                <label class="control-label" for="description">Task Description</label>
                                                <i class="mtrl-select"></i>
                                            </div>                                            
                                        
                                            <div class="form-group">
                                                <input type="date" name="assigned_date" />
                                                <label class="control-label" for="assigned_date">Assigned Date</label>
                                                <i class="mtrl-select"></i>
                                            </div>
                                        
                                            <button type="submit" class="mtr-btn"><span>Create</span></button>
                                        </form>
                                    
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
                }, 6000); 
            }
        });
    </script>
@endpush
