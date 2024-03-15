@extends('layouts.admin')

@section('title', $pageTitle)

@push('pageTitle', $pageTitle)

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            @if(isset($faq))
            <form action="{{route('faqs.update', $faq->id)}}" method="post" enctype="multipart/form-data">
                @method('put')
            @else
            <form action="{{route('faqs.store')}}" method="post" enctype="multipart/form-data">
            @endif
                @csrf
                <div class="card-body mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="question" class="form-label">Question <small class="text-danger">*</small></label>
                                <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question" required placeholder="Question" value="{{old('question', $faq->question ?? '')}}">
                                @error('question')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="answer" class="form-label">Answer <small class="text-danger">*</small></label>
                                <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer" required placeholder="Answer">{{old('answer', $faq->answer ?? '')}}</textarea>
                                @error('answer')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
                    <a href="{{ route('faqs.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
