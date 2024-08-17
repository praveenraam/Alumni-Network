@extends('layouts.app')
@section('title', 'My Tasks')

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
                                        <li class="nav-item"><a class="active" href="" data-toggle="tab">My Tasks</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active fade show">
                                            <ul class="nearby-contct">
                                                @foreach($tasks as $task)
                                                    <li>
                                                        <div class="nearly-pepls">
                                                            <div class="pepl-info">
                                                                <h5 class="card-title">{{ $task->title }}</h5>
                                                                <p class="card-text">{{ $task->description }}</p>
                                                                <p class="card-text">
                                                                    <strong>Assigned Date:</strong> 
                                                                    {{ \Carbon\Carbon::parse($task->assigned_date)->format('d M Y') }}
                                                                </p>
                                                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @if($tasks->isEmpty())
                                                <p>No Tasks Available</p>
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
