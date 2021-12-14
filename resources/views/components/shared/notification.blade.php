<div x-data="notify" x-on:notify.window="notify()">
    <div x-show="type.length>0" x-cloak x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed bg-white top-14 p-2 z-50 shadow-xl rounded-lg right-10">
        <div class="flex h-12 items-center space-x-2">
            <div :class="type == 'Success' ? 'bg-green-500' : 'bg-red-500'" class="h-12 w-1 "></div>
            <div class="icon">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        :class="type == 'Success' ? 'block text-green-500' : 'hidden' " class="h-7 w-7"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" :class="type == 'Error' ? 'block text-red-500' : 'hidden' "
                        class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class=" w-56 flex flex-col">
                <h1 class="font-bold text-gray-700" x-text="type"></h1>
                <h1 class="text-sm leading-3 text-gray-600" x-text="message"></h1>
            </div>
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 hover:text-red-600 w-4 cursor-pointer"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</div>



@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('notify', () => ({
                type: '',
                message: '',
                notify() {
                    this.type = window.event.detail.type;
                    this.message = window.event.detail.message;
                    setInterval(() => {
                        this.type = '';
                        this.message = '';
                    }, 4000);
                }
            }));
        });
    </script>
@endpush
