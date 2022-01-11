<div>


    <div class="pt-6 pb-2 px-2 flex justify-between items-center">
        <h2 class="text-gray-600 font-bold uppercase">SCHOOL OFFICES</h2>
        <span class="inline-flex items-center p-1 px-2 rounded-full text-xs shadow font-bold bg-main1 text-white">
            {{ $offices->count() }}
        </span>
    </div>
    <div>

        <ul role="list" class=" ">
            @forelse ($offices as $office)
                <li class="col-span-1 mb-1 flex shadow-lg rounded-md">
                    <div
                        class="flex-shrink-0 flex items-center justify-center w-16 bg-main text-white text-sm font-medium rounded-l-md">
                        <img src="{{ asset('images/SKSULogo.png') }}" class="h-10" alt="">
                    </div>
                    <div
                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-4 text-sm font-bold uppercase truncate">
                            <p class="text-gray-700 ">{{ $office->office_name }}</p>
                        </div>
                        <div class="flex-shrink-0 pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>
            @empty

            @endforelse
        </ul>
    </div>
</div>
