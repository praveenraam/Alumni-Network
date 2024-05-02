@extends('layouts.app')
@section('title', 'News Feed')

@push('bodycontent')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-clipboard"></i>
                                                <a href="newsfeed.html" title="">News feed</a>
                                            </li>
                                            <li>
                                                <i class="ti-mouse-alt"></i>
                                                <a href="inbox.html" title="">Inbox</a>
                                            </li>
                                            <li>
                                                <i class="ti-files"></i>
                                                <a href="fav-page.html" title="">My pages</a>
                                            </li>
                                            <li>
                                                <i class="ti-user"></i>
                                                <a href="timeline-friends.html" title="">friends</a>
                                            </li>
                                            <li>
                                                <i class="ti-image"></i>
                                                <a href="timeline-photos.html" title="">images</a>
                                            </li>
                                            <li>
                                                <i class="ti-video-camera"></i>
                                                <a href="timeline-videos.html" title="">videos</a>
                                            </li>
                                            <li>
                                                <i class="ti-comments-smiley"></i>
                                                <a href="messages.html" title="">Messages</a>
                                            </li>
                                            <li>
                                                <i class="ti-bell"></i>
                                                <a href="notifications.html" title="">Notifications</a>
                                            </li>
                                            <li>
                                                <i class="ti-share"></i>
                                                <a href="people-nearby.html" title="">People Nearby</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-bar-chart-o"></i>
                                                <a href="insights.html" title="">insights</a>
                                            </li>
                                            <li>
                                                <i class="ti-power-off"></i>
                                                <a href="landing.html" title="">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-9">
                                <div class="loadMore">
                                    <div class="central-meta item" style="display: inline-block;">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/friend-avatar10.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="time-line.html" title="">Janice Griffith</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                    <div class="more">
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <li><i class="fa fa-pencil-square-o"></i>Embed</li>
                                                                <li><i class="fa fa-share-square-o"></i>Share</li>
                                                                <li><i class="fa fa-bell-slash-o"></i>Mute</li>
                                                                <li><i class="fa fa-folder"></i>view hidden replies</li>
                                                                <li><i class="fa fa-wpexplorer"></i>Report post</li>
                                                                <li><i class="fa fa-bell-slash-o"></i>Block</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-meta">
                                                    <img src="images/resources/user-post.jpg" alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip" title=""
                                                                    data-original-title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title=""
                                                                    data-original-title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip" title=""
                                                                    data-original-title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip" title=""
                                                                    data-original-title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-google-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#"
                                                                                title=""><i
                                                                                    class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">
                                                        <p>
                                                            World's most beautiful car in Curabitur <a href="#"
                                                                title="">#test drive booking !</a> the most beatuiful
                                                            car available in america and the saudia arabia, you can book
                                                            your test drive by our official website.
                                                            Curabitur Lonely Cat Enjoying in Summer #mypage ullamcorper
                                                            ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                                            tellus eget condimentum rhoncus, sem quam semper libero, sit
                                                            amet adipiscing sem neque sed ipsum. Nam quam nunc,
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Jason
                                                                        borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this car is very
                                                                awesome for the youngster. please vote this car and like our
                                                                post</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="images/resources/comet-2.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html"
                                                                                title="">alexendra dadrio</a></h5>
                                                                        <span>1 month ago</span>
                                                                        <a class="we-reply" href="#"
                                                                            title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>yes, really very awesome car i see the features of
                                                                        this car in the official website of <a
                                                                            href="#"
                                                                            title="">#Mercedes-Benz</a> and really
                                                                        impressed :-)</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="images/resources/comet-3.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html"
                                                                                title="">Olivia</a></h5>
                                                                        <span>16 days ago</span>
                                                                        <a class="we-reply" href="#"
                                                                            title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>i like lexus cars, lexus cars are most beautiful with
                                                                        the awesome features, but this car is really
                                                                        outstanding than lexus</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-4.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Donald
                                                                        Trump</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is
                                                                very awesome for the youngster. please vote this video and
                                                                like our channel
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more
                                                            comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless"
                                                                        title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-view btn-load-more">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
