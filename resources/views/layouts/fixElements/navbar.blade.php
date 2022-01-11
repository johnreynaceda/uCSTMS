<nav class="border-b border-opacity-30 sticky top-0 "
    x-data="{atTop:window.pageYOffset || document.documentElement.scrollTop}"
    @scroll.window="atTop = window.pageYOffset || document.documentElement.scrollTop"
    x-bind:class="atTop>0 ? 'shadow bg-main z-40' : ''">
    <div class="mx-auto px-4 sm:px-6     lg:px-10">
        <div class="flex justify-between h-16">
            <div class="flex">

                <div class="flex-shrink-0 flex items-center border-r space-x-2 border-opacity-30 pr-5">

                    <img class="hidden lg:block h-10 w-auto" src="{{ asset('images/SKSULogo.png') }}" alt="Workflow">
                    <h1 class="font-extrabold text-lg text-white">uCSTMS</h1>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-4 text-white">
                            <li>
                                <div>
                                    <a href="#" class="">
                                        <!-- Heroicon name: solid/home -->
                                        <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                        </svg>
                                        <span class="sr-only">Home</span>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 h-5 w-5 " xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                    </svg>
                                    <a href="#" class="ml-4 text-sm font-bold">@yield('breadcrumb')</a>
                                </div>
                            </li>


                        </ol>
                    </nav>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-shrink-0">

                    <div class="hidden md:ml-4 md:flex-shrink-0 md:flex items-center">

                        <div class="user-type mr-5">
                            <span class="text-white font-bold underline cursor-pointer uppercase hover:text-main1">
                                @switch(auth()->user()->user_type_id)
                                    @case(1)
                                        ADMINISTRATOR
                                    @break
                                    @case(2)
                                        CAMPUS {{ auth()->user()->userinformation->office->office_name }}
                                    @break
                                    @default

                                @endswitch
                            </span>
                        </div>

                        <button type="button" class=" mt-1 pr-2 rounded-full text-white hover:text-gray-100 ">
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

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative" x-data="{userdrop:false}">
                            <div>
                                <button type="button" @click="userdrop = !userdrop"
                                    class="bg-white rounded-md flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-10 w-10 rounded-md" src="{{ auth()->user()->profile_photo_url }}"
                                        alt="">
                                </button>
                            </div>

                            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-200"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                            <div x-show="userdrop" x-cloak @click.away="userdrop = false"
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#"
                                    class=" items-center px-4 py-2 text-sm font-bold flex space-x-1 text-green-800 hover:text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Your Profile</span>
                                </a>


                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="flex space-x-1 px-4 py-2 text-sm font-bold text-green-800 hover:text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span>Sign out</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</nav>
