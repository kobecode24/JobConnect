<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile page</title>
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}" />
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
        #overlay {
            z-index: 110;
        }
        .z-index{
            z-index: 120;
        }
    </style>
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
                <div class="flex items-center justify-between">
                    <h3 class="font-bold">{{ $user->name}}</h3>
                    <!-- Edit -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">
                        <svg class="w-9 h-9" viewBox="0 0 32 32">
                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-.9 0-1.3l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                        </svg>
                    </button>
                    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-60"></div>
                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-index items-center justify-center w-full md:inset-0  max-h-full">
                        <div class="relative p-4 w-8/12 max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Profile Section
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
                                    @method('PUT')
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="flex flex-wrap items-center mb-6 col-span-2">
                                            <div class="w-8/12 pe-3">
                                                <label for="resume" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Image</label>
                                                <input type="file" name="resume" id="resume" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-2 w-4/12">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                <input type="text" name="name" id="name" value="{{ $user->name }}" class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Headline</label>
                                            <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Your description">
                                        </div>
                                        <div class="flex flex-wrap items-center mb-6 col-span-2">
                                            <div class="w-8/12">
                                                <label for="resume" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resume</label>
                                                <input type="file" name="resume" id="resume" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>

                                            <div class="w-4/12 ps-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rh_user_id">
                                                    Skills
                                                </label>
                                                <div class="relative">
                                                    <button id="dropdownHelperButton" data-dropdown-toggle="dropdownHelper" class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 inline-flex justify-between items-center" type="button">Skills
                                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownHelper" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow">
                                                        <select multiple id="skill_id" name="skill_id[]" class=" appearance-none border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded" id="skill_id">
                                                            @foreach ($skills as $skill)
                                                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @error('skill_id')
                                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="about" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About </label>
                                            <textarea id="about" name="about" rows="4" class="block p-2.5 w-full text-sm text-gray-900 border-gray-200 rounded-lg border focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="About You"></textarea>
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
                <h3 class="font-bold">About</h3>
                <p>The success of every website depends on search engine optimization and digital marketing strategy. On the first page of all major search engines, you are ahead among your competitors. If you are on the first page of all major search engines, you are ahead among your competitors.</p>
                <span>See More...</span>
            </div>
            <div class="pm-experiences">
                <div class="flex items-center justify-between">
                    <h3 class="font-bold">Experiences</h3>
                    <!-- Edit -->
                    <button data-modal-target="experience-model" data-modal-toggle="experience-model" type="button">
                        <svg class="w-9 h-9" viewBox="0 0 32 32">
                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-.9 0-1.3l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                        </svg>
                    </button>
                    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-60"></div>
                    <!-- Main modal -->
                    <div id="experience-model" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-8/12 max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Application Section
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="experience-model">
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
                <div class="flex items-center justify-between">
                    <h3 class="font-bold">Education</h3>
                    <!-- Edit -->
                    <button data-modal-target="eduction-model" data-modal-toggle="eduction-model" type="button">
                        <svg class="w-9 h-9" viewBox="0 0 32 32">
                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-.9 0-1.3l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                        </svg>
                    </button>
                    {{-- <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-60"></div>
                    <!-- Main modal -->
                    <div id="eduction-model" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-8/12 max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Application Section
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="eduction-model">
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
                                        </div>
                                    </div>
                                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>

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
                <div class="flex items-center justify-between">
                    <h3 class="font-bold">Skills</h3>
                    <!-- Edit -->
                    <button data-modal-target="skill-model" data-modal-toggle="skill-model" type="button">
                        <svg class="w-9 h-9" viewBox="0 0 32 32">
                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-.9 0-1.3l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                        </svg>
                    </button>
                    {{-- <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-60"></div>
                    <!-- Main modal -->
                    <div id="skill-model" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-8/12 max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Application Section
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="skill-model">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" action="{{ route('applications.store') }}" method="POST">
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Your email" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div>
                    @foreach ($userSkills as $skill)
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const overlay = document.getElementById('overlay');
            const modal = document.getElementById('crud-modal');
            const toggleButtons = document.querySelectorAll('[data-modal-toggle]');
            const targetButtons = document.querySelectorAll('[data-modal-target]');

            toggleButtons.forEach(button => {
                button.addEventListener('click', () => {
                    modal.classList.toggle('hidden');
                    overlay.classList.toggle('hidden');
                });
            });

            targetButtons.forEach(button => {
                button.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                    overlay.classList.remove('hidden');
                });
            });
        });
    </script>
