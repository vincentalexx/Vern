@extends('layouts.app')

@section('title', $page['component'])

@push('scripts')
    @routes
    @viteReactRefresh
    @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
    @inertiaHead
@endpush

@section('content')
    @inertia
@endsection
