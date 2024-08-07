@extends('layouts.app')
@section('title', 'News Feed')

@push('bodycontent')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('layouts.includes.sidebar')
                            <div class="col-lg-9">
                                <div class="central-meta new-pst">
                                    <div class="new-postbox">
                                       <figure>
                                          <img src="images/resources/admin2.jpg" alt="">
                                       </figure>
                                       <div class="newpst-input">
                                          <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                                             @csrf 
                                             <textarea name="caption" rows="2" placeholder="Write caption"></textarea>
                                             <div class="attachments">
                                                 <ul>
                                                     <li>
                                                         <i class="fa fa-image"></i>
                                                         <label class="fileContainer">
                                                             <input type="file" name="photo1" accept="image/*">
                                                         </label>
                                                     </li>
                                                     <li>
                                                         <i class="fa fa-image"></i>
                                                         <label class="fileContainer">
                                                             <input type="file" name="photo2" accept="image/*">
                                                         </label>
                                                     </li>
                                                     <li>
                                                         <button type="submit">Post</button>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </form>                                         
                                       </div>
                                    </div>
                                 </div>
                                 @include('layouts.index');
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
