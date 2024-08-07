@extends('layouts.app')
@section('title', 'Available Mentors')

@push('bodycontent')

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        {{-- @include('layouts.includes.sidebar') --}}

                        <div class="col-lg-12">
                            <div class="central-meta item" style="display: inline-block;">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <div class="friend-name">
                                            <ins><a href="#" title="">Available Mentors</a></ins>
                                            <span>Select a mentor from the list below</span>
                                        </div>
                                        <div class="post-meta">
                                            <div class="description">
                                                @if($availableMentors->isEmpty())
                                                    <p>No mentors are currently available.</p>
                                                @else
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Batch</th>
                                                                <th>Email</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($availableMentors as $mentor)
                                                                <tr>
                                                                    <td><a href="alumni/profile/{{$mentor->id}}" rel="noopener noreferrer" style="text-decoration: underline;">{{ $mentor->name }}</a></td>
                                                                    <td>{{ $mentor->batch }}</td>
                                                                    <td>{{ $mentor->email ?? 'Not Updated' }}</td>
                                                                    <td>
                                                                        @if($currentMentorship && $currentMentorship->mentor_id == $mentor->id)
                                                                            <button type="button" class="btn btn-secondary" disabled>Your Mentor</button>
                                                                        @else
                                                                            <form action="{{ route('mentorship.assign') }}" method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="mentor_id" value="{{ $mentor->id }}">
                                                                                <input type="hidden" name="student_id" value="{{ $studentId }}">
                                                                                <button type="submit" class="mtr-btn"><span>Make as Mentor</span></button>
                                                                            </form>
                                                                        @endif
                                                                    </td>
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
    </div>
</section>

@endpush
