@extends('layouts.app')
@section('title', 'Tasks')

@push('bodycontent')
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        @include('layouts.includes.sidebar')
                        <div class="col-lg-9">
                            <div class="central-meta">
                                <div class="groups">
                                    <span><i class="fa fa-users"></i> joined Groups</span>
                                </div>
                                <ul class="nearby-contct">
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group1.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">funparty</a></h4>
                                                <span>public group</span>
                                                <em>32k Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group2.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">ABC News</a></h4>
                                                <span>Private group</span>
                                                <em>5M Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group3.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">SEO Zone</a></h4>
                                                <span>Public group</span>
                                                <em>32k Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group4.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Max Us</a></h4>
                                                <span>Public group</span>
                                                <em> 756 Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group5.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Banana Group</a></h4>
                                                <span>Friends Group</span>
                                                <em>32k Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group6.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Bad boys n Girls</a></h4>
                                                <span>Public group</span>
                                                <em>32k Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group7.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Bachelor's fun</a></h4>
                                                <span>Public Group</span>
                                                <em>500 Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/group4.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Max Us</a></h4>
                                                <span>Public group</span>
                                                <em> 756 Members</em>
                                                <a href="#" title="" class="add-butn" data-ripple="">leave
                                                    group</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
