@extends('layouts.app')

@section('title', "Test - Layout usage")

@push('css')
    <style>
        body{
            background-color: black;
        }
    </style>
@endpush

@section('main')
    <div class="max-w-7xl mx-auto px-4 ">
        <h1 class="text-3xl font-bold text-white">Test alerts</h1>
        <br />
        
        <x-alert type="{{ $type }}">
            <x-slot name="title">ALERT</x-slot>
            Testing the alert box
        </x-alert>
        <br />
        
        <x-alert type="{{ $type }}"  class="p-10">
            <x-slot name="title">ALERT</x-slot>
            Testing the alert box, with extra class: padding-10
        </x-alert>
        <br />
        
        <x-info>
            <x-slot name="title">OPTIONS:</x-slot>
            info - danger - success - warning - dark(default)
        </x-info>
        <br />

        <x-alertclass type="{{ $type }}">
            <x-slot name="title">ALERT CLASS</x-slot>
            Testing the alert class box
        </x-alert>
        <br />

        <x-alertclass type="{{ $type }}" class="p-10">
            <x-slot name="title">ALERT CLASS</x-slot>
            Testing the alert class box, with extra class: padding-10
        </x-alert>
        <br />
        
    </div>
@endsection

@push('css')
    <style>
        body{
            border: 10px solid magenta;
        }
    </style>
@endpush

