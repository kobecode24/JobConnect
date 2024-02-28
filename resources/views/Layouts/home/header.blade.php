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
            <li><a href="{{ route('home.index') }}"><img src="{{ asset('img/home.png') }}" alt="home"> <span>Home</span></a></li>
            <li><a href="#"><img src="{{ asset('img/network.png') }}" alt="network"> <span>Network</span></a></li>
            <li><a href="#"><img src="{{ asset('img/jobs.png') }}" alt="Job"> <span>Jobs</span></a></li>
            <li><a href="#"><img src="{{ asset('img/message.png') }}" alt="Message"> <span>Messaging</span></a></li>
            <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" type="button">
                <li><a href="#"><img src="{{ asset('img/notification.png') }}" alt="notification"> <span>Notifications</span></a></li>
            </button>

            <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                Notifications
            </div>
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                @foreach($applications as $application)
                    <div class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-11 h-11" src="{{asset('img/user-2.png')}}" alt="Jese image">
                            <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                    <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Your Application for {{$application->job_offer->name}} has been approved</div>
                            <div class="flex justify-between">
                                <div class="text-xs text-blue-600 dark:text-blue-500">1 min ago</div>
                                <div class="flex">
                                    <form action="{{ route('applications.destroy', $application->id) }}" method="POST" class="mx-3">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs text-red-600">Reject</button>
                                    </form>

                                    <form action="{{ route('applications.update', $application->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="job_offer_id" value="{{$application->job_offer->id}}">
                                        <button type="submit" class="text-xs text-blue-600">Accept</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                <div class="inline-flex items-center ">
                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
                    View all
                </div>
            </a>
            </div>

            <li><a href="{{ route('company.create') }}"><img src="{{ asset('img/jobs.png') }}" alt="Companies"> <span>Create Your Company</span></a></li>
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
                <a href="{{ route('users.show', Auth::id() )}}"><span>See your profile</span></a>
            </div>
            <a href="#"><img src="{{ asset('img/feedback.png') }}" alt=""><span>Give feedback</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/setting.png') }}" alt=""><span>Setting & Privacy</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/help.png') }}" alt=""><span>Help & Support</span><small>></small></a>
            <a href="#"><img src="{{ asset('img/display.png') }}" alt=""><span>Display & Accessibility</span><small>></small></a>
            <a href="{{route('logout')}}"><img src="{{ asset('img/logout.png') }}" alt=""><span>Logout</span><small>></small></a>
        </div>
    </div>
</nav>
