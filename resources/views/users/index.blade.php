@extends('layouts.admin.app')


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

        @foreach($posts as $post)
        <div class="post-container">
            <div class="profile-post">
                <img src="{{ asset($post['profile_image']) }}" alt="">
                <div class="prop-detail">
                    <h3>{{ $post['author'] }}</h3>
                    <p>{{ $post['position'] }}</p>
                    <span>{{ $post['time_ago'] }}</span>
                </div>
            </div>
            <div class="post-description">
                <p>{{ $post['description'] }}</p>
                <img src="{{ asset($post['post_image']) }}" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="{{ asset('img/like.png') }}" alt="like"></a>
                    <a href="#"><img src="{{ asset('img/love.png') }}" alt="like"></a>
                    <a href="#"><img src="{{ asset('img/clap.png') }}" alt="like"></a>
                    <small class="int-disc">{{ $post['activity_info'] }}</small>
                </div>
                <small>{{ $post['comment_info'] }}</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="{{ asset('img/user-1.png') }}" class="prof"><img
                        src="{{ asset('img/down-arrow.png') }}" class="arrow"></a>
                <a href="#"><img src="{{ asset('img/like.png') }}"> <span>Like</span></a>
                <a href="#"><img src="{{ asset('img/comment.png') }}"> <span>Comment</span></a>
                <a href="#"><img src="{{ asset('img/share.png') }}"> <span>Share</span></a>
                <a href="#"><img src="{{ asset('img/send.png') }}"> <span>Send</span></a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
