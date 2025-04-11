@extends('layouts.app')

@section('content')
    @if(auth()->user()->role->name === App\Models\Role::ADMIN)
        @include('dashboard.admin')
    @elseif(auth()->user()->role->name === App\Models\Role::USER)
        @include('dashboard.user')
    @elseif(auth()->user()->role->name === App\Models\Role::SUPER_ADMIN)
        @include('dashboard.super_admin')
    @endif
@endsection
