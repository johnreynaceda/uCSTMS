 <div x-data="{addpost: @entangle('addpost'), attach: ''}">
     {{-- <div class="bg-white flex flex-col  mb-4 p-3 rounded-lg px-4">
         <div class="flex space-x-3 items-center ">
             <div class="user">
                 <img src="{{ auth()->user()->profile_photo_url }}"
                     class=" h-12 w-12 rounded-full border-2 border-main" alt="">
             </div>
             <button wire:click="add" @click="attach = ''"
                 class="flex-1 bg-gray-100 h-10 hover:bg-gray-200 rounded-full">
                 <div class="flex px-3 text-md text-gray-400">
                     What's your personal concern?
                 </div>
             </button>
         </div>
         <hr class="my-2">
         <div class="flex justify-center">
             <div @click="addpost = !addpost, attach = 'attach'"
                 class="flex space-x-1 rounded-md cursor-pointer  p-1 px-4 hover:bg-gray-50">
                 <img src="{{ asset('images/icons/attach.png') }}" alt="">
                 <span class="font-semibold text-gray-700">Attachments</span>
             </div>
         </div>
     </div>
     <div class="relative h-full" style="min-height: 36rem;">
         <ul role="list" class="space-y-4">

             @forelse ($queries as $query)
                 <li class="bg-white px-4 py-2 shadow sm:p-6 rounded-lg">
                     <article aria-labelledby="question-title-81614">
                         <div>
                             <div class="flex space-x-3">
                                 <div class="flex-shrink-0">
                                     <img class="h-10 w-10 rounded-full border-2 border-main"
                                         src="{{ auth()->user()->profile_photo_url }}" alt="">
                                 </div>
                                 <div class="min-w-0 flex-1">
                                     <p class="text-sm font-medium text-gray-900">
                                         <a href="#" class="hover:underline">{{ auth()->user()->name }}</a>
                                     </p>
                                     <p class="text-sm text-gray-500 lg:flex  lg:space-x-2">
                                         <a href="#" class="hover:underline">
                                             <time
                                                 datetime="2020-12-09T11:43:00">{{ $query->created_at->format('F j, Y, g:i a') }}</time>
                                         </a>
                                         <a href="#" class="hover:underline flex items-center">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                 <path fill-rule="evenodd"
                                                     d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                     clip-rule="evenodd" />
                                             </svg> . <span class=" text-sm text-gray-700">

                                                 {{ $query->office->office_name }}

                                             </span>

                                         </a>
                                     </p>
                                 </div>
                                 <div class="flex-shrink-0 self-center flex">
                                     <div class="relative inline-block text-left" x-data="{action: false}">
                                         <div>
                                             <button @click="action = !action" type="button"
                                                 class="-m-2 p-2 rounded-full bg-main flex items-center text-white hover:bg-main1"
                                                 id="options-menu-0-button" aria-expanded="false" aria-haspopup="true">
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
                                         <div x-show="action" @click.away="action = !action0" x-cloak x-collapse
                                             class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                             role="menu" aria-orientation="vertical"
                                             aria-labelledby="options-menu-0-button" tabindex="-1">
                                             <div class="py-1" role="none">
                                                 <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                 <a href="#" class="text-gray-700 flex items-center px-4 py-1 text-sm"
                                                     role="menuitem" tabindex="-1" id="options-menu-0-item-0">
                                                     <!-- Heroicon name: solid/star -->
                                                     <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-6 text-red-500 w-6" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                         <path stroke-linecap="round" stroke-linejoin="round"
                                                             stroke-width="2"
                                                             d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                     </svg>
                                                     <span>Delete Query</span>
                                                 </a>

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="mt-4 text-lg text-gray-700 space-y-4">
                             <p>{{ $query->content }}</p>
                         </div>
                         <div class="flex flex-col border-t border-b mt-2">

                             <div class="mt-2 mb-2">
                                 <ul role="list" class="grid grid-cols-3 gap-4 sm:grid-cols-2 lg:grid-cols-6">
                                     @foreach ($query->medias as $attach)
                                         <iframe
                                             src="https://drive.google.com/file/d/{{ $attach->filename }}/preview?embedded=true"
                                             class="w-20 h-20 rounded-lg border-2 border-main flex-wrap"></iframe>
                                     @endforeach


                                     <!-- More people... -->
                                 </ul>


                             </div>
                         </div>
                         <div class="mt-3 flex justify-between space-x-8">
                             <div class="flex space-x-6">

                                 <span class="inline-flex items-center text-sm">
                                     <button type="button" class="inline-flex space-x-2 text-main hover:text-gray-500">
                                         <!-- Heroicon name: solid/chat-alt -->
                                         <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path fill-rule="evenodd"
                                                 d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                 clip-rule="evenodd" />
                                         </svg>
                                         <span class="font-medium text-gray-900">{{ $query->feedbacks_count }}</span>
                                         <span class="sr-only">replies</span>
                                     </button>
                                 </span>

                             </div>
                             <div class="flex space-x-6">

                                 <span class="inline-flex items-center text-sm">
                                     <a href="{{ route('student-query', ['id' => $query->id]) }}" type="button"
                                         class="inline-flex space-x-2 text-white rounded-md shadow bg-main p-1 px-2 hover:bg-main1">
                                         <span>Open</span>
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                             viewBox="0 0 20 20" fill="currentColor">
                                             <path
                                                 d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                             <path
                                                 d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                         </svg>
                                     </a>
                                 </span>

                             </div>

                         </div>
                     </article>
                 </li>
             @empty

             @endforelse


             <!-- More questions... -->
         </ul>
     </div>
     <!-- End main area -->
     <!-- This example requires Tailwind CSS v2.0+ -->
     <div x-show="addpost" x-cloak class="fixed top-0 inset-0 z-50 right-0 " aria-labelledby="modal-title"
         x-data="{office:false}" role="dialog" aria-modal="true">
         <div x-show="addpost" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="flex items-end justify-center   pt-4 px-4 pb-20 text-center sm:block sm:p-0">
             <div class="fixed inset-0 bg-main bg-opacity-75 transition-opacity" aria-hidden="true"></div>

             <div x-show="addpost" x-cloak x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="bg-white relative sm:mx-100 flex-1 rounded-lg mt-20 ">
                 <div class="flex flex-col w-full">
                     <div class="header py-2 flex w-full justify-between items-center px-3 border-b-2 border-main">
                         <h1 class="text-lg text-main font-bold">
                             Add New Query
                         </h1>

                         <div @click="addpost = false"
                             class="hover:bg-red-500 cursor-pointer hover:text-white hover:shadow rounded-full p-1 flex items-center justify-center">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                 <path fill-rule="evenodd"
                                     d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                     clip-rule="evenodd" />
                             </svg>
                         </div>
                     </div>
                     <div class="body">
                         <div class="flex px-4 py-2">
                             <div class="flex  space-x-3 items-center">
                                 <div class="user">
                                     <img src="{{ auth()->user()->profile_photo_url }}"
                                         class="rounded-full h-12 w-12 border-2 border-main" alt="">
                                 </div>
                                 <div class="flex flex-col items-start">
                                     <h1 class="text-lg font-semibold uppercase ">{{ auth()->user()->name }}</h1>
                                     <div class="drop" x-data={office:false}>

                                         <div class="relative">
                                             <button @click="office = !office" class="flex relative">
                                                 <div class="icon bg-main p-1 text-white rounded-l-lg pl-1.5">
                                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                             clip-rule="evenodd" />
                                                     </svg>
                                                 </div>
                                                 <div
                                                     class=" border rounded-r-lg text-sm flex px-2 items-center uppercase space-x-3 justify-start ">
                                                     <div class="">
                                                         @if ($office_id == null)
                                                             Select Office
                                                         @else
                                                             CAMPUS {{ $office_name }}
                                                         @endif
                                                     </div>
                                                     <svg xmlns="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-gray-700" viewBox="0 0 20 20"
                                                         fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                             clip-rule="evenodd" />
                                                     </svg>

                                                 </div>

                                             </button>
                                             <ul x-show="office" x-collapse @click.away="office = false"
                                                 class="absolute z-10 mt-1 w-full bg-white border shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
                                                 tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                                 aria-activedescendant="listbox-option-3">
                                                 <!--
        Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

        Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
      -->
                                                 @forelse ($offices as $office)
                                                     <li wire:click="selectOffice({{ $office->id }})"
                                                         class="text-gray-900 cursor-pointer select-none hover:text-main1 relative flex px-1 justify-between"
                                                         id="listbox-option-0" role="option">
                                                         <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                         <span class="font-normal block uppercase truncate">
                                                             Campus {{ $office->office_name }}
                                                         </span>
                                                         <span
                                                             class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                                                             <!-- Heroicon name: solid/check -->
                                                             <svg class="h-5 w-5"
                                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                 fill="currentColor" aria-hidden="true">
                                                                 <path fill-rule="evenodd"
                                                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                     clip-rule="evenodd" />
                                                             </svg>
                                                         </span>
                                                     </li>
                                                 @empty

                                                 @endforelse


                                                 <!-- More items... -->
                                             </ul>
                                         </div>
                                     </div>
                                     <div>


                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="flex flex-col px-4 border h-44 overflow-y-auto">
                             <div class="flex px-4">
                                 <textarea name="" wire:model="content"
                                     class="w-full text-lg text-gray-700 border-0 focus:outline-none focus:ring-0" id=""
                                     cols="30" placeholder="What's your personal concern?" rows="3"></textarea>
                             </div>
                             <div x-show="attach == 'attach'"
                                 class="flex mx-4 border-main h-auto border-dashed rounded-lg p-2 mb-2 border">
                                 <x-input.filepond wire:model="attachments" multiple />
                             </div>
                             <div @click="attach = 'attach'"
                                 class="flex cursor-pointer bg-gray-50 mx-4 p-2 px-3 justify-between items-center border-main shadow border rounded-lg">
                                 <h1 class="sm:text-lg font-semibold text-gray-700">Add to your query</h1>
                                 <div class="flex items-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main"
                                         viewBox="0 0 20 20" fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                         viewBox="0 0 20 20" fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500"
                                         viewBox="0 0 20 20" fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z"
                                             clip-rule="evenodd" />
                                     </svg>
                                 </div>
                             </div>
                         </div>
                         <div wire:click="post"
                             class="flex my-5 cursor-pointer hover:bg-main1 mx-4 bg-main justify-center p-2 text-white font-bold rounded-lg shadow-lg">
                             <span>POST</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}
     {{-- END ADD POST --}}
     {{-- <div class="lg:hidden fixed bottom-0 flex left-0  z-40 w-full p-2">
         <div class="bg-main relative w-full h-16 rounded-full shadow-lg px-5 flex justify-between items-center">
             <button onclick="document.location='{{ route('student-dashboard') }}"
                 class="{{ Request::routeIs('student-dashboard') ? 'bg-white text-main' : '' }} relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                     <path
                         d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                 </svg>
             </button>
             <a href="{{ route('student-service') }}"
                 class="{{ Request::routeIs('student-service') ? 'bg-white text-main' : '' }} relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                     <path
                         d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
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
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                     <path fill-rule="evenodd"
                         d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                         clip-rule="evenodd" />
                 </svg>
             </button>
             <button class="relative text-white  z-10 hover:bg-white hover:text-main p-3  rounded-full ">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                     fill="currentColor">
                     <path fill-rule="evenodd"
                         d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                         clip-rule="evenodd" />
                 </svg>
             </button>



             <img src="{{ asset('images/sksu-bg.jpg') }}"
                 class="absolute left-0 h-full w-full rounded-full  opacity-20" alt="">

         </div>
     </div> --}}


     <div class="bg-white rounded-lg shadow-lg p-2 py-3 px-4 flex flex-col">
         <div class="flex">
             <img src="{{ auth()->user()->profile_photo_url }}" alt="" class="h-10 border rounded-md shadow-md">
             <div class="bg-blue-400 flex flex-1">
                 <input type="text" wire:click="add"
                     class="flex-1 border-0 focus:outline-none focus:border-0 focus:ring-0"
                     placeholder="What's your query, {{ auth()->user()->name }}?">
             </div>
             <button wire:click="add"
                 class="hidden lg:flex bg-main items-center  lg:block space-x-1 shadow-md rounded-md text-white px-2">
                 <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-paperclip">
                     <path
                         d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                     </path>
                 </svg>
                 <span>Post It!</span>
             </button>
         </div>
         <button wire:click="add"
             class="flex bg-main items-center lg:hidden mt-2 justify-center py-2 space-x-1 shadow-md rounded-md text-white px-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-paperclip">
                 <path
                     d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                 </path>
             </svg>
             <span>Post It!</span>
         </button>
     </div>

     <ul role="list" class="space-y-4  my-5">
         @forelse ($queries as $query)
             <li class="bg-white px-4  py-6 lg:py-4 shadow sm:p-6 sm:rounded-lg lg:rounded-lg">
                 <article aria-labelledby="question-title-81614">
                     <div>
                         <div class="flex space-x-3">
                             <div class="flex-shrink-0">
                                 <img class="h-10 w-10 rounded-md shadow-md"
                                     src="{{ auth()->user()->profile_photo_url }}" alt="">
                             </div>
                             <div class="min-w-0 flex-1">
                                 <p class="text-sm font-bold text-gray-600">
                                     <a href="#" class="hover:underline">{{ auth()->user()->name }}</a>
                                 </p>
                                 <p class="text-sm text-gray-500">
                                     <a href="#" class="hover:underline">
                                         <time
                                             datetime="2020-12-09T11:43:00">{{ $query->created_at->format('F j, Y, g:i a') }}</time>
                                     </a>
                                 </p>
                             </div>
                             <div class="flex-shrink-0 self-center flex">
                                 <div class="relative inline-block text-left">
                                     <div>
                                         <button type="button"
                                             class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600"
                                             id="options-menu-0-button" aria-expanded="false" aria-haspopup="true">
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
                     <div class="mt-2 text-md font-semibold text-gray-600 space-y-4">
                         <p>{{ $query->content }}</p>

                     </div>
                     <div class="mt-2">
                         @if ($query->hasMedia == null)

                         @else
                             <div class="flex flex-col bg-gray-50  px-1 text-gray-500 shadow cursor-pointer"
                                 x-data="{open: false}">
                                 <div @click="open = !open" class="flex  items-end space-x-1 justify-between">
                                     <span class="text-sm font-semibold ">View Upload Attachments</span>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                         :class="open ?  'transition duration-100 rotate-90' : ''" height="15"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-chevrons-right">
                                         <polyline points="13 17 18 12 13 7"></polyline>
                                         <polyline points="6 17 11 12 6 7"></polyline>
                                     </svg>
                                 </div>
                                 <div x-show="open" x-cloak x-collapse class="mt-1">
                                     <ul role="list" class="grid grid-cols-2  sm:grid-cols-3 gap-1 lg:grid-cols-4 ">
                                         @foreach ($query->medias as $attach)
                                             <li class="relative">
                                                 <iframe
                                                     src="https://drive.google.com/file/d/{{ $attach->filename }}/preview?embedded=true"
                                                     class="bg-white shadow w-full h-32 mb-1" frameborder="0"></iframe>

                                             </li>
                                         @endforeach


                                         <!-- More files... -->
                                     </ul>
                                 </div>
                             </div>
                         @endif
                     </div>
                     <div class="mt-6 flex justify-between space-x-8">
                         <div class="flex space-x-6">

                             <span class="inline-flex items-center text-sm">
                                 <a href="{{ route('student-query', ['id' => $query->id]) }}" type="button"
                                     class="inline-flex space-x-1 text-main hover:text-gray-500">
                                     <!-- Heroicon name: solid/chat-alt -->
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-message-circle">
                                         <path
                                             d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                         </path>
                                     </svg>
                                     <span class="font-semibold text-gray-700">{{ $query->feedbacks_count }}</span>
                                     <span class="sr-only">replies</span>
                                 </a>
                             </span>

                         </div>
                         <div class="flex text-sm ">
                             <span class="inline-flex items-center text-sm text-main cursor-pointer hover:text-main">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                     fill="currentColor">
                                     <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                 </svg>
                             </span>
                         </div>
                     </div>
                 </article>
             </li>
         @empty

         @endforelse

         <!-- More questions... -->
     </ul>

     {{-- addpost --}}
     <div x-show="addpost" x-cloak class="fixed top-0 inset-0 z-50 right-0 " aria-labelledby="modal-title"
         x-data="{office:false}" role="dialog" aria-modal="true">
         <div x-show="addpost" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="flex items-end justify-center   pt-4 px-4 pb-20 text-center sm:block sm:p-0">
             <div class="fixed inset-0 bg-main bg-opacity-75 transition-opacity" aria-hidden="true"></div>

             <div x-show="addpost" x-cloak x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="bg-white relative sm:mx-100 flex-1  mt-20 ">
                 <div class="flex flex-col w-full">
                     <div class="header py-2 flex w-full justify-between items-center px-3 border-b-2 border-main">
                         <h1 class="text-lg text-main font-bold">
                             Add New Query
                         </h1>

                         <div @click="addpost = false"
                             class="hover:bg-red-500 cursor-pointer hover:text-white hover:shadow rounded-full p-1 flex items-center justify-center">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                 <path fill-rule="evenodd"
                                     d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                     clip-rule="evenodd" />
                             </svg>
                         </div>
                     </div>
                     <div class="body">
                         <div class="flex px-4 py-2">
                             <div class="flex  space-x-3 items-center">
                                 <div class="user">
                                     <img src="{{ auth()->user()->profile_photo_url }}"
                                         class="rounded-md h-12 w-12 shadow" alt="">
                                 </div>
                                 <div class="flex flex-col items-start">
                                     <h1 class="text-md text-gray-700 font-semibold uppercase ">
                                         {{ auth()->user()->name }}</h1>
                                     <div class="drop" x-data={office:false}>

                                         <div class="relative">
                                             <button @click="office = !office" class="flex relative">
                                                 <div class="icon bg-main p-1 text-white rounded-l-lg pl-1.5">
                                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                             clip-rule="evenodd" />
                                                     </svg>
                                                 </div>
                                                 <div
                                                     class=" border rounded-r-lg text-sm flex px-2 items-center uppercase space-x-3 justify-start ">
                                                     <div class="">
                                                         @if ($office_id == null)
                                                             Select Office
                                                         @else
                                                             CAMPUS {{ $office_name }}
                                                         @endif
                                                     </div>
                                                     <svg xmlns="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-gray-700" viewBox="0 0 20 20"
                                                         fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                             clip-rule="evenodd" />
                                                     </svg>

                                                 </div>

                                             </button>
                                             <ul x-show="office" x-collapse @click.away="office = false"
                                                 class="absolute z-10 mt-1 w-full bg-white border shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
                                                 tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                                 aria-activedescendant="listbox-option-3">
                                                 <!--
        Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

        Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
      -->
                                                 @forelse ($offices as $office)
                                                     <li wire:click="selectOffice({{ $office->id }})"
                                                         class="text-gray-900 cursor-pointer select-none hover:text-main1 relative flex px-1 justify-between"
                                                         id="listbox-option-0" role="option">
                                                         <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                         <span class="font-normal block uppercase truncate">
                                                             Campus {{ $office->office_name }}
                                                         </span>
                                                         <span
                                                             class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                                                             <!-- Heroicon name: solid/check -->
                                                             <svg class="h-5 w-5"
                                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                 fill="currentColor" aria-hidden="true">
                                                                 <path fill-rule="evenodd"
                                                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                     clip-rule="evenodd" />
                                                             </svg>
                                                         </span>
                                                     </li>
                                                 @empty

                                                 @endforelse


                                                 <!-- More items... -->
                                             </ul>
                                         </div>
                                     </div>
                                     <div>


                                     </div>
                                 </div>
                             </div>

                         </div>
                         <div class="flex flex-col px-4 border overflow-y-auto">
                             <div class="flex px-4">
                                 <textarea name="" wire:model="content"
                                     class="w-full text-lg text-gray-700 border-0 focus:outline-none focus:ring-0" id=""
                                     cols="30" placeholder="What's your personal concern?" rows="3"></textarea>
                             </div>
                             <div x-show="attach == 'attach'"
                                 class="flex mx-4 border-main h-auto border-dashed rounded-lg p-2 mb-2 border">
                                 <x-input.filepond wire:model="attachments" multiple />
                             </div>
                             <div @click="attach = 'attach'"
                                 class="flex cursor-pointer bg-gray-50 mx-4 p-2 px-3 justify-between items-center border-main shadow border rounded-lg">
                                 <h1 class="sm:text-lg font-semibold text-gray-700">Add to your query</h1>
                                 <div class="flex items-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-main"
                                         viewBox="0 0 20 20" fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                         viewBox="0 0 20 20" fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500"
                                         viewBox="0 0 20 20" fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z"
                                             clip-rule="evenodd" />
                                     </svg>
                                 </div>
                             </div>
                         </div>
                         <div wire:click="post"
                             class="flex my-5 cursor-pointer hover:bg-main1 mx-4 bg-main justify-center p-2 text-white font-bold rounded-lg shadow-lg">
                             <span wire:loading.class="hidden">POST</span>
                             <svg wire:loading.target="post" wire:loading.class="block" width="20"
                                 viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" class="w-8 hidden h-8">
                                 <defs>
                                     <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                         <stop stop-color="rgb(255, 255, 255)" stop-opacity="0" offset="0%"></stop>
                                         <stop stop-color="rgb(255, 255, 255)" stop-opacity=".631" offset="63.146%">
                                         </stop>
                                         <stop stop-color="rgb(255, 255, 255)" offset="100%"></stop>
                                     </linearGradient>
                                 </defs>
                                 <g fill="none" fill-rule="evenodd">
                                     <g transform="translate(1 1)">
                                         <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)"
                                             stroke-width="3">
                                             <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                 to="360 18 18" dur="0.9s" repeatCount="indefinite"></animateTransform>
                                         </path>
                                         <circle fill="rgb(255, 255, 255)" cx="36" cy="18" r="1">
                                             <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                 to="360 18 18" dur="0.9s" repeatCount="indefinite"></animateTransform>
                                         </circle>
                                     </g>
                                 </g>
                             </svg>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     {{-- endaddpost --}}
 </div>
