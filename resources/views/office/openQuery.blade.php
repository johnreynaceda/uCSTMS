@extends('layouts.admin')
@section('breadcrumb')
    Query Management
@endsection
@section('main')
<div class="header">
    <h1 class="text-xl font-semibold text-gray-700">Query</h1>
</div>
    @livewire('open-query',[
        'id' => $id,
    ])
@endsection
