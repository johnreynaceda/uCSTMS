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
    <div class="lg:hidden fixed bottom-0 flex left-0  z-40 w-full p-2">
        <div class="bg-main relative w-full h-16 rounded-full shadow-lg px-5 flex justify-between items-center">
            <button onclick="document.location='{{ route('student-dashboard') }}"
                class="{{ Request::routeIs('student-dashboard') ? 'bg-white text-main' : '' }} relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </button>
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
            <button class="relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
            </button>
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
        <nav class="flex-shrink-0 z-30 bg-main shadow-lg sticky top-0">
            <img src="{{ asset('images/sksu-bg.jpg') }}" class="absolute w-full h-full object-cover opacity-20"
                alt="">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <!-- Logo section -->
                    <div class="flex items-center space-x-2 px-2 lg:px-0 ">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-auto" src="{{ asset('images/SKSULogo.png') }}" alt="Workflow">

                        </div>
                        <h1 class="font-bold text-white text-lg lg:text-xl">SULTAN KUDARAT STATE UNIVERSITY</h1>
                    </div>


                    <div class="flex lg:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="bg-indigo-600 inline-flex items-center justify-center p-2 rounded-md text-indigo-400 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu-alt-1

              Menu open: "hidden", Menu closed: "block"
            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- Links section -->
                    <div class="hidden lg:block lg:w-80">
                        <div class="flex items-center justify-end">
                            <div class="flex">
                                <button type="button"
                                    class=" mt-1 pr-2 focus:outline-none text-white   hover:text-gray-100 ">
                                    <span class="inline-block relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                        <span
                                            class="absolute top-0 right-0 items-center h-3 w-3  rounded-full text-xs font-medium bg-red-500 text-gray-800">

                                        </span>
                                    </span>
                                </button>
                            </div>
                            <!-- Profile dropdown -->
                            <div class="ml-3 relative flex-shrink-0">
                                <div>
                                    <button type="button"
                                        class="bg-indigo-700 flex text-sm rounded-xl  text-white focus:outline-none focus:ring-2 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-10 w-10 rounded-xl shadow "
                                            src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80"
                                            alt="">
                                    </button>
                                </div>

                                <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
                                {{-- <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            {{-- <div class="lg:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "text-white bg-indigo-800", Default: "text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600" -->
                    <a href="#" class="text-white bg-indigo-800 block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page">Dashboard</a>

                    <a href="#"
                        class="text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600 block px-3 py-2 rounded-md text-base font-medium">Domains</a>
                </div>
                <div class="pt-4 pb-3 border-t border-indigo-800">
                    <div class="px-2 space-y-1">
                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Your
                            Profile</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Settings</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Sign
                            out</a>
                    </div>
                </div>
            </div> --}}


        </nav>

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
                                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80"
                                                alt="">
                                        </div>
                                        <div class="space-y-1">
                                            <div class="text-sm font-bold text-gray-700">Debbie Lewis</div>
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
                                                <span
                                                    class="text-sm text-gray-500 group-hover:text-gray-900 font-medium">debbielewis</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Action buttons -->
                                    <div class="flex flex-col bg-white rounded-lg shadow-lg  sm:flex-row xl:flex-col">
                                        <ul class="py-3">
                                            <li class="  flex mb-0.5 items-center">
                                                <div class="bg-main py-2 h-11 w-1"></div>
                                                <div class="bg-gray-50  flex-1 h-10 flex space-x-2">
                                                    <div
                                                        class="border-b text-gray-600 space-x-1 flex-1 flex items-center mx-4">
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
                                            </li>
                                            <li class="  flex mb-0.5 items-center">
                                                <div class="bg-transparent py-2 h-11 w-1"></div>
                                                <div class="bg-tansaparent  flex-1 h-10 flex space-x-2">
                                                    <div
                                                        class="border-b text-gray-600 space-x-1 flex-1 flex items-center mx-4">
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
                                            </li>
                                            <li class="  flex mb-0.5 items-center">
                                                <div class="bg-transparent py-2 h-11 w-1"></div>
                                                <div class="bg-tansaparent  flex-1 h-10 flex space-x-2">
                                                    <div
                                                        class="border-b text-gray-600 space-x-1 flex-1 flex items-center mx-4">
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
                                            </li>
                                            <li class="  flex mb-0.5 items-center">
                                                <div class="bg-transparent py-2 h-11 w-1"></div>
                                                <div class="bg-tansaparent  flex-1 h-10 flex space-x-2">
                                                    <div
                                                        class="border-b text-gray-600 space-x-1 flex-1 flex items-center mx-4">
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

                    <div class="bg-white rounded-lg shadow-lg p-2 py-3 px-4 flex flex-col">
                        <div class="flex">
                            <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80"
                                alt="" class="h-10 rounded-md shadow-md">
                            <div class="bg-blue-400 flex flex-1">
                                <input type="text"
                                    class="flex-1 border-0 focus:outline-none focus:border-0 focus:ring-0"
                                    placeholder="What's your query, Johnrey?">
                            </div>
                            <button
                                class="hidden lg:flex bg-main items-center  lg:block space-x-1 shadow-md rounded-md text-white px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-paperclip">
                                    <path
                                        d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                    </path>
                                </svg>
                                <span>Post It!</span>
                            </button>
                        </div>
                        <button
                            class="flex bg-main items-center lg:hidden mt-2 justify-center py-2 space-x-1 shadow-md rounded-md text-white px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-paperclip">
                                <path
                                    d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                </path>
                            </svg>
                            <span>Post It!</span>
                        </button>
                    </div>

                    <ul role="list" class="space-y-4  my-5">
                        <li class="bg-white px-4  py-6 lg:py-4 shadow sm:p-6 sm:rounded-lg lg:rounded-lg">
                            <article aria-labelledby="question-title-81614">
                                <div>
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-md shadow-md"
                                                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <p class="text-sm font-bold text-gray-600">
                                                <a href="#" class="hover:underline">Dries Vincent</a>
                                            </p>
                                            <p class="text-sm text-gray-500">
                                                <a href="#" class="hover:underline">
                                                    <time datetime="2020-12-09T11:43:00">December 9 at 11:43 AM</time>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0 self-center flex">
                                            <div class="relative inline-block text-left">
                                                <div>
                                                    <button type="button"
                                                        class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600"
                                                        id="options-menu-0-button" aria-expanded="false"
                                                        aria-haspopup="true">
                                                        <span class="sr-only">Open options</span>
                                                        <!-- Heroicon name: solid/dots-vertical -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                                                {{-- <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="options-menu-0-button" tabindex="-1">
                                                    <div class="py-1" role="none">
                                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                        <a href="#" class="text-gray-700 flex px-4 py-2 text-sm"
                                                            role="menuitem" tabindex="-1" id="options-menu-0-item-0">
                                                            <!-- Heroicon name: solid/star -->
                                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                            </svg>
                                                            <span>Add to favorites</span>
                                                        </a>
                                                        <a href="#" class="text-gray-700 flex px-4 py-2 text-sm"
                                                            role="menuitem" tabindex="-1" id="options-menu-0-item-1">
                                                            <!-- Heroicon name: solid/code -->
                                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span>Embed</span>
                                                        </a>
                                                        <a href="#" class="text-gray-700 flex px-4 py-2 text-sm"
                                                            role="menuitem" tabindex="-1" id="options-menu-0-item-2">
                                                            <!-- Heroicon name: solid/flag -->
                                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span>Report content</span>
                                                        </a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="mt-2 text-sm font-semibold text-gray-600 space-y-4">
                                    <p>Jurassic Park was an incredible idea and a magnificent feat of engineering, but
                                        poor protocols and a disregard for human safety killed what could have otherwise
                                        been one of the best businesses of our generation.</p>

                                </div>
                                <div class="mt-6 flex justify-between space-x-8">
                                    <div class="flex space-x-6">

                                        <span class="inline-flex items-center text-sm">
                                            <button type="button"
                                                class="inline-flex space-x-1 text-main hover:text-gray-500">
                                                <!-- Heroicon name: solid/chat-alt -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                                <span class="font-semibold text-gray-700">11</span>
                                                <span class="sr-only">replies</span>
                                            </button>
                                        </span>

                                    </div>
                                    <div class="flex text-sm ">
                                        <span
                                            class="inline-flex items-center text-sm text-main cursor-pointer hover:text-main">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </li>

                        <!-- More questions... -->
                    </ul>
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
                            <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-6 w-6 rounded-full"
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
                            <a href="#" class="text-indigo-600 font-semibold hover:text-indigo-900">View all activity
                                <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="pt-6 pb-2 px-2 flex justify-between items-center">
                        <h2 class="text-gray-600 font-bold uppercase">SCHOOL OFFICES</h2>
                        <span
                            class="inline-flex items-center p-1 px-2 rounded-full text-xs shadow font-bold bg-main1 text-white">
                            1
                        </span>
                    </div>
                    <div>

                        <ul role="list" class=" ">
                            <li class="col-span-1 mb-1 flex shadow-lg rounded-md">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center w-16 bg-main text-white text-sm font-medium rounded-l-md">
                                    <img src="{{ asset('images/SKSULogo.png') }}" class="h-10" alt="">
                                </div>
                                <div
                                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                    <div class="flex-1 px-4 py-4 text-sm font-bold uppercase truncate">
                                        <p class="text-gray-700 ">School</p>
                                    </div>
                                    <div class="flex-shrink-0 pr-2">
                                        <button type="button"
                                            class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: solid/dots-vertical -->
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-span-1 mb-1 flex shadow-lg rounded-md">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center w-16 bg-main text-white text-sm font-medium rounded-l-md">
                                    <img src="{{ asset('images/SKSULogo.png') }}" class="h-10" alt="">
                                </div>
                                <div
                                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                    <div class="flex-1 px-4 py-4 text-sm font-bold uppercase truncate">
                                        <p class="text-gray-700 ">School</p>
                                    </div>
                                    <div class="flex-shrink-0 pr-2">
                                        <button type="button"
                                            class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: solid/dots-vertical -->
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-span-1 mb-1 flex shadow-lg rounded-md">
                                <div
                                    class="flex-shrink-0 flex items-center justify-center w-16 bg-main text-white text-sm font-medium rounded-l-md">
                                    <img src="{{ asset('images/SKSULogo.png') }}" class="h-10" alt="">
                                </div>
                                <div
                                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                    <div class="flex-1 px-4 py-4 text-sm font-bold uppercase truncate">
                                        <p class="text-gray-700 ">School</p>
                                    </div>
                                    <div class="flex-shrink-0 pr-2">
                                        <button type="button"
                                            class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: solid/dots-vertical -->
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
