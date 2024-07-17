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
        {{ html()->modelForm(@$awardSetting, $method, $route)->class('was-validated')->acceptsFiles()->open() }}
            <div class="form-group">
                <label for="validation_name" class="form-label">Name</label>
                {{ html()->text('name')->class("form-control is-invalid")->attributes(['id' => 'validation_name', 'required']) }}
                <div class="invalid-feedback">
                    @error('name')
                        {{ $message }}
                    @elseif(old('name') == null && @$awardSetting->name == null)
                        Please enter a name in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validation_min_amt" class="form-label">Minimum Amount</label>
                {{ html()->number('min_amt')->class("form-control is-invalid")->attributes(['id' => 'validation_min_amt', 'required', 'step' => '0.01']) }}
                <div class="invalid-feedback">
                    @error('min_amt')
                        {{ $message }}
                    @elseif(old('min_amt') == null && @$helperSetting->min_amt == null)
                        Please enter minimum amount in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validation_max_amt" class="form-label">Maximum Amount</label>
                {{ html()->number('max_amt')->class("form-control is-invalid")->attributes(['id' => 'validation_max_amt', 'required', 'step' => '0.01']) }}
                <div class="invalid-feedback">
                    @error('max_amt')
                        {{ $message }}
                    @elseif(old('max_amt') == null && @$helperSetting->max_amt == null)
                        Please enter maximum amount in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="validation_percent" class="form-label">Percent</label>
                {{ html()->number('percent')->class("form-control is-invalid")->attributes(['id' => 'validation_percent', 'required', 'step' => '0.01']) }}
                <div class="invalid-feedback">
                    @error('percent')
                        {{ $message }}
                    @elseif(old('percent') == null && @$helperSetting->percent == null)
                        Please enter percent in the input.
                    @enderror
                </div>
            </div>
            <div class="form-group mb-0">
                <a href="{{ route('admin.awardSetting.index') }}" class="mt-2 btn btn-primary">Back</a>
                <input class="mt-2 btn btn-success" type="submit" value="Submit">
            </div>
        {{ html()->closeModelForm() }}
    </div>
</div>
@endsection
