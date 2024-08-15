@extends('layouts.app')
@section('title', 'Alumnis')

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
                                                <ins><a href="#" title="">Alumni List</a></ins>
                                                <span>Here is the list of all alumnis</span>

                                                <form action="{{ route('alumni.alumni.search') }}" method="GET">
                                                    <div class="form-group">
                                                        <input type="text" name="query" required="required" placeholder="Search Alumni by Name" >
                                                        <i class="mtrl-select"></i>
                                                    </div>
                                                    <button type="submit" class="mtr-btn"><span>Search</span></button>
                                                </form>

                                            </div>
                                            <div class="post-meta">
                                                <div class="description">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Batch</th>
                                                                <th>Name</th>
                                                                <th>Roll No</th>
                                                                <th>Email</th>
                                                                <th>Company</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($alumni as $alumnus)
                                                                <tr>
                                                                    <td>{{ $alumnus->batch }}</td>
                                                                    <td><a href="/alumni/alumni/profile/{{$alumnus->id}}" rel="noopener noreferrer"style="text-decoration: underline;">{{$alumnus->name}}</a></td>
                                                                    <td>{{ $alumnus->roll_no }}</td>
                                                                    <td>@if($alumnus->email != null)
                                                                        {{$alumnus->email}}
                                                                        @else Not Updated
                                                                        @endif
                                                                    </td>
                                                                    <td>@if($alumnus->company_name != null)
                                                                        {{$alumnus->company_name}}
                                                                        @else Not Updated
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @if ($alumni->isEmpty())
                                                        <p>No alumni found.</p>
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
