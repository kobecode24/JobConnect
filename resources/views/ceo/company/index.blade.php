@extends('layouts.home.app')


@section('contents')
    <div class="main-side">
        <div class="create-post">
            <div class="create-input">
                <img src="{{ asset('img/user-1.png') }}" alt="">
                <textarea rows="2" placeholder="write a post"></textarea>
            </div>
            <div class="create-post-links">
                <li><img src="{{ asset('img/photo.png') }}" alt="">Photo</li>
                <li><img src="{{ asset('img/video.png') }}" alt="">Video</li>
                <li><img src="{{ asset('img/event.png') }}" alt="">Event</li>
                <li>Post</li>
            </div>
        </div>
        <div class="sort-by">
            <hr>
            <p>Sort by: <span>top<img src="{{ asset('img/down-arrow.png') }}" alt=""></span></p>
        </div>

        <div class="post-container">
            <div class="profile-post">
                <img src="{{ asset('img/user-3.png') }}" alt="">
                <div class="prop-detail">
                    <h3>Benjamin Leo</h3>
                    <p>Founder and CEO at Gallelio Group | Angel Investor</p>
                    <span>2 hours ago</span>
                </div>
            </div>
            <div class="post-description">
                <p>The success of every website depends on search engine optimization and digital marketing strategy. If you are on the first page of all major search engines, then you are ahead among your competitors.</p>
                <img src="{{ asset('img/post-image-1.png') }}" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="{{ asset('img/like.png') }}" alt="like"></a>
                    <a href="#"><img src="{{ asset('img/love.png') }}" alt="like"></a>
                    <a href="#"><img src="{{ asset('img/clap.png') }}" alt="like"></a>
                    <small class="int-disc">Adil ben and 89 others</small>
                </div>
                <small>22 comments &middot; 49 shares</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="{{ asset('img/user-1.png') }}" class="prof"><img src="{{ asset('img/down-arrow.png') }}" class="arrow"></a>
                <a href="#"><img src="{{ asset('img/like.png') }}"> <span>Like</span></a>
                <a href="#"><img src="{{ asset('img/comment.png') }}"> <span>Comment</span></a>
                <a href="#"><img src="{{ asset('img/share.png') }}"> <span>Share</span></a>
                <a href="#"><img src="{{ asset('img/send.png') }}"> <span>Send</span></a>
            </div>
        </div>
    </div>
@endsection
