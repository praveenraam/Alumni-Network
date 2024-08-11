@extends('layouts.app')
@section('title', 'Unresolved Forgot Password Requests')

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
                                            <ins><a href="#" title="">Unresolved Forgot Password Requests</a></ins>
                                            <span>Below is the list of all unresolved forgot password requests</span>
                                        </div>
                                        <div class="post-meta">
                                            <div class="description">
                                                @if ($requests->isEmpty())
                                                    <p>No unresolved requests found.</p>
                                                @else
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Roll Number</th>
                                                                <th>Request Date</th>
                                                                <th>change-password</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($requests as $request)
                                                                <tr>
                                                                    <td>{{ $request->name }}</td>
                                                                    <td>{{ $request->roll_number }}</td>
                                                                    <td>{{ $request->created_at->format('d M Y') }}</td>
                                                                    <td>
                                                                        <!-- Form to change the password and mark as resolved -->
                                                                        <form action="{{ route('admin.change-password', $request->roll_number) }}" method="POST" style="display:inline-block;">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <div class="form-group">
                                                                                <input type="password" name="new_password" id="name" required="required" >
                                                                                <label class="control-label" for="name">New Password</label>
                                                                                <i class="mtrl-select"></i>
                                                                            </div>
                                                                    </td>
                                                                    <td>
                                                                        
                                                                            <button type="submit" class="btn btn-success">Change Password & Mark as Resolved</button>
                                                                        </form>
                                                                        <!-- Form to ignore the request -->
                                                                        <form action="{{ route('admin.ignore-request', $request->id) }}" method="POST" style="display:inline-block; margin-left: 10px;">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <button type="submit" class="btn btn-danger">Ignore Request</button>
                                                                        </form>
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
