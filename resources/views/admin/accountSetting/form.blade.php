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
                    @elseif(old('name') == null && $admin->name == null)
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
                    @elseif(old('email') == null && $admin->email == null)
                        Please enter an email in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group mb-0">
                <label for="profile" class="form-label">Profile Picture</label>
                {{ html()->file('profile')->class("form-control")->attributes(['aria-label' => 'Profile Photo', '', 'accept' => 'image/*']) }}
                <div class="invalid-feedback">
                    @error('profile')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group mb-0">
                <input class="mt-2 btn btn-success" type="submit" value="Submit">
            </div>
        {{ html()->closeModelForm() }}
    </div>
</div>
@endsection
