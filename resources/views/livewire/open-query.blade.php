<div>
    <div class="mt-4 flex shadow rounded-lg  h-100">
        <div class=" w-6/12 h-full ">
            <div class="bg-white border-r-2 rounded-l-lg  h-full w-full">
                <div class="header p-2 border-b-2 flex justify-between space-x-3 items-center">
                    <div class="div flex">
                        <svg xmlns="http://www.w3.org/2000/svg" wire:click="back"
                            class="h-7 w-7 text-main cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <h1 class="font-bold text-main text-lg ">Queries</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-main" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="body p-5 ">
                    <div class="border-2 shadow-inner rounded-xl p-4">
                        <div class="flex space-x-3">
                            <img src="{{ $query->user->profile_photo_url }}" class="h-12  w-12 shadow-md rounded-md"
                                alt="">
                            <div class="flex flex-col">
                                <div class="name">
                                    <h1 class="font-semibold text-md text-gray-600">{{ $query->user->name }}</h1>
                                </div>
                                <div class="date text-gray-600 leading-3">
                                    <span>{{ $query->created_at->format('F j, Y, g:i a') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-lg text-gray-700 text-justify">{{ $query->content }}</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <ul role="list" class="grid grid-cols-3 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            @forelse ($query->medias as $attach)
                                <iframe
                                    src="https://drive.google.com/file/d/{{ $attach->filename }}/preview?embedded=true"
                                    class="h-28 w-28 bg-gray-50  shadow" frameborder="0"></iframe>
                            @empty

                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-6/12 flex bg-white py-2 flex-col h-full px-4">
            {{-- <div class="bg-white flex-1 relative flex flex-col-reverse p-4 space-y-2 space-y-reverse overflow-y-auto">
                @forelse ($feedbacks as $feedback)
                    @if ($feedback->fromOffice)

                        <div class="message items-end flex justify-end space-x-2 mb-2">

                            <div class="bg-main px-2  p-1 max-w-sm text-white rounded-lg shadow-md">
                                <p>{{ $feedback->content }}</p>
                            </div>
                            <img src="{{ auth()->user()->profile_photo_url }}" class="h-10 w-10 rounded-full" alt="">
                        </div>

                    @else
                        <div class="message flex space-x-2 mb-2">
                            <img src="{{ \App\Models\User::find($feedback->user_id)->profile_photo_url }}"
                                class="h-10 w-10 rounded-full" alt="">
                            <div class="bg-gray-100 p-1 px-2 max-w-sm text-gray-700 rounded-lg shadow-md">
                                <p>{{ $feedback->content }}</p>
                            </div>
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
            </div> --}}
            {{-- @forelse ($feedbacks as $feedback)
                @if ($feedback->fromOffice)
                
                <div class="message items-end flex justify-end space-x-2 mb-2">
                    
                    <div class="bg-main px-2  p-1 max-w-sm text-white rounded-lg shadow-md">
                        <p>{{$feedback->content}}</p>
                    </div>
                    <img src="{{auth()->user()->profile_photo_url}}" class="h-10 w-10 rounded-full" alt="">
                </div>
             
                @else
                <div class="message flex space-x-2 mb-2">
                    <img src="{{\App\Models\User::find($feedback->user_id)->profile_photo_url}}" class="h-10 w-10 rounded-full" alt="">
                    <div class="bg-gray-100 p-1 px-2 max-w-sm text-gray-700 rounded-lg shadow-md">
                        <p>{{$feedback->content}}</p>
                    </div>
                </div>
                @endif
                
                @empty
                   <div class="flex h-full items-center justify-center">
                    <div class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                          </svg>
                       <span> No Feedback!</span>
                    </div>
                   </div>
                @endforelse --}}


            {{-- <div class="bg-white rounded-br-lg border-t-2 flex space-x-2 p-2 px-3 ">
                <img src="{{ auth()->user()->profile_photo_url }}"
                    class="h-10 border-2 border-main w-10 rounded-full shadow " alt="">
                <input type="text" wire:model="content" class="flex-1 rounded-lg shadow " placeholder="Your message...">
                <button wire:click="send" class="px-3 hover:bg-main1 text-white rounded-lg shadow bg-main">Send</button>
             

            </div> --}}

            <div class="bg-white h-full my-1 flex flex-col-reverse  space-y-4  overflow-y-auto">
                @forelse ($feedbacks as $feedback)
                    @if ($feedback->fromOffice)


                        <div class="message flex-shrink-0 flex justify-end space-x-2 mb-2">

                            <div class="flex leading-3 flex-col">
                                <span class="text-xs font-semibold text-gray-600 flex justify-end">
                                    You</span>
                                <div class="bg-main p-2 max-w-sm  text-white rounded-l-xl rounded-br-xl shadow">
                                    <p>{{ $feedback->content }}</p>
                                </div>
                            </div>
                            <img src="{{ auth()->user()->profile_photo_url }}" class="h-10 w-10 shadow rounded-md"
                                alt="">
                        </div>


                    @else

                        <div class="message flex-shrink-0 flex justify-start space-x-2 mb-2">
                            <img src="{{ \App\Models\User::find($feedback->user_id)->profile_photo_url }}"
                                class="h-10 w-10 shadow rounded-md" alt="">
                            <div class="flex leading-3 flex-col">
                                <span class="text-xs font-semibold text-gray-600 flex justify-start">
                                    {{ \App\Models\User::find($feedback->user_id)->name }}</span>
                                <div class="bg-gray-200 p-2 max-w-sm  text-gray-700 rounded-r-xl rounded-bl-xl shadow">
                                    <p>{{ $feedback->content }}</p>
                                </div>
                            </div>

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
            <div class="bg-gray-100 shadow-md rounded-lg h-14 flex items-center justify-between px-4">
                <input type="text" wire:model="content" placeholder="Your Message..."
                    class="flex-1 focus:outline-none border-0 bg-gray-100 focus:ring-0">
                <button wire:click="send" class="text-main hover:text-main1"><svg xmlns="http://www.w3.org/2000/svg"
                        width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg></button>
            </div>

        </div>
    </div>

</div>
