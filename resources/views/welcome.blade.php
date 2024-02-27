<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkden Social Media Plateform</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<nav class="nav-bar">
    <div class="navbar-left">
        <a href="./index.html" class="logo"><img src="./images/logo.png" alt="logo"></a>

        <div class="search-box">
            <img src="./images/search.png" alt="search">
            <input type="text" placeholder="Search...">
        </div>
    </div>
    <div class="navbar-links">
        <ul>
            <li><a href="#"><img src="./images/home.png" alt="home"> <span>Home</span></a></li>
            <li><a href="#"><img src="./images/network.png" alt="network"> <span>Network</span></a></li>
            <li><a href="#"><img src="./images/jobs.png" alt="Job"> <span>Jobs</span></a></li>
            <li><a href="#"><img src="./images/message.png" alt="Message"> <span>Messaging</span></a></li>
            <li><a href="#"><img src="./images/notification.png" alt="notification"> <span>Notifications</span></a></li>
        </ul>
    </div>
    <div class="navbar-right">
        <div class="online">
            <a href="#" id="clickBtn"><img src="./images/user-1.png" alt="user" class="nav-profile-img"></a>
        </div>

        <div class="user-menu">
            <div class="user-img">
                <img src="./images/user-1.png" alt="">
                <h3>Rayan Walton</h3>
                <a href="./profile.html"><span>See your profile</span></a>
            </div>
            <a href="#"><img src="./images/feedback.png" alt=""><span>Give feedback</span><small>></small></a>
            <a href="#"><img src="./images/setting.png" alt=""><span>Setting & Privacy</span><small>></small></a>
            <a href="#"><img src="./images/help.png" alt=""><span>Help & Support</span><small>></small></a>
            <a href="#"><img src="./images/display.png" alt=""><span>Dispaly & Accessibltiy</span><small>></small></a>
            <a href="#"><img src="./images/logout.png" alt=""><span>Logout</span><small>></small></a>
        </div>
    </div>
</nav>
<!------------------------ left side ---------------------------->
<div class="container">
    <div class="left-side">
        <div class="profile-section">
            <img src="./images/cover-pic.png" alt="">
            <div class="profile-info">
                <img src="./images/user-1.png" alt="">
                <h1>Rayan Walton</h1>
                <h3>Web Developer at Microsoft</h3>
                <p>Your profile views<span>52</span></p>
                <p>Your post views<span>810</span></p>
                <p>Your connections<span>900</span></p>
            </div>
            <div class="items">
                <div class="item">
                    <img src="./images/items.png" alt="">My items
                </div>
                <div class="item">
                    <img src="./images/premium.png" alt="">Try Premium
                </div>
            </div>
        </div>
        <div class="profile-details">
            <div class="skills">
                <h3>RECENT</h3>
                <a href="#"><img src="./images/recent.png" alt="recent"><p>Web Development</p></a>
                <a href="#"><img src="./images/recent.png" alt="recent"><p>User Interface</p></a>
                <a href="#"><img src="./images/recent.png" alt="recent"><p>Online learning</p></a>
                <a href="#"><img src="./images/recent.png" alt="recent"><p>Learn online</p></a>
                <a href="#"><img src="./images/recent.png" alt="recent"><p>code better</p></a>
                <a href="#"><img src="./images/recent.png" alt="recent"><p>Group Learning</p></a>
            </div>

            <div class="skills">
                <h3>Groups</h3>
                <a href="#"><img src="./images/group.png" alt="recent"><p>Web Design Group</p></a>
                <a href="#"><img src="./images/group.png" alt="recent"><p>HTML & CSS Learners</p></a>
                <a href="#"><img src="./images/group.png" alt="recent"><p>Python & Javascript Group</p></a>
                <a href="#"><img src="./images/group.png" alt="recent"><p>Learn Coding online</p></a>
                <a href="#"><img src="./images/group.png" alt="recent"><p>code better</p></a>
                <a href="#"><img src="./images/group.png" alt="recent"><p>Group Learning</p></a>
            </div>

            <div class="skills">
                <h3>Hashtag</h3>
                <a href="#"><img src="./images/hashtag.png" alt="recent"><p>Web Development</p></a>
                <a href="#"><img src="./images/hashtag.png" alt="recent"><p>User Interface</p></a>
                <a href="#"><img src="./images/hashtag.png" alt="recent"><p>Online learning</p></a>
                <a href="#"><img src="./images/hashtag.png" alt="recent"><p>Learn online</p></a>
                <a href="#"><img src="./images/hashtag.png" alt="recent"><p>code better</p></a>
                <a href="#"><img src="./images/hashtag.png" alt="recent"><p>Group Learning</p></a>
            </div>
        </div>
        <a href="#" class="discover">Discover more</a>
        <p id="showMoreLink" onclick="toggleProfileActivity()">Show More <b>+</b></p>
    </div>
    <!------------------------ main side ---------------------------->
    <div class="main-side">
        <div class="create-post">
            <div class="create-input">
                <img src="./images/user-1.png" alt="">
                <textarea rows="2" placeholder="write a post"></textarea>
            </div>
            <div class="create-post-links">
                <li><img src="./images/photo.png" alt="">Photo</li>
                <li><img src="./images/video.png" alt="">Vedio</li>
                <li><img src="./images/event.png" alt="">Event</li>
                <li>Post</li>
            </div>
        </div>
        <div class="sort-by" >
            <hr>
            <p>Sort by: <span>top<img src="./images/down-arrow.png" alt=""></span></p>
        </div>
        <div class="post-container">
            <div class="profile-post">
                <img src="./images/user-3.png" alt="">
                <div class="prop-detail">
                    <h3>Benjamin Leo</h3>
                    <p>Founder and CEO at Gallelio Group | Angel Investor</p>
                    <span>2hours ago</span>
                </div>
            </div>
            <div class="post-description">
                <p>The success of every websites depands search engine optimisation and digital marketing strategy.if you are o first page of all major search engine then you are ahead among your competitors.</p>
                <img src="./images/post-image-1.png" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="./images/like.png" alt="like"></a>
                    <a href="#"><img src="./images/love.png" alt="like"></a>
                    <a href="#"><img src="./images/clap.png" alt="like"></a>
                    <small class="int-disc">Adil ben and 89 others</small>
                </div>
                <small>22 comment &middot; 49 shares</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="./images/user-1.png" class="prof"><img src="./images/down-arrow.png" class="arrow"></a>
                <a href="#"><img src="./images/like.png"> <span>Like</span></a>
                <a href="#"><img src="./images/comment.png"> <span>Comment</span></a>
                <a href="#"><img src="./images/share.png"> <span>Share</span></a>
                <a href="#"><img src="./images/send.png"> <span>Send</span></a>
            </div>
        </div>

        <div class="post-container">
            <div class="profile-post">
                <img src="./images/user-2.png" alt="">
                <div class="prop-detail">
                    <h3>Alex Tax</h3>
                    <p>Founder and CEO at Gallelio Group | Angel Investor</p>
                    <span>2hours ago</span>
                </div>
            </div>
            <div class="post-description">
                <p>The success of every websites depands search engine optimisation and digital marketing strategy.if you are o first page of all major search engine then you are ahead among your competitors.</p>
                <img src="./images/post-image-2.png" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="./images/like.png" alt="like"></a>
                    <a href="#"><img src="./images/love.png" alt="like"></a>
                    <a href="#"><img src="./images/clap.png" alt="like"></a>
                    <small class="int-disc">Adil ben and 89 others</small>
                </div>
                <small>22 comment &middot; 49 shares</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="./images/user-1.png" class="prof"><img src="./images/down-arrow.png" class="arrow"></a>
                <a href="#"><img src="./images/like.png"> <span>Like</span></a>
                <a href="#"><img src="./images/comment.png"> <span>Comment</span></a>
                <a href="#"><img src="./images/share.png"> <span>Share</span></a>
                <a href="#"><img src="./images/send.png"> <span>Send</span></a>
            </div>
        </div>

        <div class="post-container">
            <div class="profile-post">
                <img src="./images/user-4.png" alt="">
                <div class="prop-detail">
                    <h3>Layla Fedila</h3>
                    <p>Founder and CEO at Gallelio Group | Angel Investor</p>
                    <span>21hours ago</span>
                </div>
            </div>
            <div class="post-description">
                <p>The success of every websites depands search engine optimisation and digital marketing strategy.if you are o first page of all major search engine then you are ahead among your competitors.</p>
                <img src="./images/post-image-3.png" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="./images/like.png" alt="like"></a>
                    <a href="#"><img src="./images/love.png" alt="like"></a>
                    <a href="#"><img src="./images/clap.png" alt="like"></a>
                    <small class="int-disc">Adil ben and 89 others</small>
                </div>
                <small>22 comment &middot; 49 shares</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="./images/user-1.png" class="prof"><img src="./images/down-arrow.png" class="arrow"></a>
                <a href="#"><img src="./images/like.png"> <span>Like</span></a>
                <a href="#"><img src="./images/comment.png"> <span>Comment</span></a>
                <a href="#"><img src="./images/share.png"> <span>Share</span></a>
                <a href="#"><img src="./images/send.png"> <span>Send</span></a>
            </div>
        </div>

        <div class="post-container">
            <div class="profile-post">
                <img src="./images/user-5.png" alt="">
                <div class="prop-detail">
                    <h3>Xigin Yaw</h3>
                    <p>Founder and CEO at Gallelio Group | Angel Investor</p>
                    <span>Just Now</span>
                </div>
            </div>
            <div class="post-description">
                <p>The success of every websites depands search engine optimisation and digital marketing strategy.if you are o first page of all major search engine then you are ahead among your competitors.</p>
                <img src="./images/post-image-4.png" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="./images/like.png" alt="like"></a>
                    <a href="#"><img src="./images/love.png" alt="like"></a>
                    <a href="#"><img src="./images/clap.png" alt="like"></a>
                    <small class="int-disc">Adil ben and 89 others</small>
                </div>
                <small>22 comment &middot; 49 shares</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="./images/user-1.png" class="prof"><img src="./images/down-arrow.png" class="arrow"></a>
                <a href="#"><img src="./images/like.png"> <span>Like</span></a>
                <a href="#"><img src="./images/comment.png"> <span>Comment</span></a>
                <a href="#"><img src="./images/share.png"> <span>Share</span></a>
                <a href="#"><img src="./images/send.png"> <span>Send</span></a>
            </div>
        </div>

        <div class="post-container">
            <div class="profile-post">
                <img src="./images/user-1.png" alt="">
                <div class="prop-detail">
                    <h3>Rayan Walton</h3>
                    <p>Founder and CEO at Gallelio Group | Angel Investor</p>
                    <span>2day ago</span>
                </div>
            </div>
            <div class="post-description">
                <p>The success of every websites depands search engine optimisation and digital marketing strategy.if you are o first page of all major search engine then you are ahead among your competitors.</p>
                <img src="./images/post-image-2.png" alt="">
            </div>
            <div class="interaction-section">
                <div class="pst-activity-items">
                    <a href="#"><img src="./images/like.png" alt="like"></a>
                    <a href="#"><img src="./images/love.png" alt="like"></a>
                    <a href="#"><img src="./images/clap.png" alt="like"></a>
                    <small class="int-disc">Adil ben and 89 others</small>
                </div>
                <small>22 comment &middot; 49 shares</small>
            </div>
            <div class="interaction-icons">
                <a href="#"><img src="./images/user-1.png" class="prof"><img src="./images/down-arrow.png" class="arrow"></a>
                <a href="#"><img src="./images/like.png"> <span>Like</span></a>
                <a href="#"><img src="./images/comment.png"> <span>Comment</span></a>
                <a href="#"><img src="./images/share.png"> <span>Share</span></a>
                <a href="#"><img src="./images/send.png"> <span>Send</span></a>
            </div>
        </div>
    </div>
    <!------------------------ right side ---------------------------->
    <div class="right-side">
        <div class="side-new">
            <img src="./images/more.png" alt="">
            <h3>Trending New</h3>
            <a href="#">High demand for skilled manpower</a>
            <span>1d ago &middot; 10,039 readers</span>

            <a href="#">Careers growing horizontally too</a>
            <span>19h ago &middot; 1,052 readers</span>

            <a href="#">Less visa for Us, more for Uk</a>
            <span>1d ago &middot; 27,270 readers</span>

            <a href="#">More hiring = higher confidence?</a>
            <span>1d ago &middot; 7,289 readers</span>

            <a href="#">Gautam Adani is the world's third richest</a>
            <span>1d ago &middot; 4,300 readers</span>
            <a href="#" class="read-more">Read More</a>
        </div>

        <div class="sidebar-ad">
            <small>Ad&middot;&middot;&middot; </small>
            <p>Master the 5 principles of web design</p>
            <img src="./images/user-1.png" alt="">
            <img src="./images/mi-logo.png" alt="">
            <b>Brand and Demand in Xiaomi</b>
            <a href="#" class="learn-btn">Learn More</a>
        </div>
        <div class="sidbar-useful-links">
            <a href="#">About</a>
            <a href="#">Accessibility</a>
            <a href="#">Help Center</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Advertising</a>
            <a href="#">Get the App</a>
            <a href="#">More</a>

            <div class="copyright-msg">
                <img src="./images/logo.png" alt="">
                <p>Linkedup &#169; 2023. All right reserved</p>
            </div>
        </div>
    </div>
</div>
<script src="./file.js"></script>
</body>
</html>
