   <nav class="flex-shrink-0 z-30 bg-main shadow-lg sticky top-0">
       <img src="{{ asset('images/sksu-bg.jpg') }}" class="absolute w-full h-full object-cover opacity-20" alt="">
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
                       class=" inline-flex items-center justify-center p-2 rounded-md text-indigo-400 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
                       aria-controls="mobile-menu" aria-expanded="false">
                       <span class="sr-only">Open main menu</span>
                       <!--
              Icon when menu is closed.

              Heroicon name: outline/menu-alt-1

              Menu open: "hidden", Menu closed: "block"
            -->
                       <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor" aria-hidden="true">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M4 6h16M4 12h8m-8 6h16" />
                       </svg>
                       <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                       <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor" aria-hidden="true">
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
                       <div class="ml-3 relative flex-shrink-0" x-data="{dropdown:false}">
                           <div>
                               <button type="button" @click="dropdown = !dropdown"
                                   class=" flex text-sm rounded-lg  text-white focus:outline-none focus:ring-2 focus:ring-white"
                                   id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                   <span class="sr-only">Open user menu</span>
                                   <img class="h-10 w-10 rounded-lg shadow "
                                       src="{{ auth()->user()->profile_photo_url }}" alt="">
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
                           <div x-show="dropdown" x-cloak x-collapse
                               class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                               role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                               <!-- Active: "bg-gray-100", Not Active: "" -->
                               <a href="#"
                                   class="flex px-4 py-2 space-x-1 font-semibold text-sm hover:text-main text-gray-700"
                                   role="menuitem" tabindex="-1" id="user-menu-item-0">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                       fill="currentColor">
                                       <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                           clip-rule="evenodd" />
                                   </svg>
                                   <span>Your Profile</span>
                               </a>



                               <form method="POST" action="{{ route('logout') }}">
                                   @csrf
                                   <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                       class="flex px-4 py-2 space-x-1 text-sm font-semibold hover:text-main text-gray-700"
                                       role="menuitem" tabindex="-1" id="user-menu-item-2">
                                       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                           viewBox="0 0 20 20" fill="currentColor">
                                           <path fill-rule="evenodd"
                                               d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                               clip-rule="evenodd" />
                                       </svg>
                                       <span>Sign out</span></a>
                               </form>
                           </div>
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
