<div class="left-side">
    <div class="profile-section">
        <img src="{{ asset('img/cover-pic.png') }}" alt="">
        <div class="profile-info">
            <img src="{{ asset('img/user-1.png') }}" alt="">
            <h1>Rayan Walton</h1>
            <h3>Web Developer at Microsoft</h3>
            <p>Your profile views<span>52</span></p>
            <p>Your post views<span>810</span></p>
            <p>Your connections<span>900</span></p>
        </div>
        <div class="items">
            <div class="item">
                <img src="{{ asset('img/items.png') }}" alt="">My items
            </div>
            <div class="item">
                <img src="{{ asset('img/premium.png') }}" alt="">Try Premium
            </div>
        </div>
    </div>
    <div class="profile-details">
        <div class="skills">
            <h3>RECENT</h3>
            <a href="#"><img src="{{ asset('img/recent.png') }}" alt="recent"><p>Web Development</p></a>
            <!-- Add other recent skills here -->
        </div>

        <div class="skills">
            <h3>Groups</h3>
            <a href="#"><img src="{{ asset('img/group.png') }}" alt="recent"><p>Web Design Group</p></a>
            <!-- Add other group skills here -->
        </div>

        <div class="skills">
            <h3>Hashtag</h3>
            <a href="#"><img src="{{ asset('img/hashtag.png') }}" alt="recent"><p>Web Development</p></a>
            <!-- Add other hashtag skills here -->
        </div>
    </div>
    <a href="#" class="discover">Discover more</a>
    <p id="showMoreLink" onclick="toggleProfileActivity()">Show More <b>+</b></p>
</div>
