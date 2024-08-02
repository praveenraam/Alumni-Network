@extends('layouts.app')
@section('title', 'Post Reports')

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
                                            <ins><a href="#" title="">Post Reports</a></ins>
                                            <span>Here is the list of all post reports</span>
                                        </div>
                                        <div class="post-meta">
                                            <div class="description">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Reporter</th>
                                                            <th>Repoted post's user</th>
                                                            <th>Reported At</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($postReports as $postReport)
                                                            <tr>
                                                                <td>{{ $postReport->id }}</td>
                                                                <td>
                                                                    @if($postReport->student)
                                                                        Student: {{ $postReport->student->name }}
                                                                    @elseif($postReport->alumni)
                                                                        Alumni: {{ $postReport->alumni->name }}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($postReport->post && $postReport->post->alumni)
                                                                        <a href="../alumni/profile/{{$postReport->post->alumni->id}}">
                                                                            {{ $postReport->post->alumni->name }}
                                                                        </a>
                                                                    @else
                                                                        Poster Not Found
                                                                    @endif
                                                                </td>
                                                                <td>{{ $postReport->created_at }}</td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="3">No post reports found.</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
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
