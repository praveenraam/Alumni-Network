@extends('layouts.app')
@section('title', 'Profile')

@push('bodycontent')
<section>
    <div class="feature-photo">
       <figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
       <div class="add-btn">
          <span>1205 followers</span>
          <a href="#" title="" data-ripple="">Add Friend<span class="ripple"><span class="ink" style="height: 110px; width: 110px; background-color: rgb(217, 217, 217); top: -45.325px; left: -14.475px;"></span></span></a>
       </div>
       <form class="edit-phto">
          <i class="fa fa-camera-retro"></i>
          <label class="fileContainer">
          Edit Cover Photo
          <input type="file">
          </label>
       </form>
       <div class="container-fluid">
          <div class="row merged">
             <div class="col-lg-2 col-sm-3">
                <div class="user-avatar">
                   <figure>
                      <img src="images/resources/user-avatar.jpg" alt="">
                      <form class="edit-phto">
                         <i class="fa fa-camera-retro"></i>
                         <label class="fileContainer">
                         Edit Display Photo
                         <input type="file">
                         </label>
                      </form>
                   </figure>
                </div>
             </div>
             <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                   <ul>
                      <li class="admin-name">
                         <h5>Janice Griffith</h5>
                         <span>department</span>
                      </li>
                      <li>
                         <a class="active" href="time-line.html" title="" data-ripple="">time line</a>
                         <a class="" href="#" title="" data-ripple="">more</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
<section>
    <div class="gap gray-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                   @include('layouts.includes.sidebar')
                   <div class="col-lg-9">
                         <div class="central-meta new-pst item" style="display: inline-block;">
                            <div class="new-postbox">
                               <figure>
                                  <img src="images/resources/admin2.jpg" alt="">
                               </figure>
                               <div class="newpst-input">
                                  <form method="post">
                                     <textarea rows="2" placeholder="write something"></textarea>
                                     <div class="attachments">
                                        <ul>
                                           <li>
                                              <i class="fa fa-music"></i>
                                              <label class="fileContainer">
                                              <input type="file">
                                              </label>
                                           </li>
                                           <li>
                                              <i class="fa fa-image"></i>
                                              <label class="fileContainer">
                                              <input type="file">
                                              </label>
                                           </li>
                                           <li>
                                              <i class="fa fa-video-camera"></i>
                                              <label class="fileContainer">
                                              <input type="file">
                                              </label>
                                           </li>
                                           <li>
                                              <i class="fa fa-camera"></i>
                                              <label class="fileContainer">
                                              <input type="file">
                                              </label>
                                           </li>
                                           <li>
                                              <button type="submit">Publish</button>
                                           </li>
                                        </ul>
                                     </div>
                                  </form>
                               </div>
                            </div>
                         </div>
                         <div class="central-meta item" style="display: inline-block;">
                            <div class="user-post">
                               <div class="friend-info">
                                  <figure>
                                     <img src="images/resources/friend-avatar10.jpg" alt="">
                                  </figure>
                                  <div class="friend-name">
                                     <ins><a href="time-line.html" title="">Janice Griffith</a></ins>
                                     <span>published: june,2 2018 19:PM</span>
                                  </div>
                                  <div class="description">
                                     <p>
                                        World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                     </p>
                                  </div>
                                  <div class="post-meta">
                                     <div class="linked-image align-left">
                                        <a href="#" title=""><img src="images/resources/page1.jpg" alt=""></a>
                                     </div>
                                     <div class="detail">
                                        <span>Love Maid - ChillGroves</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
                                        <a href="#" title="">www.sample.com</a>
                                     </div>
                                     <div class="we-video-info">
                                        <ul>
                                           <li>
                                              <span class="views" data-toggle="tooltip" title="" data-original-title="views">
                                              <i class="fa fa-eye"></i>
                                              <ins>1.2k</ins>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="comment" data-toggle="tooltip" title="" data-original-title="Comments">
                                              <i class="fa fa-comments-o"></i>
                                              <ins>52</ins>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="like" data-toggle="tooltip" title="" data-original-title="like">
                                              <i class="ti-heart"></i>
                                              <ins>2.2k</ins>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="dislike" data-toggle="tooltip" title="" data-original-title="dislike">
                                              <i class="ti-heart-broken"></i>
                                              <ins>200</ins>
                                              </span>
                                           </li>
                                           <li class="social-media">
                                              <div class="menu">
                                                 <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a></div>
                                                 </div>
                                              </div>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="central-meta item" style="display: none;">
                            <div class="user-post">
                               <div class="friend-info">
                                  <figure>
                                     <img src="images/resources/friend-avatar10.jpg" alt="">
                                  </figure>
                                  <div class="friend-name">
                                     <ins><a href="time-line.html" title="">Janice Griffith</a></ins>
                                     <span>published: june,2 2018 19:PM</span>
                                  </div>
                                  <div class="post-meta">
                                     <iframe width="" height="285" src="https://www.youtube.com/embed/_-StQsHSTz0" frameborder="0" allowfullscreen=""></iframe>
                                     <div class="we-video-info">
                                        <ul>
                                           <li>
                                              <span class="views" data-toggle="tooltip" title="" data-original-title="views">
                                              <i class="fa fa-eye"></i>
                                              <ins>1.2k</ins>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="comment" data-toggle="tooltip" title="" data-original-title="Comments">
                                              <i class="fa fa-comments-o"></i>
                                              <ins>52</ins>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="like" data-toggle="tooltip" title="" data-original-title="like">
                                              <i class="ti-heart"></i>
                                              <ins>2.2k</ins>
                                              </span>
                                           </li>
                                           <li>
                                              <span class="dislike" data-toggle="tooltip" title="" data-original-title="dislike">
                                              <i class="ti-heart-broken"></i>
                                              <ins>200</ins>
                                              </span>
                                           </li>
                                           <li class="social-media">
                                              <div class="menu">
                                                 <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a></div>
                                                 </div>
                                                 <div class="rotater">
                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a></div>
                                                 </div>
                                              </div>
                                           </li>
                                        </ul>
                                     </div>
                                     <div class="description">
                                        <p>
                                           Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
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
                                              <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                              <span>1 year ago</span>
                                              <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                           </div>
                                           <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="comet-avatar">
                                           <img src="images/resources/comet-2.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                           <div class="coment-head">
                                              <h5><a href="time-line.html" title="">Sophia</a></h5>
                                              <span>1 week ago</span>
                                              <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                           </div>
                                           <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                              <i class="em em-smiley"></i>
                                           </p>
                                        </div>
                                     </li>
                                     <li>
                                        <a href="#" title="" class="showmore underline">more comments</a>
                                     </li>
                                     <li class="post-comment">
                                        <div class="comet-avatar">
                                           <img src="images/resources/comet-2.jpg" alt="">
                                        </div>
                                        <div class="post-comt-box">
                                           <form method="post">
                                              <textarea placeholder="Post your comment"></textarea>
                                              <div class="add-smiles">
                                                 <span class="em em-expressionless" title="add icon"></span>
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
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endpush
