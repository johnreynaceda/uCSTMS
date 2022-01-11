@extends('layouts.admin')
@section('breadcrumb')
    <span class="uppercase">Appointments</span>
@endsection
@section('main')
    <div class="header">
        <h1 class="text-xl font-bold uppercase text-gray-600">Appointments</h1>
    </div>

    @livewire('appointment')


@endsection
