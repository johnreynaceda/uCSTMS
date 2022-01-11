{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex">
                <a href="{{ route('google-login') }}" class="bg-green-600 p-2 text-white rounded-md"> Sign In with
                    Google</a>
            </div>
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
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

<body class="font-sans antialiased bg-mainback bg-main h-screen overflow-y-hidden">
    <div class="flex justify-center items-center h-full">
        <div class="bg-main relative hidden lg:block border-t border-b border-l h-110 w-100">
            <img src="{{ asset('images/sksu-bg.jpg') }}" class="h-full object-cover opacity-50" alt="">
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="">
                    <div class="mt-20 flex flex-col justify-center items-center">
                        <img src="{{ asset('images/SKSULogo.png') }}" class="h-20" alt="">
                        <div class="mt-3 flex flex-col items-center justify-center">
                            <h1 class="text-xl font-extrabold text-white">SULTAN KUDARAT STATE UNIVERSITY</h1>
                            <h1 class="text-md text-center  text-white">Province of Sultan Kudarat, 9800, City
                                of Tacurong,
                                Philippiness</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white relative h-110 w-100 p-2  border-t border-b border-r">
            <img src="{{ asset('images/UCSTMSLogo.png') }}" class="h-16  relative z-50 rounded-md shadow" alt="">
            <div class="mt-6 flex flex-col justify-center items-center">
                <h1 class="text-xl text-main font-extrabold">Sign in to your Account</h1>
                {{-- <x-jet-validation-errors class="mb-2" />

                    @if (session('status'))
                        <div class="mb-2 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif --}}
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-5 relative z-50 px-5 lg:px-10">

                    <div class="mb-2">
                        <label for="email" class="block  font-semibold text-gray-700">Email</label>
                        <div class="mt-1">
                            <input type="email" id="email" name="email" :value="old('email')" required autofocus
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block h-12 w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="block  font-semibold text-gray-700">Password</label>
                        <div class="mt-1">
                            <input type="password" id="password" type="password" name="password" required
                                autocomplete="current-password"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block h-12 w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button
                            class="w-full bg-main py-2 uppercase font-bold text-white hover:bg-main1 rounded-md">Login</button>
                    </div>
                    <div class="mt-6 relative">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">
                                    Or continue with
                                </span>
                            </div>
                        </div>

                        <div class="mt-6 relative z-50 grid grid-cols-1 gap-3">
                            <div>
                                <a href="{{ route('google-login') }}"
                                    class="w-full inline-flex space-x-1 justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-main hover:text-white">

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
                                    {{-- <span class="font-semibold">Sign in with Google</span> --}}
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </form>
            <div class="absolute bg-green-600 shadow bottom-0 right-0 h-40 w-40 rounded-tl-full"></div>
            <div class="absolute bg-green-600 shadow  bottom-0 left-0 h-40 w-20 rounded-r-full"></div>
        </div>
    </div>
    @livewireScripts
    @stack('scripts')
</body>

</html>
