@extends('layouts.app')
@section('title', 'Alumnis')

@push('bodycontent')

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="central-meta item" style="display: inline-block;">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <div class="friend-name">
                                            <ins><a href="#" title="">Alumni List</a></ins>
                                            <span>Here is the list of all alumnis</span>

                                            @if(Auth::guard('admin')->check())
                                            <form action="{{  route('admin.student.search') }}" method="GET">
                                                <div class="form-group">
                                                    <input type="text" name="query" required="required" placeholder="Search Alumni by Name" >
                                                    <i class="mtrl-select"></i>
                                                </div>
                                                <button type="submit" class="mtr-btn"><span>Search</span></button>
                                            </form>
                                            @elseif(Auth::guard('alumni')->check())
                                            <form action="{{  route('alumni.student.search') }}" method="GET">
                                                <div class="form-group">
                                                    <input type="text" name="query" required="required" placeholder="Search Alumni by Name" >
                                                    <i class="mtrl-select"></i>
                                                </div>
                                                <button type="submit" class="mtr-btn"><span>Search</span></button>
                                            </form>
                                            @else
                                            <p>Not Logged</p>
                                            @endif
                                        </div>
                                        <div class="post-meta">
                                            <div class="description">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Roll No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Department</th>
                                                            <th>CGPA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($students as $student)
                                                            <tr>
                                                                <td>{{ $student->roll_number ?? 'Not Updated' }}</td>
                                                                <td>
                                                                    <a href="{{ Auth::guard('admin')->check() ? route('admin.students.profile', ['id' => $student->id]) : route('alumni.students.profile', ['id' => $student->id]) }}" 
                                                                        rel="noopener noreferrer" 
                                                                        style="text-decoration: underline;">
                                                                        {{ $student->name }}
                                                                    </a>
                                                                </td>
                                                                <td>{{ $student->email }}</td>
                                                                <td>{{ $student->department ?? 'Not Updated' }}</td>
                                                                <td>{{$student->cgpa ?? 'Not Updated'}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @if ($students->isEmpty())
                                                    <p>No Students found.</p>
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
</div>
</section>

@endpush
