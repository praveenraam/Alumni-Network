@extends('layouts.app')
@section('title', 'Tasks')

@push('bodycontent')
<section>
    <style>
        .fade-out {
            transition: opacity 1s ease-in-out;
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
                                        <li class="nav-item"><a class="active" href="" data-toggle="tab">Your Tasks</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active fade show">
                                            <ul class="nearby-contct">
                                                @if ($tasks->isEmpty())
                                                    <p>No tasks available.</p>
                                                @else
                                                    @foreach($tasks as $task)
                                                        <li>
                                                            <div class="nearly-pepls">
                                                                <div class="pepl-info">
                                                                    <h5 class="card-title">{{ $task->title }}</h5>
                                                                    <p class="card-text">{{ $task->description }}</p>
                                                                    <p class="card-text"><strong>Assigned Date:</strong> {{ \Carbon\Carbon::parse($task->assigned_date)->format('d M Y') }}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @endif
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
