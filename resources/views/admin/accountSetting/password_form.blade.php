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
                <label for="validationOldPassword" class="form-label">Old Password</label>
                {{ html()->password('old_password')->class("form-control is-invalid")->attributes(['id' => 'validationOldPassword', 'required']) }}
                <div class="invalid-feedback">
                    @error('old_password')
                        {{ $message }}
                    @elseif(old('old_password') == null && $admin->old_password == null)
                        Please enter old password in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationPassword" class="form-label">Password</label>
                {{ html()->password('password')->class("form-control is-invalid")->attributes(['id' => 'validationPassword', 'required']) }}
                <div class="invalid-feedback">
                    @error('password')
                        {{ $message }}
                    @elseif(old('password') == null && $admin->password == null)
                        Please enter new password in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validationPassword-confirm" class="form-label">Confirm Password</label>
                {{ html()->password('password_confirmation')->class("form-control is-invalid")->attributes(['id' => 'validationPassword-confirm', 'required']) }}
                <div class="invalid-feedback">
                    Please re-enter new password in the input.
                </div>
            </div>
            <div class="form-group mb-0">
                <input class="mt-2 btn btn-success" type="submit" value="Submit">
            </div>
        {{ html()->closeModelForm() }}
    </div>
</div>
@endsection
