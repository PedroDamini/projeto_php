@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
@endpush

@yield('auth_content')
