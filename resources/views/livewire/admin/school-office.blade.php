<div>
    <div class="header">
        <h1 class="text-xl font-semibold text-gray-700">School Offices</h1>
    </div>
    <div class="mt-4 flex justify-end" x-data="{addmodal: @entangle('addmodal')}">
        <button wire:click="addOffice"
            class="bg-main hover:bg-main1 p-2 rounded-lg shadow-lg flex items-center space-x-1 text-white ">
            <span>Add New Office</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="addmodal" x-cloak class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div x-show="addmodal" x-cloak x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-main bg-opacity-40 transition-opacity" aria-hidden="true"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span x-show="addmodal" x-cloak x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom bg-white rounded-lg  overflow-hidden shadow-xl transform transition-all sm:my-24 sm:align-top sm:max-w-sm sm:w-full ">
                    <div class="header border-b flex justify-between ite p-2">

                        <h1 class="font-semibold text-gray-700">Add New Office</h1>
                        <button @click="addmodal=false" class=" text-red-500 hover:text-main">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="body flex p-2 py-5">
                        <div class="flex-1 flex flex-col text-gray-700 items-start ">
                            <label for="">School Office Name</label>
                            <input type="text" wire:model.lazy="name" class="w-full rounded-lg"
                                placeholder="Enter name...">
                            @error('name') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="flex mt-5 mb-4 mx-2">

                        <button wire:click="saveOffice"
                            class="flex-1 p-2 bg-main hover:bg-main1 rounded-lg shadow-md font-semibold text-white">
                            <span wire:loading.class="hidden">SAVE</span>
                            <svg wire:loading.target="saveOffice" wire:loading.class="block" width="20"
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
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="mt-4" x-data="{manage: @entangle('manageslider')}">
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse ($offices as $office)
                <li wire:click="manage({{ $office->id }})"
                    class="col-span-1 cursor-pointer relative flex flex-col h-20 justify-center  p-2 bg-gradient-to-tl from-main to-white border-2 border-main text-gray-700 hover:text-white  rounded-lg shadow-md">
                    <p class="text-xl pl-3 relative  font-bold uppercase ">CAMPUS {{ $office->office_name }}
                    </p>
                </li>
            @empty
                <span>No School Office...</span>
            @endforelse
        </ul>
        <div x-show="manage" class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title" role="dialog"
            aria-modal="true">
            <div class="absolute inset-0 overflow-hidden">
                <!-- Background overlay, show/hide based on slide-over state. -->
                <div class="absolute inset-0 bg-main bg-opacity-25" aria-hidden="true">
                    <div x-show="manage"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-cloak
                        class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
                        <div class="w-screen max-w-md">
                            <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                                <div class="py-6 px-4 bg-gradient-to-t from-main to-main1 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-semibold text-white uppercase " id="slide-over-title">
                                            Manage Office
                                        </h2>
                                        <div class="ml-3 h-7 flex items-center">
                                            <button type="button" @click="manage = false"
                                                class="bg-white rounded-md text-red-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-white">
                                                <span class="sr-only">Close panel</span>
                                                <!-- Heroicon name: outline/x -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-1">

                                    </div>
                                </div>
                                <div class="relative flex-1 py-6 px-4 sm:px-6">
                                    <!-- Replace with your content -->
                                    <div class="absolute inset-0 py-6 px-4 sm:px-6">
                                        <div class="h-full " aria-hidden="true">
                                            <div class="flex items-end space-x-3">
                                                <div
                                                    class="col-span-1 cursor-pointer relative flex flex-col h-20 justify-center  p-2 bg-gradient-to-tl from-main to-white border-2 border-main text-gray-700 hover:text-white  rounded-lg shadow-md">
                                                    <p class="text-xl  relative z-50 font-bold uppercase ">CAMPUS
                                                        {{ $name }}</p>
                                                </div>
                                                <div class="flex space-x-1">
                                                    <button class="text-main">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                    </button>
                                                    <button class="text-red-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </div>

                                            </div>

                                            @livewire('office-user')
                                        </div>
                                    </div>
                                    <!-- /End replace -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
