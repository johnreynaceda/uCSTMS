<div x-data="{collapse: ''}">
    @forelse ($offices as $office)
        <div class="shadow mb-4">
            <div>
                <div class="bg-main h-16 w-full relative object-cover lg:h-20">
                    <img src="{{ asset('images/sksu-bg.jpg') }}" class="h-full w-full object-cover opacity-30" alt="">
                </div>
            </div>
            <div class="max-w-5xl mx-auto bg-white py-3 mb-1 px-4 sm:px-6 lg:px-4 relative">
                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                    <div class="flex">
                        <img class="h-14 w-14 rounded-full ring-4 ring-white sm:h-20 sm:w-20"
                            src="{{ asset('images/SKSULogo.png') }}" alt="">
                    </div>
                    <div
                        class="mt-1 lg:mt-9 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                        <div class="sm:hidden md:block mt-1 lg:mt-6 min-w-0 flex-1">
                            <h1 class="text-2xl font-bold text-gray-700 uppercase truncate">
                                {{ $office->office_name }}
                            </h1>
                        </div>
                        <div
                            class="mt-2 lg:mt-9  flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">

                            <button type="button" @click="collapse = '{{ $office->id }}'"
                                class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-white bg-main focus:outline-none ">

                                <span>View Schedules</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-2 border-t">
                    <div x-show="collapse == '{{ $office->id }}'" x-collapse x-cloak class="mt-1  mb-2">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="bg-white shadow overflow-hidden sm:rounded-md">
                            <ul role="list" class="divide-y divide-gray-200">
                                @forelse ($office->appointmentschedules as $sched)
                                    <li>
                                        <div class="block ">
                                            <div class="px-4 py-4 sm:px-6">
                                                <div class="flex items-center justify-between">
                                                    <p class="text-sm font-bold text-main truncate">
                                                        {{ $sched->title }}
                                                    </p>

                                                </div>
                                                <div class=" sm:flex sm:justify-between">
                                                    <div class="sm:flex">
                                                        <p class="flex items-center text-sm text-gray-500">
                                                            <!-- Heroicon name: solid/users -->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-5 mr-1 w-5" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                            {{ $sched->start_date }}
                                                        </p>

                                                    </div>
                                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                        <!-- Heroicon name: solid/calendar -->

                                                        <p>
                                                            <button class="bg-main py-1 px-2 rounded-md text-white">Get
                                                                Appointment</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @empty

                                @endforelse

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
    @empty

    @endforelse


</div>
