<div class="relative h-full" style="min-height: 36rem;">
    <ul role="list" class="space-y-4">

        @forelse ($queries as $query)
            {{-- <li class="bg-white px-4 py-6 shadow sm:p-6 rounded-lg">
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
                                        role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button"
                                        tabindex="-1">
                                        <div class="py-1" role="none">
                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                            <a href="#" class="text-gray-700 flex items-center px-4 py-1 text-sm"
                                                role="menuitem" tabindex="-1" id="options-menu-0-item-0">
                                                <!-- Heroicon name: solid/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-red-500 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <div class="bg-blue-300 h-48 lg:80">
                        sddssd
                    </div>
                    <div class="bg-white h-80 flex-1 relative  flex flex-col-reverse p-4 space-y-2  overflow-y-auto">
                        @forelse ($feedbacks as $feedback)
                            @if ($feedback->fromOffice)

                                <div class="message flex space-x-2 mb-2">
                                    <img src="{{ \App\Models\User::find($feedback->user_id)->profile_photo_url }}"
                                        class="h-10 w-10 rounded-full" alt="">
                                    <div class="bg-gray-100 p-1 px-2 max-w-sm text-gray-700 rounded-lg shadow-md">
                                        <p>{{ $feedback->content }}</p>
                                    </div>
                                </div>


                            @else

                                <div class="message items-end flex justify-end space-x-2 mb-2">

                                    <div class="bg-main px-2  p-1 max-w-sm text-white rounded-lg shadow-md">
                                        <p>{{ $feedback->content }}</p>
                                    </div>
                                    <img src="{{ auth()->user()->profile_photo_url }}" class="h-10 w-10 rounded-full"
                                        alt="">
                                </div>
                            @endif

                        @empty
                            <div class="flex h-full items-center justify-center">
                                <div class="flex flex-col items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span> No Feedback!</span>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="mt-2">

                        <div class="flex  items-center justify-between space-x-1">
                            <div class="bg-gren-400 flex flex-shrink-0">
                                <img src="{{ auth()->user()->profile_photo_url }}"
                                    class="h-10 w-10 rounded-full border-2 border-main" alt="">
                            </div>
                            <div class="bg-gren-400">
                                <input wire:model="content" type="text" class="flex-1 rounded-lg h-10"
                                    placeholder="Write a feedback...">
                            </div>
                            <div class="bg-gren-400">
                                <button wire:click="send"
                                    class="bg-main p-1 h-10 px-2 rounded-lg text-white hover:bg-main1">Send</button>
                            </div>
                        </div>
                    </div>
                </article>
            </li> --}}


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
                    <div class="mt-4 border-t py-1  space-y-1 h-64 lg:96  flex flex-col px-2">
                        <div class=" h-full flex flex-col-reverse  space-y-4  overflow-y-auto">

                            @forelse ($feedbacks as $feedback)
                                @if ($feedback->fromOffice)


                                    <div class="message flex-shrink-0 flex justify-start space-x-2 mb-2">
                                        <img src="{{ \App\Models\User::find($feedback->user_id)->profile_photo_url }}"
                                            class="h-10 w-10 shadow rounded-md" alt="">
                                        <div class="flex leading-3 flex-col">
                                            <span class="text-xs font-semibold text-gray-600 flex justify-start">
                                                {{ $query->office->office_name }}</span>
                                            <div
                                                class="bg-gray-200 p-2 max-w-sm  text-gray-700 rounded-r-xl rounded-bl-xl shadow">
                                                <p>{{ $feedback->content }}</p>
                                            </div>
                                        </div>

                                    </div>


                                @else

                                    <div class="message flex-shrink-0  flex justify-end space-x-2 mb-2">
                                        <div class="flex leading-3 flex-col">
                                            <span
                                                class="text-xs font-semibold text-gray-600 flex justify-end">You</span>
                                            <div
                                                class="bg-main p-2 max-w-sm text-white rounded-l-xl rounded-br-xl shadow-md">
                                                <p>{{ $feedback->content }}</p>
                                            </div>
                                        </div>
                                        <img src="{{ auth()->user()->profile_photo_url }}"
                                            class="h-10 w-10 shadow rounded-md" alt="">
                                    </div>
                                @endif

                            @empty
                                <div class="flex h-full items-center justify-center">
                                    <div class="flex flex-col items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span> No Feedback!</span>
                                    </div>
                                </div>
                            @endforelse





                        </div>
                        <div class="bg-gray-100 rounded-md shadow flex items-center justify-between px-2 h-12 lg:h-14">
                            <input type="text" wire:model="content" placeholder="Your Message..."
                                class="flex-1 focus:outline-none border-0 bg-gray-100 focus:ring-0">
                            <button wire:click="send" class="text-main hover:text-main1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-send">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg></button>
                        </div>
                    </div>
                </article>
            </li>

        @empty

        @endforelse


        <!-- More questions... -->
    </ul>
</div>
