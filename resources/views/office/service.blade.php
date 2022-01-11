@extends('layouts.admin')
@section('breadcrumb')
    <span class="uppercase">Student Services</span>
@endsection
@section('main')
    <div class="header">
        <h1 class="text-xl font-bold uppercase text-gray-600">Student Services</h1>
    </div>
    @livewire('office-service')
@endsection
