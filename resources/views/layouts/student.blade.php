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

    </style>
</head>

<body class="font-sans antialiased bg-mainback bg-gray-100 ">

    <x-shared.notification />

    <div class="relative min-h-screen flex flex-col">
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
                                        class="mt-2 flex bg-main p-1 px-2 space-x-1 items-center cursor-pointer hover:bg-main1 rounded-md shadow text-white">
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
                                    <a href=""
                                        class="flex  p-1 space-x-2 items-center rounded-md hover:bg-main mb-1 hover:text-white text-main1">
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
                                    <ul role="list" class="divide-y divide-gray-200">
                                        <li class="py-1 flex cursor-pointer">
                                            <div
                                                class="p-2 px-3 shadow text-white rounded-full flex items-center bg-main">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3 flex items-center">
                                                <p class=" hover:text-main font-bold text-gray-700">Campus
                                                    Clinic
                                                </p>

                                            </div>
                                        </li>
                                        <li class="py-1 flex cursor-pointer">
                                            <div
                                                class="p-2 px-3 shadow text-white rounded-full flex items-center bg-main">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3 flex items-center">
                                                <p class=" hover:text-main font-bold text-gray-700">Campus
                                                    Clinic
                                                </p>

                                            </div>
                                        </li>
                                        <li class="py-1 flex cursor-pointer">
                                            <div
                                                class="p-2 px-3 shadow text-white rounded-full flex items-center bg-main">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3 flex items-center">
                                                <p class=" hover:text-main font-bold text-gray-700">Campus
                                                    Clinic
                                                </p>

                                            </div>
                                        </li>
                                        <li class="py-1 flex cursor-pointer">
                                            <div
                                                class="p-2 px-3 shadow text-white rounded-full flex items-center bg-main">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3 flex items-center">
                                                <p class=" hover:text-main font-bold text-gray-700">Campus
                                                    Clinic
                                                </p>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
