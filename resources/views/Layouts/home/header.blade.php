<nav class="nav-bar">
    <div class="navbar-left">
        <a href="{{ url('./index.html') }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>

        <div class="search-box">
            <img src="{{ asset('img/search.png') }}" alt="search">
            <input type="text" placeholder="Search...">
        </div>
    </div>
    <div class="navbar-links">
        <ul>
            <li><a href="#"><img src="{{ asset('img/home.png') }}" alt="home"> <span>Home</span></a></li>
            <li><a href="#"><img src="{{ asset('img/network.png') }}" alt="network"> <span>Network</span></a></li>
            <li><a href="#"><img src="{{ asset('img/jobs.png') }}" alt="Job"> <span>Jobs</span></a></li>
            <li><a href="#"><img src="{{ asset('img/message.png') }}" alt="Message"> <span>Messaging</span></a></li>
            <li><a href="#"><img src="{{ asset('img/notification.png') }}" alt="notification"> <span>Notifications</span></a></li>
        </ul>
    </div>
    <div class="navbar-right">
        <div class="online">
            <a href="#" id="clickBtn"><img src="{{ asset('img/user-1.png') }}" alt="user" class="nav-profile-img"></a>
        </div>

        <div class="user-menu">
            <div class="user-img">
                <img src="{{ asset('img/user-1.png') }}" alt="">
                <h3>Rayan Walton</h3>
                <a href="{{ url('./profile.html') }}"><span>See your profile</span></a>
            </div>
            <a href="#"><img src="{{ asset('img/feedback.png') }}" alt=""><span>Give feedback</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/setting.png') }}" alt=""><span>Setting & Privacy</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/help.png') }}" alt=""><span>Help & Support</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/display.png') }}" alt=""><span>Display & Accessibility</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/logout.png') }}" alt=""><span>Logout</span><small>></small></a>
        </div>
    </div>
</nav>
