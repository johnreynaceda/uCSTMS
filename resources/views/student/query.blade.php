@extends('layouts.student')
@section('main')
    @livewire('student-query',[
        'id' => $id
    ])
@endsection