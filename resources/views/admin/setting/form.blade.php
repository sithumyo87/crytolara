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
        {{ html()->modelForm(@$setting, $method, $route)->class('')->acceptsFiles()->open() }}
            <div class="form-group">
                <label for="valFFApiKey" class="form-label">Fast Forest Api Key</label>
                {{ html()->text('ffapi_key')->class("form-control")->attributes(['id' => 'valFFApiKey']) }}
                <div class="invalid-feedback">
                    @error('ffapi_key')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="valReciverAddress" class="form-label">Reciever Address</label>
                {{ html()->text('receiver_address')->class("form-control")->attributes(['id' => 'valReciverAddress', '']) }}
                <div class="invalid-feedback">
                    @error('receiver_address')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="valEthToUSDT1" class="form-label">Eth to USDT Rate</label>
                {{ html()->text('eth_usdt1')->class("form-control")->attributes(['id' => 'valEthToUSDT1', '']) }}
                <div class="invalid-feedback">
                    @error('eth_usdt1')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="valEthToUSDT2" class="form-label">Eth to USDT Rate</label>
                {{ html()->text('eth_usdt2')->class("form-control")->attributes(['id' => 'valEthToUSDT2', '']) }}
                <div class="invalid-feedback">
                    @error('eth_usdt2')
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
