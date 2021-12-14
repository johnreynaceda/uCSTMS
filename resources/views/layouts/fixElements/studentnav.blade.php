 <nav class="flex-shrink-0 bg-main h-16 shadow-xl relative top-0 sticky z-40 rounded-b-3xl">
     <img src="{{ asset('images/sksu-bg.jpg') }}" class="absolute w-full h-full rounded-b-3xl object-cover opacity-20"
         alt="">
     <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
         <div class="relative flex items-center justify-between h-16">
             <!-- Logo section -->
             <div class="flex items-center px-2 space-x-3 lg:px-0">
                 <div class="flex-shrink-0">
                     <img class="h-12 w-auto" src="{{ asset('images/SKSULogo.png') }}" alt="Workflow">
                 </div>
                 <h1 class="lg:text-xl text-sm font-bold text-white"> SULTAN KUDARAT STATE UNIVERSITY</h1>
             </div>

             <!-- Search section -->

             <div class="flex lg:hidden">
                 <div class="flex items-center justify-end">
                     <div class="flex">
                         <button type="button" class=" mt-1 pr-2 focus:outline-none text-white   hover:text-gray-100 ">
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
                     <div class="ml-2 relative flex-shrink-0">
                         <div>
                             <button type="button"
                                 class="bg-indigo-700 flex text-sm rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-1  focus:ring-white"
                                 id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                 <span class="sr-only">Open user menu</span>
                                 <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
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
                         {{-- <div class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">View Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Logout</a>
                                </div> --}}
                     </div>
                 </div>
             </div>
             <!-- Links section -->
             <div class="hidden lg:block lg:w-80">
                 <div class="flex items-center justify-end">
                     <div class="flex">
                         <button type="button" class=" mt-1 pr-2 focus:outline-none text-white   hover:text-gray-100 ">
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
                     <div class="ml-2 relative flex-shrink-0">
                         <div>
                             <button type="button"
                                 class="bg-indigo-700 flex text-sm rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-1  focus:ring-white"
                                 id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                 <span class="sr-only">Open user menu</span>
                                 <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
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
                         {{-- <div class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">View Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Logout</a>
                                </div> --}}
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Mobile menu, show/hide based on menu state. -->
     {{-- <div class="lg:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3">
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white bg-indigo-800">Dashboard</a>
                    <a href="#"
                        class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Support</a>
                </div>
                <div class="pt-4 pb-3 border-t border-indigo-800">
                    <div class="px-2">
                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Your
                            Profile</a>
                        <a href="#"
                            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Settings</a>
                        <a href="#"
                            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600">Sign
                            out</a>
                    </div>
                </div>
            </div> --}}
 </nav>
