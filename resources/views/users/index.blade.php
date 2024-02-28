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
            <p>Sort by: <p class="flex items-center"><span class="inline-flex mr-1">top</span><img src="{{ asset('img/down-arrow.png') }}" width="15px" alt=""></p></p>
        </div>



        @foreach($jobOffers as $jobOffer)
            <div class="post-container">
                <div class="profile-post">
                    <img src="{{ asset('img/user-3.png') }}" alt="">
                    <div class="prop-detail">
                        <h3>{{ $jobOffer->creator->name }}</h3>
                        <p>{{ $jobOffer->creator->description }}</p>
                        <span>{{ $jobOffer->created_at->format('d-m-Y') }}</span>
                    </div>
                </div>
                <div class="post-description">
                    <p>{{ $jobOffer->description }}</p>
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
                    <a href="#"><img src="{{ asset('img/user-1.png') }}" class="prof"><img
                            src="{{ asset('img/down-arrow.png') }}" class="arrow"></a>
                    <a href="#"><img src="{{ asset('img/like.png') }}"> <span>Like</span></a>
                    <a href="#"><img src="{{ asset('img/comment.png') }}"> <span>Comment</span></a>
                    <a href="#"><img src="{{ asset('img/share.png') }}"> <span>Share</span></a>
                    <div>
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Apply Now
                        </button>

                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Application Section
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5" action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                                                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Your email" required>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="resume" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Resume</label>
                                                <input type="file" name="resume" id="resume" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                                <input id="phone" name="phone" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Phone Number">
                                                <input id="job_offer_id" name="job_offer_id" value="{{ $jobOffer->id }}" type="hidden">
                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
