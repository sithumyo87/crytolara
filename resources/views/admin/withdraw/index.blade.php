@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-white">
                        {{ $title }}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th>User</th>
                                    <th>Withdraw Address</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Submitted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($withdraws as $withdraw)
                                <tr>
                                    <td>{{ $withdraw->user_id }}</td>
                                    <td>{{ $withdraw->address }}</td>
                                    <td>{!! $withdraw->type !!}</td>
                                    <td>{!! ($withdraw->amount) !!}</td>
                                    <td>{!! status($withdraw->status) !!}</td>
                                    <td>{!! dmYHis($withdraw->created_at) !!}</td>
                                    <td width="100px" class="actions-gp">
                                        @if($withdraw->status == 'pending')
                                        {{ html()->form('PUT')->route('admin.withdraw.update', $withdraw->id)->class('d-inline delete-form')->open() }}
                                            <input type="hidden" name="status" value="success">
                                            {{ html()->submit('Approve')->class('btn btn-success btn-sm approve-button')->attributes(['onclick' => 'return confirm("Are you sure want to approve?")']) }}
                                        {{ html()->form()->close() }}
                                        {{ html()->form('PUT')->route('admin.withdraw.update', $withdraw->id)->class('d-inline delete-form')->open() }}
                                            <input type="hidden" name="status" value="rejected">
                                            {{ html()->submit('Reject')->class('btn btn-danger btn-sm rejected-button')->attributes(['onclick' => 'return confirm("Are you sure want to reject?")']) }}
                                        {{ html()->form()->close() }}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing {{$start}} to {{ $start+count($withdraws) - 1 }} of {{$withdraws->total()}} entries</div>
                            @if ($withdraws)
                                <div class="text-center">{{ $withdraws->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
