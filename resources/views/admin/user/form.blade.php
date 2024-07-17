@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title"> Create New Admin </h4>
            </div>
        </div>
        <div class="card-body">
            <p>Please fill the following input correctly</p>
            <form class="was-validated">
                <div class="form-group">
                    <label for="validationName" class="form-label">Name</label>
                    <input type="text" class="form-control is-invalid" id="validationName" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            Please enter a name in the input.
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="validationEmail" class="form-label">Email</label>
                    <input type="email" class="form-control is-invalid" id="validationEmail" required>
                    <div class="invalid-feedback">
                        Please enter an email in the input.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationPassword" class="form-label">Password</label>
                    <input type="password" class="form-control is-invalid" id="validationPassword" required>
                    <div class="invalid-feedback">
                        Please enter password in the input.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationConfPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control is-invalid" id="validationConfPassword" required>
                    <div class="invalid-feedback">
                        Please re-enter password in the input.
                    </div>
                </div>
                <div class="form-check form-group">
                    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                    <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                    <div class="invalid-feedback">Example invalid feedback text</div>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                </div>
                <div class="form-check form-group">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-group">
                    <select class="form-select" required aria-label="select example">
                        <option value="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">Example invalid select feedback</div>
                </div>
                <div class="form-group mb-0">
                    <input type="file" class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
            </form>
        </div>
    </div>
@endsection
