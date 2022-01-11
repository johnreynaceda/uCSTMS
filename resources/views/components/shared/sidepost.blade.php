<div class="flow-root bg-white shadow-md rounded-xl py-2">
    <ul role="list" class="-mb-8">
        @forelse ($concerns as $key => $concern)
            <li wire:key="{{ $key }}">
                <div class="relative pb-8">

                    <div class="relative flex items-start space-x-3">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full border-2 border-main bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                src="{{ $concern->user->profile_photo_url }}" alt="">

                            <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                <!-- Heroicon name: solid/chat-alt -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <div>
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-gray-900">{{ $concern->user->name }}</a>
                                </div>
                                <p class="mt-0.5 text-sm text-gray-500">
                                    Commented {{ $concern->created_at->diffForHumans() }}
                                </p>
                            </div>
                            <div class="mt-2 text-sm text-gray-700">
                                <p>
                                    {{ $concern->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li ">
                <div class="    relative pb-8">

                <div class="relative flex items-start space-x-3">
                    <div class="relative">
                        <img class="h-10 w-10 rounded-full border-2 border-main bg-gray-400 flex items-center justify-center ring-8 ring-white"
                            src="" alt="">

                        <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                            <!-- Heroicon name: solid/chat-alt -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <div>
                            <div class="text-sm">
                                <a href="#" class="font-medium text-gray-900"></a>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">

                            </p>
                        </div>
                        <div class="mt-2 text-sm text-gray-700">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
</div>
</li>
@endforelse


</ul>
</div>
