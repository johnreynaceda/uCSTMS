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
                    class="inline-block align-bottom bg-white rounded-md px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-7">
                    <h1 class="text-main1  text-xl font-bold">
                        New School Office
                    </h1>

                    <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 mt-4">
                        <div class="sm:col-span-6 mb-1">
                            <label for="first_name" class="block  font-medium leading-5 text-gray-700">
                                School Office Name
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="name"
                                    class="border h-10 rounded border-gray-400 p-2 block w-full  sm:leading-5"
                                    placeholder="Enter name..." />
                                @error('name') <span class="error text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <div class="mt-5 ">
                        <div class="flex w-full justify-end space-x-2">
                            <span wire:loading wire:target="saveOffice">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style=" background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: block; shape-rendering: auto;"
                                    width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <g transform="translate(50 50)">
                                        <g>
                                            <animateTransform attributeName="transform" type="rotate" values="0;72"
                                                keyTimes="0;1" dur="0.3472222222222222s" repeatCount="indefinite">
                                            </animateTransform>
                                            <path
                                                d="M21.817424229271428 -10 L29.817424229271428 -10 L29.817424229271428 10 L21.817424229271428 10 A24 24 0 0 1 16.25252002328415 17.659433538274886 L16.25252002328415 17.659433538274886 L18.724655978283728 25.267885668636115 L-0.2964743476193439 31.448225556135064 L-2.7686103026189235 23.839773425773835 A24 24 0 0 1 -11.772814452043587 20.9141301487237 L-11.772814452043587 20.9141301487237 L-18.244950407043167 25.616412167063487 L-30.000655452892637 9.43607227956453 L-23.528519497893058 4.733790261224746 A24 24 0 0 1 -23.528519497893058 -4.7337902612247404 L-23.528519497893058 -4.7337902612247404 L-30.000655452892637 -9.436072279564524 L-18.24495040704318 -25.616412167063476 L-11.772814452043601 -20.914130148723693 A24 24 0 0 1 -2.768610302618924 -23.839773425773835 L-2.768610302618924 -23.839773425773835 L-0.2964743476193461 -31.448225556135064 L18.724655978283714 -25.267885668636126 L16.252520023284138 -17.659433538274897 A24 24 0 0 1 21.817424229271428 -10 M0 -14A14 14 0 1 0 0 14 A14 14 0 1 0 0 -14"
                                                fill="#1e6f5c"></path>
                                        </g>
                                    </g>
                                    <!-- [ldio] generated by https://loading.io/ -->
                                </svg>
                            </span>
                            <button type="button" @click="addmodal=false"
                                class="inline-flex  justify-center rounded-md border border-transparent px-4 py-2  text-base leading-6 font-bold text-red-500 bg-gray-100 shadow-sm  focus:outline-none  transition ease-in-out duration-150  sm:leading-5">
                                Close
                            </button>
                            <button type="button" wire:click="saveOffice"
                                class="inline-flex  justify-center rounded-md border border-transparent px-4 py-2 bg-main text-base leading-6 font-bold text-white shadow-sm hover:bg-main1 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150  sm:leading-5">
                                Save
                            </button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="mt-4" x-data="{manage: @entangle('manageslider')}">
        {{-- <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse ($offices as $office)
                <li wire:click="manage({{ $office->id }})"
                    class="col-span-1 cursor-pointer relative flex flex-col h-20 justify-center  p-2 bg-gradient-to-tl from-main to-white border-2 border-main text-gray-700 hover:text-white  rounded-lg shadow-md">
                    <p class="text-xl pl-3 relative  font-bold uppercase ">CAMPUS {{ $office->office_name }}
                    </p>
                </li>
            @empty
                <span>No School Office...</span>
            @endforelse
        </ul> --}}
        <ul role="list" class="grid grid-cols-1 gap-4  sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($offices as $office)

                <li wire:click="manage({{ $office->id }})"
                    class="col-span-1 cursor-pointer bg-white to-transparent  rounded-lg shadow divide-y divide-gray-200">

                    <div>
                        <div>
                            <div class="bg-main h-9 w-full relative">
                                <img src="{{ asset('images/sksu-bg.jpg') }}"
                                    class="absolute top-0 h-full w-full object-cover opacity-50" alt="">
                            </div>
                        </div>
                        <div class="max-w-5xl mx-auto px-4 relative sm:px-6 lg:px-4 mb-4">
                            <div class="-mt-10 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                <div class="flex">
                                    <img class="h-12 w-12 rounded-full ring-4 ring-white sm:h-12 sm:w-12"
                                        src="{{ asset('images/SKSULogo.png') }}" alt="">
                                </div>
                                <div
                                    class="mt-10 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-5 sm:pb-1">
                                    <div class="sm:hidden md:block mt-6 bg-white min-w-0 flex-1">
                                        <h1 class="text-xl font-bold uppercase text-main truncate">
                                            {{ $office->office_name }}
                                        </h1>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>



                {{-- <li wire:click="manage({{ $office->id }})"
                    class="col-span-1 cursor-pointer bg-gradient-to-bl from-gray-400 border-2 border-gray-400 to-transparent  rounded-lg shadow divide-y divide-gray-200">
                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="text-gray-700 text-lg uppercase font-bold  truncate">
                                    {{ $office->office_name }}</h3>

                            </div>
                        </div>
                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                            src="{{ asset('images/SKSULogo.png') }}" alt="">
                    </div>

                </li> --}}
            @empty

            @endforelse

            <!-- More people... -->
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
                                                <li wire:click="manage({{ $office->id }})"
                                                    class="col-span-1 cursor-pointer bg-white to-transparent  rounded-lg shadow divide-y divide-gray-200">

                                                    <div>
                                                        <div>
                                                            <div class="bg-main h-9 w-full relative">
                                                                <img src="{{ asset('images/sksu-bg.jpg') }}"
                                                                    class="absolute top-0 h-full w-full object-cover opacity-50"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="max-w-5xl mx-auto px-4 relative sm:px-6 lg:px-4 mb-2">
                                                            <div
                                                                class="-mt-10 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                                                <div class="flex">
                                                                    <img class="h-12 w-12 rounded-full ring-4 ring-white sm:h-12 sm:w-12"
                                                                        src="{{ asset('images/SKSULogo.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div
                                                                    class="mt-10 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-5 sm:pb-1">
                                                                    <div
                                                                        class="sm:hidden md:block mt-6 bg-white min-w-0 flex-1">
                                                                        <h1
                                                                            class="text-xl font-bold uppercase text-main truncate">
                                                                            {{ $name }}
                                                                        </h1>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
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
