@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>User Dashboard</h1>
                    <p>Hello <strong>{{ Auth::user()->name }}</strong>! Welcome to your dashboard!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
