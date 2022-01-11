<div x-data="{create:@entangle('isModalOpen')}">


    <div class="bg-orange-100 p-2">

        <div class="flex space-x-2 mb-3">

            <button wire:click="addschedule"
                class="bg-main hover:bg-main1 text-white space-x-1 p-2 flex uppercase items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
                <span>Create Appointment</span>
            </button>
            <a href="{{ route('office-manageAppointment') }}"
                class="bg-main  hover:bg-main1 text-white p-2 space-x-1 uppercase flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
                <span>manage Appointment</span>
            </a>

            {{-- @foreach ($unscheduledEvents as $event)
                <div class="shadow p-2 border rounded bg-white mr-2"
                    ondragstart="onLivewireCalendarEventDragStart(event, '{{ $event->id }}')" draggable="true">
                    <p class="font-medium text-sm">
                        {{ $event->title }}
                    </p>
                    <p class="text-xs">
                        {{ $event->notes }}
                    </p>
                    <button wire:click.stop="deleteEvent({{ $event->id }})" type="button"
                        class="mt-2 inline-flex items-center px-2 py-1 border border-transparent text-xs leading-4 font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-50 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-200 transition ease-in-out duration-150">
                        Delete
                    </button>
                </div>
            @endforeach
            @if ($unscheduledEvents->isEmpty())
                <p class="text-sm text-gray-700">
                    No events found
                </p>
            @endif
        </div> --}}
        </div>

        <div class="flex justify-between items-center mb-1">
            <button type="button"
                class="bg-main text-white -ml-px uppercase text-lg relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 font-bold leading-5 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
                {{ $startsAt->format('F Y') }}
            </button>
            <div class="flex shadow-lg">
                <button wire:click.stop="goToPreviousMonth" type="button"
                    class="relative inline-flex items-center px-4 py-2 rounded-l-md  bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button wire:click.stop="goToCurrentMonth" type="button"
                    class="-ml-px relative inline-flex items-center px-4 text-lg font-bold py-2 border-2 border-gray-300 bg-main  leading-5 text-white hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Today
                </button>
                <button wire:click.stop="goToNextMonth" type="button"
                    class="-ml-px relative inline-flex items-center px-4  rounded-r-md py-2 border-main bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Unscheduled Events --}}


        {{-- Modals --}}
        <div>
            <div>
                {{-- @if ($isModalOpen)
                    <div class="fixed bottom-0 top-0 z-50 inset-0 px-4 overflow-y-hidden pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center"
                        wire:click.stop="">

                        <div class="fixed inset-0 transition-opacity" wire:click.stop="$set('isModalOpen', false)">
                            <div class="absolute inset-0 bg-main opacity-75"></div>
                        </div>

                        <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                            <h1 class="text-main1 text-xl font-medium">
                                New Appointment
                            </h1>

                            <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 mt-4">
                                <div class="sm:col-span-6 mb-1">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                        Title
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="title"
                                            class="border rounded border-gray-400 p-2 block w-full sm:text-sm sm:leading-5"
                                            placeholder="What's the appointment about?" />
                                    </div>
                                </div>

                                <div class="sm:col-span-6 mb-1 ">
                                    <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                                        Notes
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <textarea rows="3" wire:model.lazy="notes"
                                            placeholder="Details regarding the appointment"
                                            class="border rounded  border-gray-400 p-2 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>

                                <div class="sm:col-span-3 mr-2">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                        Scheduled At
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input type="date" wire:model.lazy="start"
                                            class="rounded-md border border-gray-400 w-full">
                                    </div>
                                </div>
                                <div class="sm:col-span-3 ml-2 mb-1">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                        Scheduled End
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="end" type="date"
                                            class="rounded-md border border-gray-400 w-full">
                                    </div>
                                </div>
                                <div class="sm:col-span-6 mb-1">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                        Slots
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input type="number" wire:model.lazy="slot"
                                            class="border rounded border-gray-400 p-2 block w-full sm:text-sm sm:leading-5" />
                                    </div>
                                </div>

                            </div>

                            <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                <div class="flex w-full rounded-md shadow-sm sm:col-start-2">
                                    <button type="button" wire:click.prevent="saveAppointment"
                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-main text-base leading-6 font-medium text-white shadow-sm hover:bg-main1 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Confirm
                                    </button>
                                </div>
                                <div class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                                    <button type="button" wire:click="$set('isModalOpen', false)"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif --}}
            </div>

            <div>
                @if ($selectedAppointment)
                    @include('calendar.appointment-details-modal')
                @endif
            </div>
        </div>

        <div x-show="create" x-cloak class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
                <div x-show="create" x-cloak x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave=" ease-in duration-200" x-transition:leave-start="opacity-100 "
                    x-transition:leave-end="opacity-0" class="fixed inset-0 bg-main bg-opacity-75 transition-opacity"
                    aria-hidden="true"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
                <div x-show="create" x-cloak x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave=" ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block align-bottom bg-white rounded-md px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-8">

                    <h1 class="text-main1 text-xl font-medium">
                        New Appointment
                    </h1>

                    <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 mt-4">
                        <div class="sm:col-span-6 mb-1">
                            <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                Title
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="title"
                                    class="border rounded border-gray-400 p-2 block w-full sm:text-sm sm:leading-5"
                                    placeholder="What's the appointment about?" />
                            </div>
                        </div>

                        <div class="sm:col-span-6 mb-1 ">
                            <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                                Notes
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <textarea rows="3" wire:model.lazy="notes"
                                    placeholder="Details regarding the appointment"
                                    class="border rounded  border-gray-400 p-2 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-3 mr-2">
                            <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                Scheduled At
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input type="date" wire:model.lazy="start"
                                    class="rounded-md border border-gray-400 w-full">
                            </div>
                        </div>
                        <div class="sm:col-span-3 ml-2 mb-1">
                            <div class="flex justify-between">
                                <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                    Scheduled End
                                </label>
                                <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                    (Optional)
                                </label>
                            </div>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="end" type="date"
                                    class="rounded-md border border-gray-400 w-full">
                            </div>
                        </div>
                        <div class="sm:col-span-6 mb-1">
                            <div class="flex justify-between">
                                <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                                    Slots
                                </label>

                            </div>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input type="number" wire:model.lazy="slot"
                                    class="border rounded border-gray-400 p-2 block w-full sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                        <div class="flex w-full rounded-md shadow-sm sm:col-start-2">
                            <button type="button" wire:click.prevent="saveAppointment"
                                class="inline-flex  justify-center w-full rounded-md border border-transparent px-4 py-2 bg-main text-base leading-6 font-medium text-white shadow-sm hover:bg-main1 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Confirm
                            </button>
                        </div>
                        <div class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                            <button type="button" @click="create = false"
                                class="inline-flex justify-center w-full rounded-md border hover:bg-red-500 border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
