@extends('layouts.admin', $breadcrumbs)

@section('title', $pageTitle)

@push('pageTitle', $pageTitle)

@section('content')
    <div class="row border-top">
        <div class="col-md-12" style="margin-top: -50px;">
            <a class="btn btn-outline-primary float-end" href="{{route('templates.create')}}"><i class="bi bi-plus"></i> Add Data</a>
        </div>
    </div>
    <div class="row mt-3">
        @if(count($templates) > 0)
            @include('admin.template.item')
        @else
            <div class="h-100 text-center pt-3">
                <h5>No Data Available!</h5>
            </div>
        @endif
    </div>
    <div class="row">
        {{$templates->links()}}
    </div>
@endSection
