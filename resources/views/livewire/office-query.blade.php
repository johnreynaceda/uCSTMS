   <div class="header">
       <h1 class="text-xl font-bold uppercase text-gray-600">Query Management</h1>
   </div>
   <div class="mt-4">
       <div class="">
           <div class="flex space-x-4">
               <div class=" flex-1">


                   <div class="bg-white  shadow rounded-lg">
                       <div class="header p-2 border-b-2 flex justify-between">
                           <div class="filter">

                               <div class=" relative" x-data="{filter:false}">
                                   <button type="button" @click="filter = !filter"
                                       class="relative w-40 bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-pointer focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                       aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                       <span class="flex items-center text-gray-700 space-x-1 divide-x-2">
                                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                               viewBox="0 0 24 24" stroke="currentColor">
                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                   d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                                           </svg>
                                           <span class="pl-2 block ">
                                               All
                                           </span>
                                       </span>
                                       <span
                                           class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                           <!-- Heroicon name: solid/selector -->
                                           <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                               viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                               <path fill-rule="evenodd"
                                                   d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                   clip-rule="evenodd" />
                                           </svg>
                                       </span>
                                   </button>
                                   <ul x-show="filter" @click.away="filter = false" x-cloak
                                       class="absolute z-50  mt-1 w-40 bg-white shadow-lg max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5  focus:outline-none sm:text-sm"
                                       tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                       aria-activedescendant="listbox-option-3">
                                       <!--
                                                                                                                                                                                     Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                                                                                                                                                                                     Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                                                                                                                                                                                   -->
                                       <li class="text-gray-700 hover:text-main1 font-bold cursor-pointer select-none relative py-2 pl-3 pr-9"
                                           id="listbox-option-0" role="option">
                                           <div class="flex items-center">

                                               <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                               <span class="font-semibold  block ">
                                                   All
                                               </span>
                                           </div>
                                       </li>
                                       <li class="text-gray-700 hover:text-main1 font-bold cursor-pointer select-none relative py-2 pl-3 pr-9"
                                           id="listbox-option-0" role="option">
                                           <div class="flex items-center">

                                               <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                               <span class="font-semibold block ">
                                                   Not responded
                                               </span>
                                           </div>
                                       </li>
                                       <li class="text-gray-700 hover:text-main1 font-bold cursor-pointer select-none relative py-2 pl-3 pr-9"
                                           id="listbox-option-0" role="option">
                                           <div class="flex items-center">

                                               <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                               <span class="font-semibold block ">
                                                   Done
                                               </span>
                                           </div>
                                       </li>

                                       <!-- More items... -->
                                   </ul>
                               </div>
                           </div>
                           <div class="search">
                               <div
                                   class="border border-gray-300 px-2 rounded-md shadow-sm flex text-gray-700 items-center">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                       viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                   </svg>
                                   <input type="text" class="h-9 border-0 focus:outline-none focus:ring-0"
                                       placeholder="Search query...">
                               </div>
                           </div>
                       </div>
                       <div class="mt-2 body">
                           <div class="list">
                               <ul role="list" class="divide-y divide-gray-200">
                                   @forelse ($queries as $query)
                                       <a href="{{ route('office-openquery', ['id' => $query->id]) }}"
                                           class="p-2 flex items-center justify-between hover:bg-gray-50 cursor-pointer">
                                           <div class="user flex items-center space-x-2">
                                               <img src="{{ $query->user->profile_photo_url }}"
                                                   class="h-8 w-8 rounded-md bg-gray-300 shadow" alt="">
                                               <span
                                                   class="font-semibold text-sm text-gray-600">{{ $query->user->name }}</span>
                                           </div>
                                           <div class="content text-gray-700 w-96 truncate">
                                               <span>{{ $query->content }}</span>
                                           </div>
                                           <div class="time text-gray-700 font-semibold">
                                               <span class="inline-block relative bg-main text-white rounded-full p-1">
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                       viewBox="0 0 20 20" fill="currentColor">
                                                       <path fill-rule="evenodd"
                                                           d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                           clip-rule="evenodd" />
                                                   </svg>
                                                   <span
                                                       class="absolute bottom-1 right-1 transform translate-y-1 translate-x-1 block border-2 border-white rounded-full">
                                                       <span class="block h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                                   </span>
                                               </span>
                                           </div>
                                       </a>
                                   @empty
                                       <li
                                           class="p-2 flex items-center justify-between hover:bg-gray-50 cursor-pointer">
                                           <div class="user flex items-center space-x-2">
                                               <img src="" class="h-8 w-8 rounded-full bg-gray-300 shadow" alt="">
                                               <span class="font-semibold text-sm text-gray-800">Johnrey Naceda</span>
                                           </div>
                                           <div class="content text-gray-700 w-96 truncate">
                                               <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                                   perferendis
                                                   veritatis sint ducimus, quos quidem reiciendis excepturi minus
                                                   similique
                                                   placeat
                                                   blanditiis. Eveniet maxime magni, sequi odit molestiae quas ullam
                                                   officiis?</span>
                                           </div>
                                           <div class="time text-gray-700 font-semibold">
                                               <span class="inline-block relative bg-main text-white rounded-full p-1">
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                       viewBox="0 0 20 20" fill="currentColor">
                                                       <path fill-rule="evenodd"
                                                           d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                           clip-rule="evenodd" />
                                                   </svg>
                                                   <span
                                                       class="absolute bottom-1 right-1 transform translate-y-1 translate-x-1 block border-2 border-white rounded-full">
                                                       <span class="block h-1.5 w-1.5 rounded-full bg-red-500"></span>
                                                   </span>
                                               </span>
                                           </div>
                                       </li>
                                   @endforelse
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="w-64">

                   <x-shared.sidepost />
               </div>
           </div>
       </div>
