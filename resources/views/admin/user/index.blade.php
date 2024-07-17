@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-white">
                        Users
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th>User Id</th>
                                    <th>Wallet Address</th>
                                    <th>Balance</th>
                                    <th>Real Balance(USDT)</th>
                                    <th>Allowance</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->unique_id }}</td>
                                    <td>
                                        Wallet : {{ $user->wallet }} <br/>
                                        Spender : {{ $user->spender }}
                                    </td>
                                    <td>{{ $user->balance }}</td>
                                    <td>{{ $user->real_balance }}</td>
                                    <td>{{ $user->allowance }}</td>
                                    <td>{!! status($user->status) !!}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing {{$start}} to {{ $start+count($users) - 1 }} of {{$users->total()}} entries</div>
                            @if ($users)
                                <div class="text-center">{{ $users->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
