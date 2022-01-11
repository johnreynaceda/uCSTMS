@extends('layouts.admin')
@section('breadcrumb')
    <span class="uppercase">Manage Appointment</span>
@endsection
@section('main')
    <div class="header">
        <h1 class="text-xl font-bold uppercase text-gray-600">Manage Appointment</h1>
    </div>

    <div class="mt-6 ">
        <!-- This example requires Tailwind CSS v2.0+ -->
        @livewire('office-manage-appointment')

    </div>


@endsection
