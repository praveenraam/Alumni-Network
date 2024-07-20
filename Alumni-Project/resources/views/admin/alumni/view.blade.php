@extends('layouts.app')
@section('title', 'Alumnis')

@push('bodycontent')

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        @include('layouts.includes.sidebar')

                            <div class="col-lg-9">
                                <div class="central-meta item" style="display: inline-block;">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <div class="friend-name">
                                                <ins><a href="#" title="">Alumni List</a></ins>
                                                <span>Here is the list of all alumnis</span>
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
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($alumni as $alumnus)
                                                                <tr>
                                                                    <td>{{ $alumnus->batch }}</td>
                                                                    <td>{{ $alumnus->name }}</td>
                                                                    <td>{{ $alumnus->roll_no }}</td>
                                                                    <td>{{ $alumnus->email }}</td>
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
