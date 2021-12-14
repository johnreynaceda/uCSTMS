<div>
    <div class="mt-5 border-t-2 py-2 border-main1">
        <div class="flex space-x-2 items-center">
            <div class=" rounded-full text-white p-2 bg-main">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <span class="font-semibold text-lg text-gray-700">Add
                Credentials</span>
        </div>
        <div class="mt-2 border rounded-lg h-12 flex  border-main shadow-md">
            <input type="text " wire:model="email" class="flex-1 px-2 rounded-l-lg focus:outline-none border-0"
                placeholder="Enter email...">
            <button wire:click="useradd" class="px-4 bg-main hover:bg-main1 text-white h-full rounded-r-lg">Add</button>
        </div>
        @error('email') <span class="error text-sm text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-4">

            <div x-data="{show: false} "
                x-init="@this.on('add', () => { show = true; setTimeout( () => { show = false }, 3000) })" x-show="show"
                class="bg-green-500 p-1 text-white rounded-lg px-4 shadow-md">
                <span>User Added.</span>
            </div>

            {{-- @dump($office_id) --}}
            <ul role="list" class="divide-y divide-gray-200">
                @forelse ($users as $user)
                    <li class="py-4 flex items-end justify-between">
                        <div class="flex">
                            <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    @if ($user->userinformation->lastname == null)
                                        No name
                                    @else

                                    @endif
                                </p>
                                <p class="text-sm text-gray-500">
                                    {{ $user->email }}
                                </p>
                            </div>
                        </div>
                        <div class="ml-3 flex space-x-1 justify-end">
                            <span class="text-main cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg></span>
                            <span class="text-red-500 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></span>
                        </div>
                    </li>
                @empty
                    <span>No User available..</span>
                @endforelse


            </ul>
        </div>
    </div>
    {{--  --}}
</div>
