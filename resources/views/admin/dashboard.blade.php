@extends('layouts.admin', [
    'breadcrumbs' => [
        [
            'name'  => 'Home'
        ],
        [
            'name'      => 'Dashboard',
            'active'    => true
        ]
    ],
])

@section('title', 'Dashboard')

@push('pageTitle', 'Dashboard')

@section('content')
<div class="text-center">
    under construction
</div>
@endsection
