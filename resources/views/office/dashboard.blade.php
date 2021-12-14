@extends('layouts.admin')
@section('breadcrumb')
    Dashboard
@endsection
@section('main')
    <div class="header">
        <h1 class="text-xl font-semibold text-gray-700">Dashboard</h1>
    </div>
    <div class="mt-4">
        <div class="flex space-x-4">
            <div class=" flex-1">
                <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <li
                        class="col-span-1 flex flex-col cursor-pointer   rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-110 ">
                        <div class="bg-white shadow-md rounded-md p-3">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-blue-700" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="mt-1">
                                <span class="text-3xl font-bold text-gray-600">2,034</span>
                            </div>
                            <div class="mt-1">
                                <span class="text-md font-semibold text-gray-500">Registered
                                    Students</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 shadow-md mx-2 rounded-b h-2"></div>
                        <div>

                        </div>
                    </li>
                    <li
                        class="col-span-1 flex flex-col cursor-pointer   rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-110 ">
                        <div class="bg-white shadow-md rounded-md p-3">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-1 text-main" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="mt-1">
                                <span class="text-3xl font-bold text-gray-600">136</span>
                            </div>
                            <div class="mt-1">
                                <span class="text-md font-semibold text-gray-500">Accommodated
                                    Students</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 shadow-md mx-2 rounded-b h-2"></div>
                        <div>

                        </div>
                    </li>
                    <li
                        class="col-span-1 flex flex-col cursor-pointer   rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-110 ">
                        <div class="bg-white shadow-md rounded-md p-3">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="mt-1">
                                <span class="text-3xl font-bold text-gray-600">20</span>
                            </div>
                            <div class="mt-1">
                                <span class="text-md font-semibold text-gray-500">School Offices</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 shadow-md mx-2 rounded-b h-2"></div>
                        <div>

                        </div>
                    </li>
                    <li
                        class="col-span-1 flex flex-col cursor-pointer   rounded-lg transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-110 ">
                        <div class="bg-white shadow-md rounded-md p-3">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mt-2 text-red-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="mt-1">
                                <span class="text-3xl font-bold text-gray-600">2,034</span>
                            </div>
                            <div class="mt-1">
                                <span class="text-md font-semibold text-gray-500">Student Queries</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 shadow-md mx-2 rounded-b h-2"></div>
                        <div>

                        </div>
                    </li>


                    <!-- More people... -->
                </ul>
            </div>

        </div>
    </div>
    <div class="mt-4">
        <div class="flex space-x-4">
            <div class=" flex-1">
                <div class="bg-white p-2 shadow-md rounded-lg mb-4">Lead response time</div>
                <div class="bg-white p-2 shadow-md rounded-lg">Service performance rating</div>
            </div>
            <div class="bg-white rounded-xl py-2 shadow-md w-64">
                <div class="flow-root">
                    <ul role="list" class="-mb-8">
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                    aria-hidden="true"></span>
                                <div class="relative flex items-start space-x-3">
                                    <div class="relative">
                                        <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                            src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                            alt="">

                                        <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                            <!-- Heroicon name: solid/chat-alt -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div>
                                            <div class="text-sm">
                                                <a href="#" class="font-medium text-gray-900">Eduardo
                                                    Benz</a>
                                            </div>
                                            <p class="mt-0.5 text-sm text-gray-500">
                                                Commented 6d ago
                                            </p>
                                        </div>
                                        <div class="mt-2 text-sm text-gray-700">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tincidunt nunc ipsum tempor purus vitae id. Morbi in
                                                vestibulum nec varius. Et diam cursus quis sed purus
                                                nam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="relative pb-8">
                                <div class="relative flex items-start space-x-3">
                                    <div class="relative">
                                        <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                            src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                            alt="">

                                        <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                            <!-- Heroicon name: solid/chat-alt -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div>
                                            <div class="text-sm">
                                                <a href="#" class="font-medium text-gray-900">Jason
                                                    Meyers</a>
                                            </div>
                                            <p class="mt-0.5 text-sm text-gray-500">
                                                Commented 2h ago
                                            </p>
                                        </div>
                                        <div class="mt-2 text-sm text-gray-700">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tincidunt nunc ipsum tempor purus vitae id. Morbi in
                                                vestibulum nec varius. Et diam cursus quis sed purus
                                                nam. Scelerisque amet elit non sit ut tincidunt
                                                condimentum. Nisl ultrices eu venenatis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
