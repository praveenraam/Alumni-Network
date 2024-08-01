@if($posts->isNotEmpty())
@foreach($posts as $postV)
    <div class="central-meta item" style="display: inline-block;">
        
        <div class="user-post">
            <div class="friend-info">
                <figure>
                    <img src="{{ asset('storage/' . $postV->alumni->profile_picture) }}" alt="" style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
                </figure>                
                <div class="friend-name">
                    <ins>
                        <a href="
                            @if(Auth::guard('student')->check())
                                student/alumni/profile/{{$postV->alumni->id}}
                            @elseif(Auth::guard('alumni')->check())
                                alumni/alumni/profile/{{$postV->alumni->id}}
                            @elseif(Auth::guard('admin')->check())
                                admin/alumni/profile/{{$postV->alumni->id}}
                            @endif
                        " title="Profile">{{$postV->alumni->name}}
                        </a>
                    </ins>
                    <span>{{$postV->created_at}}</span>
                    <div class="more">
                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                            <ul>
                                <li><i class="fa fa-wpexplorer"></i>Report post</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post-meta">
                    
                    <div class="description">
                        <p class="text-muted font-weight-light p-3 bg-light border rounded">
                            {{ $postV->caption }}
                        </p>
                    </div>
                    @if ($postV->photo1 || $postV->photo2)
                        <div id="carouselExample" class="carousel slide carousel-container" data-ride="carousel">
                            <div class="carousel-inner">
                                @if ($postV->photo1)
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/' . $postV->photo1) }}" class="d-block w-100" alt="Image 1">
                                    </div>
                                @endif

                                @if ($postV->photo2)
                                    <div class="carousel-item {{ !$postV->photo1 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $postV->photo2) }}" class="d-block w-100" alt="Image 2">
                                    </div>
                                @endif
                            </div>
                            @if ($postV->photo1 && $postV->photo2)
                                <a class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.4min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <style>
        /* Custom style to set fixed width and height for carousel images */
        .carousel-item img {
            width: 100%;
            height: 400px; /* Set your desired height */
            object-fit: cover; /* Ensure the image covers the entire container */
        }
        /* Container for fixed width */
        .carousel-container {
            max-width: 600px; /* Set your desired max width */
            margin: auto; /* Center align the carousel */
        }
    </style>
</head>
@else
<p class="text-muted font-weight-light p-3 bg-light border rounded">
    {{ $postV->caption }}
</p>
@endif