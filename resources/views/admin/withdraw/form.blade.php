@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">{{ $formTitle }}</h4>
        </div>
    </div>
    <div class="card-body">
        <p>Please fill the following inputs correctly.</p>
        {{ html()->modelForm(@$helperSetting, $method, $route)->class('was-validated')->acceptsFiles()->open() }}
            <div class="form-group">
                <label for="validationTitle" class="form-label">Title</label>
                {{ html()->text('title')->class("form-control is-invalid")->attributes(['id' => 'validationTitle', 'required']) }}
                <div class="invalid-feedback">
                    @error('title')
                        {{ $message }}
                    @elseif(old('title') == null && @$helperSetting->title == null)
                        Please enter a name in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationDescription" class="form-label">Description</label>
                {{ html()->textarea('description')->class("form-control is-invalid")->attributes(['id' => 'validationDescription']) }}
                <div class="invalid-feedback">
                    @error('description')
                        {{ $message }}
                    @elseif(old('description') == null && @$helperSetting->description == null)
                        Please enter description in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationSort" class="form-label">Sort</label>
                {{ html()->number('sort')->class("form-control is-invalid")->attributes(['id' => 'validationSort', 'required']) }}
                <div class="invalid-feedback">
                    @error('sort')
                        {{ $message }}
                    @elseif(old('sort') == null && @$helperSetting->sort == null)
                        Please enter soriting number in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group mb-0">
                <label for="image" class="form-label">Upload Image</label>
                {{ html()->file('image')->class("form-control")->attributes(['aria-label' => 'Image Photo', 'accept' => 'image/*']) }}
                <div class="invalid-feedback">
                    @error('image')
                        {{ $message }}
                    @elseif(old('image') == null && @$helperSetting->image == null)
                        choose a image picture (only image files)
                    @enderror
                </div>
            </div>
            <div class="form-group mb-0">
                <a href="{{ route('admin.helperSetting.index') }}" class="mt-2 btn btn-primary">Back</a>
                <input class="mt-2 btn btn-success" type="submit" value="Submit">
            </div>
        {{ html()->closeModelForm() }}
    </div>
</div>
@endsection
