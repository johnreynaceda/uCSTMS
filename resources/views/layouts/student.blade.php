<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/filepond-plugin-media-preview@1.0.9/dist/filepond-plugin-media-preview.min.js"
        rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-overlay.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet" />
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        .filepond--item {
            width: calc(50% - 0.5em);
        }

        @media (min-width: 30em) {
            .filepond--item {
                width: calc(50% - 0.5em);
            }
        }

        @media (min-width: 50em) {
            .filepond--item {
                width: calc(33.33% - 0.5em);
            }
        }

        [x-cloak] {
            display: none !important;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

    </style>
</head>

<body class="font-sans antialiased bg-mainback bg-gray-100">

    {{-- <x-shared.notification /> --}}

    {{-- <div class="relative min-h-screen flex flex-col">
        <!-- Navbar -->
        @include('layouts.fixElements.studentnav')



        <!-- 3 column wrapper -->
        <div class="flex-grow w-full max-w-7xl mx-auto xl:px-8 lg:flex">
            <!-- Left sidebar & main wrapper -->
            <div class="flex-1 min-w-0  relative  xl:flex ">
                <div
                    class="border-b hidden lg:block  relative   border-gray-200 xl:border-b-0 xl:flex-shrink-0 xl:w-64 xl:border-r xl:border-gray-200 ">
                    <div class="h-full pl-4 pr-6 py-6 relative sm:pl-6 lg:pl-8 xl:pl-0">
                        <!-- Start left column area -->
                        <div class="h-full relative " style="min-height: 12rem;">
                            <div class=" sticky top-24  inset-0 rounded-lg">
                                <div class="bg-white rounded-md shadow p-2">
                                    <div class="flex items-center space-x-2">
                                        <img src="{{ auth()->user()->profile_photo_url }}"
                                            class="h-10 w-10 rounded-full border-2 border-main" alt="">
                                        <h1 class="text-md font-semibold text-gray-700 truncate">
                                            {{ auth()->user()->name }}</h1>
                                    </div>
                                    <div
                                        class="mt-2 flex bg-main p-1 px-2 space-x-1 items-center cursor-pointer text-gray-600 hover:text-main hover:bg-main1 rounded-md shadow text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Account Setting</span>
                                    </div>
                                </div>
                                <div class="bg-white mt-2 rounded-md shadow p-2">
                                    <a href="{{ route('student-dashboard') }}"
                                        class="{{ Request::routeIs('student-dashboard') ? 'bg-main text-white' : 'text-main1' }} flex mb-1  p-1 space-x-2 items-center rounded-md hover:bg-main hover:text-white ">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                            </svg>
                                        </div>
                                        <span class="font-semibold">HOME</span>

                                    </a>
                                    <a href="{{ route('student-service') }}"
                                        class="flex {{ Request::routeIs('student-service') ? 'bg-main text-white' : 'text-main1' }}  p-1 space-x-2 items-center rounded-md hover:bg-main mb-1 hover:text-white ">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                            </svg>
                                        </div>
                                        <span class="font-semibold">STUDENT SERVICES</span>

                                    </a>
                                    <a href=""
                                        class="flex  p-1 space-x-2 items-center rounded-md hover:bg-main hover:text-white text-main1">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="font-semibold">APPOINTMENT</span>

                                    </a>

                                </div>
                            </div>
                        </div>
                        <!-- End left column area -->
                    </div>
                </div>

                <div class=" lg:min-w-0 lg:flex-1">
                    <div class="h-full py-6 px-4 sm:px-6 lg:px-8">

                        <!-- Start main area-->
                        @yield('main')
                    </div>
                </div>
            </div>

            <div class=" pr-5 sm:pr-6 lg:pr-8 relative lg:flex-shrink-0 lg:border-l lg:border-gray-200 xl:pr-0 ">
                <div class="h-full relative pl-6 py-6 lg:w-80">
                    <!-- Start right column area -->
                    <div class=" h-full">
                        <div class="lg:sticky lg:top-24">
                            <div class="bg-white p-2 rounded-lg shadow">
                                <img src="{{ asset('images/UCSTMSLogo.png') }}" class="rounded-lg" alt="">
                            </div>
                            <div class="bg-white mt-2 p-2 rounded-lg shadow">
                                <div class="header flex items-center justify-between">
                                    <h1 class="font-bold text-gray-700">SCHOOL OFFICES</h1>
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <x-shared.sideoffice />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <div class="lg:hidden fixed bottom-0 flex left-0  z-40 w-full p-2">
        <div class="bg-main relative w-full h-16 rounded-full shadow-lg px-5 flex justify-between items-center">
            <a href="{{ route('student-dashboard') }}"
                class="{{ Request::routeIs('student-dashboard') ? 'bg-white text-main' : '' }} relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </a>
            <a href="{{ route('student-service') }}"
                class="{{ Request::routeIs('student-service') ? 'bg-white text-main' : '' }} relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-users">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </a>
            <div @click="addpost = !addpost, attach = ''" class="relative z-10 bg-white text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <a href="{{ route('student-appointment') }}"
                class="{{ Request::routeIs('student-appointment') ? 'bg-white text-main' : '' }} relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
            </a>
            <button class="relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-settings">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                    </path>
                </svg>
            </button>



            <img src="{{ asset('images/sksu-bg.jpg') }}"
                class="absolute left-0 h-full w-full rounded-full  opacity-20" alt="">

        </div>
    </div>


    <div class="fixed top-0 left-0 w-1/2 h-full " aria-hidden="true"></div>
    <div class="fixed top-0 right-0 w-1/2 h-full " aria-hidden="true"></div>
    <div class="relative min-h-full flex flex-col">
        <!-- Navbar -->
        @include('layouts.fixElements.studentnav')

        <!-- 3 column wrapper -->
        <div class="flex-grow w-full h-full max-w-7xl mx-auto xl:px-8 lg:flex">
            <!-- Left sidebar & main wrapper -->
            <div class="flex-1 min-w-0 h-full  xl:flex">
                <!-- Account profile -->
                <div
                    class="xl:flex-shrink-0 xl:w-64 xl:border-r hidden lg:block h-full sticky top-16 xl:border-gray-200 ">
                    <div class="pl-4 pr-4  py-6 sm:pl-6  lg:pl-8 xl:pl-0">
                        <div class="flex items-center   justify-between">
                            <div class="flex-1   space-y-8">
                                <div
                                    class="space-y-8 sm:space-y-0 sm:flex sm:justify-between sm:items-center xl:block xl:space-y-8">
                                    <!-- Profile -->
                                    <div class="flex items-center bg-white rounded-lg shadow-lg  p-2 py-4 space-x-3">
                                        <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-12 w-12 rounded-xl ring-2 ring-main"
                                                src="{{ auth()->user()->profile_photo_url }}" alt="">
                                        </div>
                                        <div class="space-y-1">
                                            <div class="text-sm font-bold text-gray-600">{{ auth()->user()->name }}
                                            </div>
                                            <a href="#" class="group flex items-center space-x-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20px"
                                                    height="20px">
                                                    <path fill="#FFC107"
                                                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                                    <path fill="#FF3D00"
                                                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                                    <path fill="#4CAF50"
                                                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                                    <path fill="#1976D2"
                                                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                                </svg>
                                                @php
                                                    $mail = auth()->user()->email;
                                                    $email = explode('@', $mail);
                                                    
                                                @endphp
                                                <span
                                                    class="text-sm text-gray-500 group-hover:text-gray-900 font-medium">{{ $email[0] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Action buttons -->
                                    <div class="flex flex-col bg-white rounded-lg shadow-lg  sm:flex-row xl:flex-col">
                                        <ul class="py-3">
                                            <a href="{{ route('student-dashboard') }}"
                                                class=" {{ Request::routeIs('student-dashboard') ? 'text-main' : '' }} cursor-pointer  text-gray-600 hover:text-main group flex  items-center">
                                                <div
                                                    class="{{ Request::routeIs('student-dashboard') ? 'bg-main' : '' }} py-2 h-11 w-1">
                                                </div>
                                                <div
                                                    class="{{ Request::routeIs('student-dashboard') ? 'bg-gray-50' : '' }}  flex-1 h-10 flex ">
                                                    <div class="border-b space-x-1 flex-1 flex items-center mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-home">
                                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                                            </path>
                                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                        </svg>
                                                        <span class="font-bold ">Home</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ route('student-service') }}"
                                                class="{{ Request::routeIs('student-service') ? 'text-main bg-gray-50' : '' }} cursor-pointer text-gray-600 hover:text-main group  flex  items-center">
                                                <div
                                                    class="{{ Request::routeIs('student-service') ? 'bg-main' : '' }} py-2 h-11 w-1">
                                                </div>
                                                <div class="  flex-1 h-10 flex space-x-2">
                                                    <div class="border-b space-x-1 flex-1 flex items-center mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-users">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg>
                                                        <span class="font-bold ">Student Service</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ route('student-appointment') }}"
                                                class="{{ Request::routeIs('student-appointment') ? 'text-main bg-gray-50' : '' }} group cursor-pointer text-gray-600 hover:text-main  flex mb-0.5 items-center">
                                                <div
                                                    class="{{ Request::routeIs('student-appointment') ? 'bg-main' : '' }} py-2 h-11 w-1">
                                                </div>
                                                <div class="bg-tansaparent  flex-1 h-10 flex space-x-2">
                                                    <div class="border-b space-x-1 flex-1 flex items-center mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-clipboard">
                                                            <path
                                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                            </path>
                                                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                                        </svg>
                                                        <span class="font-bold ">Appointment</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <li
                                                class=" group  cursor-pointer text-gray-600 hover:text-main flex mb-0.5 items-center">
                                                <div class="bg-transparent py-2 h-11 w-1"></div>
                                                <div class="bg-tansaparent  flex-1 h-10 flex space-x-2">
                                                    <div class="border-b space-x-1 flex-1 flex items-center mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-settings">
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                            <path
                                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                            </path>
                                                        </svg>
                                                        <span class="font-bold ">Settings</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Meta info -->
                                <hr class="border border-main">
                                <div
                                    class="flex flex-col p-2 bg-white shadow-lg rounded-lg space-y-6 sm:flex-row sm:space-y-0 sm:space-x-8 xl:flex-col xl:space-x-0 xl:space-y-6">
                                    <img src="{{ asset('images/UCSTMSLogo.png') }}" class="rounded-lg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects List -->
                <div class=" lg:min-w-0 py-6 px-4 lg:flex-1">
                    @yield('main')

                </div>
            </div>
            <!-- Activity feed -->
            <div class=" pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l lg:border-gray-200 xl:pr-0">
                <div class="pl-6 lg:w-80 sticky top-16">
                    <div class="pt-6 pb-2 px-2 flex justify-between items-center">
                        <h2 class="text-gray-600 font-bold uppercase">Activity</h2>
                        <span
                            class="inline-flex items-center p-1 px-2 rounded-full text-xs shadow font-bold bg-main1 text-white">
                            1
                        </span>
                    </div>
                    <div class="bg-white p-2 rounded-lg shadow-lg">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-2 ">
                                <div class="flex space-x-3">
                                    <img class="h-8 w-8 shadow rounded-md"
                                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80"
                                        alt="">
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-sm font-medium">You</h3>
                                            <p class="text-sm text-gray-500">1h</p>
                                        </div>
                                        <p class="text-sm text-gray-500">Deployed Workcation (2d89f0c8 in master) to
                                            production</p>
                                    </div>
                                </div>
                            </li>

                            <!-- More items... -->
                        </ul>
                        <div class="py-2 text-sm border-t border-gray-200">
                            <a href="#" class="text-main font-semibold hover:text-indigo-900">View all activity
                                <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div>
                        <x-shared.sideoffice />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    @stack('scripts')
</body>

</html>
