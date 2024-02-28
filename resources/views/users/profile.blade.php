<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile page</title>
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}" />
</head>
<body>

    <!------------------------ header ---------------------------->
    @include('layouts.home.header')

    <div class="container">
        <!------------------------ main profile sidebar ---------------------------->
        <div class="profile-main">
            <img src="{{ asset('img/cover-pic.png') }}" alt="">
            <div class="pm-info">
                <img src="{{ asset('img/user-1.png') }}" alt="user-1" class="pm-image">
                <h3>{{ $user->name}}</h3>
                <p class="description">
                    {{$user->description}}
                </p>
                <small>San francisco, United State &middot; </small><span class="contact">Contact info</span>
                <div class="contact-users">
                    <img src="{{ asset('img/user-2.png') }}" alt="">
                    <small>1 mutual connection : Orlando Diggs</small>
                </div>
                <a href="#" class="pm-btn"><img src="{{ asset('img/connect.png') }}" alt=""><span>Connect</span></a>
                <a href="#" class="pm-btn"><img src="{{ asset('img/chat.png') }}" alt=""><span>Message</span></a>
            </div>
            <div class="pm-about">
                <h3>About</h3>
                <p>The success of every website depends on search engine optimization and digital marketing strategy. On the first page of all major search engines, you are ahead among your competitors. If you are on the first page of all major search engines, you are ahead among your competitors.</p>
                <span>See More...</span>
            </div>
            <div class="pm-experiences">
                <h3>Experiences</h3>
                <div class="experience-detail">
                    <img src="{{ asset('img/microsoft.png') }}" alt="">
                    <div class="exp-description">
                        <h4>Lead front-End Developer</h4>
                        <small>Microsoft &middot; Full-time</small>
                        <small>Feb 2021-Present &middot; 1.5 years</small>
                        <p>Computer programming is the process of programming a particular computation, usualy by designing and building an executable computing program.</p>
                        <hr>
                    </div>
                </div>
                <div class="experience-detail">
                    <img src="{{ asset('img/slack.png') }}" alt="">
                    <div class="exp-description">
                        <h4>Full Stack Developer</h4>
                        <small>Slack &middot; Full-time</small>
                        <small>June 2018-Jan 2021 &middot; 2.6 years</small>
                        <p>Computer programming is the process of programming a particular computation, usualy by designing and building an executable computing program.</p>
                        <hr>
                    </div>
                </div>

                <div class="experience-detail">
                    <img src="{{ asset('img/google.png') }}" alt="">
                    <div class="exp-description">
                        <h4>Web Developer</h4>
                        <small>Microsoft Inc &middot; Full-time</small>
                        <small>Sept 2015-May 2018 &middot; 2.8 years</small>
                        <p>Computer programming is the process of programming a particular computation, usualy by designing and building an executable computing program.</p>
                    </div>
                </div>
                <hr>
                <a href="#"><p>Show all Experiences</p><img src="{{ asset('img/right-arrow.png') }}"></a>
            </div>
            <div class="pm-experiences">
                <h3>Education</h3>
                <div class="experience-detail">
                    <img src="{{ asset('img/stanford.png') }}" alt="">
                    <div class="exp-description">
                        <h4>stanford University</h4>
                        <small>BSSE, Electrical engineering</small>
                        <small>2018 - 2022</small>
                        <hr class="line">
                    </div>
                </div>

                <div class="experience-detail">
                    <img src="{{ asset('img/north.png') }}" alt="">
                    <div class="exp-description">
                        <h4>Northwestern University</h4>
                        <small>Computer Science</small>
                        <small>2015 - 2018</small>
                        <hr class="line">
                    </div>
                </div>
                <div class="experience-detail">
                    <img src="{{ asset('img/mit.png') }}" alt="">
                    <div class="exp-description">
                        <h4>Harvard University</h4>
                        <small>Senior High School</small>
                        <small>2005 - 2015</small>
                    </div>
                </div>
            </div>
            <div class="pm-skills">
                <h3>Skills</h3>
                <div>
                    @foreach ($skills as $skill)
                        <a href="#">{{ $skill->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <!------------------------ right profile sidebar ---------------------------->
        @include('layouts.home.profile-right-sidebar')
    </div>

    <!------------------------ footer ---------------------------->
    @include('layouts.home.footer')
