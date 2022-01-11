<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    <script src='fullcalendar/main.js'></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
</head>

<body class="font-sans antialiased bg-mainback bg-main ">

    <x-shared.notification />


    <div class="main  h-full">
        @include('layouts.fixElements.navbar')
        <div class=" mx-10 my-8">
            <div class="bg-white bg-opacity-30 mx-8 h-4 rounded-t-3xl"></div>
            <div class="bg-main1 rounded-2xl flex">
                <div class=" w-64 flex flex-col my-4">
                    @switch(auth()->user()->user_type_id)
                        @case(1)
                            <a href="{{ route('admin-dashboard') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('admin-dashboard') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Dashboard</h1>
                                </div>
                                <div
                                    class="{{ Request::routeIs('admin-dashboard') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>
                            <a href="{{ route('admin-office') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('admin-office') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">School Office</h1>
                                </div>
                                <div
                                    class="{{ Request::routeIs('admin-office') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>
                            <a class="flex space-x-2 mb-2">
                                <div
                                    class="hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Settings</h1>
                                </div>
                                <div class="bg-main1 w-4  rounded-l-3xl"></div>
                            </a>
                            <hr class="mt-2 mx-2 mb-3">
                            <a class="flex space-x-2 mb-2">
                                <div
                                    class="hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Users Management </h1>
                                </div>
                                <div class="bg-main1 w-4  rounded-l-3xl"></div>
                            </a>
                            <a class="flex space-x-2 mb-2">
                                <div
                                    class="hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Reports</h1>
                                </div>
                                <div class="bg-main1 w-4  rounded-l-3xl"></div>
                            </a>
                        @break
                        @case(2)
                            <a href="{{ route('office-dashboard') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('office-dashboard') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Dashboard</h1>
                                </div>
                                <div
                                    class="{{ Request::routeIs('office-dashboard') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>
                            <a href="{{ route('office-query') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('office-query') || Request::routeIs('office-openquery') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Query Management</h1>
                                </div>
                                <div
                                    class="{{ Request::routeIs('office-query') || Request::routeIs('office-openquery') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>
                            <a href="{{ route('office-service') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('office-service') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Student Service</h1>
                                </div>
                                <div
                                    class=" {{ Request::routeIs('office-service') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>

                            <a href="{{ route('office-appointment') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('office-appointment') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Appointments</h1>
                                </div>
                                <div
                                    class="{{ Request::routeIs('office-appointment') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>
                            <a href="{{ route('office-calendar') }}" class="flex space-x-2 mb-2">
                                <div
                                    class="{{ Request::routeIs('office-calendar') || Request::routeIs('office-manageAppointment') ? 'bg-white cursor-pointer bg-opacity-20' : '' }} hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Calendar</h1>
                                </div>
                                <div
                                    class="{{ Request::routeIs('office-calendar') || Request::routeIs('office-manageAppointment') ? 'bg-gray-100' : 'bg-main1' }} w-4  rounded-l-3xl">
                                </div>
                            </a>
                            <hr class="mt-2 mx-2 mb-3">
                            <a class="flex space-x-2 mb-2">
                                <div
                                    class="hover:bg-white cursor-pointer hover:bg-opacity-20 text-white rounded-lg py-2 px-3 flex-1 flex space-x-2 items-center ml-3 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <h1 class="text-md mt-1 font-semibold">Reports</h1>
                                </div>
                                <div class="bg-main1 w-4  rounded-l-3xl"></div>
                            </a>
                        @break
                        @default

                    @endswitch
                </div>
                <div class="bg-gray-100 rounded-2xl flex-1 p-6">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
