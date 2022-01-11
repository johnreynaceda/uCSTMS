@extends('layouts.admin')
@section('breadcrumb')
    <span class="uppercase">Calendar</span>
@endsection
@section('main')
    <div class="header">
        <h1 class="text-xl font-bold uppercase text-gray-600">Calendar</h1>
    </div>

    <div class="mt-6 ">
        <livewire:appointments-calendar before-calendar-view="calendar/header" class="h-full" />

        {{-- @livewire('calendar') --}}
    </div>
    {{-- @livewire('office-service') --}}

@endsection
