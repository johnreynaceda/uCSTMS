<div x-data="{collapse: ''}">
    @forelse ($offices as $office)
        <div class="bg-white p-2 px-4 py-3 mb-3">
            <div class="md:flex lg:items-center md:items-center md:justify-between md:space-x-5">
                <div class="flex items-start space-x-5">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <img class="h-14 w-14 rounded-full" src="{{ asset('images/SKSULogo.png') }}" alt="">
                            <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
                        </div>
                    </div>
                    <!--
      Use vertical padding to simulate center alignment when both lines of text are one line,
      but preserve the same layout if the text wraps without making the image jump around.
    -->
                    <div class="mt-2">
                        <h1 class="text-2xl font-bold uppercase text-gray-600"> {{ $office->office_name }}</h1>

                    </div>
                </div>
                <div
                    class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">

                    <button type="button" @click="collapse = '{{ $office->id }}'"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-main">
                        View Services
                    </button>
                </div>
            </div>
            <div class="mt-2 border-t">
                <div x-show="collapse == '{{ $office->id }}'" x-collapse x-cloak class="mt-1  mb-2">
                    @foreach ($office->studentservices as $services)
                        <div class="bg-white shadow p-1 px-2">
                            <h1 class="text-main font-bold">{{ $services->service_name }}</h1>
                            <div class="flex text-sm space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="">{{ $services->link }}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{-- <div class="shadow mb-4">
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

                                <span>View Services</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-2 border-t">
                    <div x-show="collapse == '{{ $office->id }}'" x-collapse x-cloak class="mt-1  mb-2">
                        @foreach ($office->studentservices as $services)
                            <div class="bg-white shadow p-1 px-2">
                                <h1 class="text-main font-bold">{{ $services->service_name }}</h1>
                                <div class="flex text-sm space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <a href="">{{ $services->link }}</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div> --}}
    @empty

    @endforelse


</div>
