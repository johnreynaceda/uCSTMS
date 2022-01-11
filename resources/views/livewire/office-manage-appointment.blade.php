<div>
    <ul role="list" class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse ($schedules as $schedule)
            <li class="col-span-1 flex flex-col  bg-white rounded-lg shadow p-2 px-4">
                <div class="flex flex-col">
                    <span class="font-bold uppercase text-gray-600">Title</span>
                    <span class="text-sm leading-3  text-main font-semibold">{{ $schedule->title }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold uppercase text-gray-600">Notes</span>
                    <span class="text-sm leading-3  text-main font-semibold">{{ $schedule->notes }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold uppercase text-gray-600">start Date</span>
                    <span class="text-sm leading-3 font-semibold text-main">{{ $schedule->start_date }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold uppercase text-gray-600">end Date</span>
                    <span class="text-sm leading-3 font-semibold text-main">
                        @if ($schedule->end_date == null)
                            {{ $schedule->start_date }}
                        @else
                            {{ $schedule->end_date }}
                        @endif
                    </span>
                </div>
                <div class="mt-3 flex space-x-2">
                    <button class="bg-red-600 hover:bg-red-700 px-2 text-white rounded">Delete</button>
                    <button class="bg-main hover:bg-main1    px-2 text-white rounded">Edit</button>
                </div>
            </li>
        @empty

        @endforelse

        <!-- More people... -->
    </ul>
    <div class="mt-5">
        <button wire:click="back" class="bg-main text-white px-2 py-1 rounded-md">Back</button>
    </div>
</div>
