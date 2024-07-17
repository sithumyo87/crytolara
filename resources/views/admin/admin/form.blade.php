@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title"> {{ $formTitle }} </h4>
        </div>
    </div>
    <div class="card-body">
        <p>Please fill the following inputs correctly.</p>
        {{ html()->modelForm(@$admin, $method, $route)->class('was-validated')->acceptsFiles()->open() }}
            <div class="form-group">
                <label for="validationName" class="form-label">Name</label>
                {{ html()->text('name')->class("form-control is-invalid")->attributes(['id' => 'validationName', 'required']) }}
                <div class="invalid-feedback">
                    @error('name')
                        {{ $message }}
                    @else
                        Please enter a name in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationEmail" class="form-label">Email</label>
                {{ html()->email('email')->class("form-control is-invalid")->attributes(['id' => 'validationEmail', 'required']) }}
                <div class="invalid-feedback">
                    @error('email')
                        {{ $message }}
                    @else
                        Please enter an email in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationPassword" class="form-label">Password</label>
                {{ html()->password('password')->class("form-control is-invalid")->attributes(['id' => 'validationPassword', 'required']) }}
                <div class="invalid-feedback">
                    @error('password')
                        {{ $message }}
                    @else
                        Please enter password in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationPassword-confirm" class="form-label">Confirm Password</label>
                {{ html()->password('password_confirmation')->class("form-control is-invalid")->attributes(['id' => 'validationPassword-confirm', 'required']) }}
                <div class="invalid-feedback">
                    Please re-enter password in the input.
                </div>
            </div>
            <div class="form-group mb-0">
                <label for="profile" class="form-label">Profile Picture</label>
                {{ html()->file('profile')->class("form-control")->attributes(['aria-label' => 'Profile Photo', 'required', 'accept' => 'image/*']) }}
                <div class="invalid-feedback">
                    @error('profile')
                        {{ $message }}
                    @else
                        choose a profile picture (only image files)
                    @enderror
                </div>
            </div>
            <div class="form-group mb-0">
                <a href="{{ route('admin.admin.index') }}" class="mt-2 btn btn-primary">Back</a>
                <input class="mt-2 btn btn-success" type="submit" value="Submit">
            </div>
        {{ html()->closeModelForm() }}
    </div>
</div>
@endsection
