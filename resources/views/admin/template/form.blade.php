@extends('layouts.admin')

@section('title', $pageTitle)

@push('pageTitle', $pageTitle)

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <form action="{{route('templates.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required placeholder="Template Name" value="{{old('name', $data->name ?? '')}}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grup mb-3">
                                <label for="category" class="form-label">Category <small class="text-danger">*</small></label>
                                <select name="category" id="category" class="form-select @error('category') is-invalid @enderror">
                                    <option value="0">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="demo_url" class="form-label">Demo URL <small class="text-danger">*</small></label>
                                <input type="text" class="form-control @error('demo_url') is-invalid @enderror" id="demo_url" name="demo_url" required placeholder="Demo URL">
                                @error('demo_url')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="thumbnail" class="form-label">Thumbnail <small class="text-danger">*</small></label>
                                <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/*" required>
                                @error('thumbnail')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="is_recommended" class="form-label">Is Recomended <small class="text-danger">*</small></label>
                                <select class="form-select @error('is_recommended') is-invalid @enderror" id="is_recommended" name="is_recommended">
                                    <option value="1">Yes</option>
                                    <option value="0" selected>No</option>
                                </select>
                                @error('is_recommended')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
                    <a href="{{ route('templates.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
