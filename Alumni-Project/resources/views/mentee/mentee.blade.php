@extends('layouts.app')
@section('title', 'Mentee')

@push('bodycontent')
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
                                        <li class="nav-item"><a class="" href="#frends" data-toggle="tab">My
                                                Friends</a> <span>55</span></li>
                                        <li class="nav-item"><a class="active show" href="#frends-req"
                                                data-toggle="tab">Friend Requests</a><span>60</span></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="frends">
                                            <ul class="nearby-contct">
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/friend-avatar9.jpg"
                                                                    alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly1.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">sophia Gate</a></h4>
                                                            <span>tv actresses</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly2.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">sara grey</a></h4>
                                                            <span>work at IBM</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly3.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Sexy cat</a></h4>
                                                            <span>Student</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly4.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Sara grey</a></h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly5.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Amy watson</a>
                                                            </h4>
                                                            <span>Study in university</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly6.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">caty lasbo</a>
                                                            </h4>
                                                            <span>work as dancers</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly2.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Ema watson</a>
                                                            </h4>
                                                            <span>personal business</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">unfriend</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">add friend</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                        </div>
                                        <div class="tab-pane fade active show" id="frends-req">
                                            <ul class="nearby-contct">
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly5.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Amy watson</a>
                                                            </h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly1.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">sophia Gate</a>
                                                            </h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly6.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">caty lasbo</a>
                                                            </h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/friend-avatar9.jpg"
                                                                    alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">jhon kates</a>
                                                            </h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly2.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">sara grey</a></h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly4.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Sara grey</a></h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/nearly3.jpg" alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">Sexy cat</a></h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure>
                                                            <a href="time-line.html" title=""><img
                                                                    src="images/resources/friend-avatar9.jpg"
                                                                    alt=""></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="time-line.html" title="">jhon kates</a>
                                                            </h4>
                                                            <span>ftv model</span>
                                                            <a href="#" title="" class="add-butn more-action"
                                                                data-ripple="">delete Request</a>
                                                            <a href="#" title="" class="add-butn"
                                                                data-ripple="">Confirm</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <button class="btn-view btn-load-more"></button>
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
@endpush
