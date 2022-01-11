<div>
    <div class="mt-4" x-data="{addmodal: @entangle('addmodal')}">
        <div class="flex  items-center">
            <div class="flex px-2 items-center  shadow bg-white rounded-l-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" class="border-0 focus:outline-none focus:ring-0" placeholder="Search service...">
            </div>
            <button @click="addmodal = !addmodal" class="bg-main shadow hover:bg-main1 p-2 text-white rounded-r-md"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg></button>
        </div>

        <div x-show="addmodal" x-cloak class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div x-show="addmodal" x-cloak x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-main bg-opacity-50 transition-opacity" aria-hidden="true"></div>

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
                        New Student Service
                    </h1>

                    <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 mt-4">
                        <div class="sm:col-span-6 mb-1">
                            <label for="first_name" class="block  font-medium leading-5 text-gray-700">
                                School Office Name
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="service"
                                    class="border h-10 rounded border-gray-400 p-2 block w-full  sm:leading-5"
                                    placeholder="Enter name..." />
                                @error('name') <span class="error text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6 mb-1">
                            <label for="first_name" class="block  font-medium leading-5 text-gray-700">
                                Link
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <textarea wire:model.lazy="link" class="w-full rounded border-gray-400 p-2 block" id=""
                                    cols="30" rows="2"></textarea>
                                @error('name') <span class="error text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <div class="mt-5 ">
                        <div class="flex w-full justify-end space-x-2">
                            <span wire:loading wire:target="saveService">
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
                            <button type="button" wire:click="saveService"
                                class="inline-flex  justify-center rounded-md border border-transparent px-4 py-2 bg-main text-base leading-6 font-bold text-white shadow-sm hover:bg-main1 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150  sm:leading-5">
                                Save
                            </button>
                        </div>

                    </div>


                </div>
                {{-- <div
                    class="inline-block align-bottom bg-white  overflow-hidden shadow-xl transform transition-all sm:my-24 sm:align-top sm:max-w-sm sm:w-full ">
                    <div class="header border-b flex justify-between ite p-2">

                        <h1 class="font-semibold text-gray-700">Add New Student Service</h1>
                        <button @click="addmodal=false" class=" text-red-500 hover:text-main">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="body  p-2 px-3 py-5">
                        <div class="flex-1 flex mb-1 flex-col text-gray-700 items-start ">
                            <label class="pl-1" for="">Service Name</label>
                            <input type="text" wire:model.lazy="service" class="w-full rounded-lg"
                                placeholder="Enter name...">
                            @error('service') <span class="error text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1 mb-1 flex flex-col text-gray-700 items-start ">
                            <label for="" class="pl-1">Link</label>
                            <input type="text" wire:model.lazy="link" class="w-full rounded-lg"
                                placeholder="Enter link...">
                            @error('link') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="flex mt-5 mb-4 mx-2">

                        <button wire:click="saveService"
                            class="flex-1 p-2 px-3 bg-main hover:bg-main1 rounded-lg shadow-md font-semibold text-white">
                            <span wire:loading.class="hidden">SAVE</span>
                            <svg wire:loading.target="saveService" wire:loading.class="block" width="20"
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

                </div> --}}
            </div>
        </div>

    </div>
    <div class="mt-2">
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
                @forelse ($services as $service)
                    <li>
                        <a href="#" class="block hover:bg-gray-50">
                            <div class="px-4 py-2 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="font-semibold text-main truncate">
                                        {{ $service->service_name }}
                                    </p>

                                </div>
                                <div class="mt-1 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <!-- Heroicon name: solid/users -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{ $service->link }}
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </li>
                @empty

                @endforelse
            </ul>
        </div>
    </div>
</div>
