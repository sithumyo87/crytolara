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
                    <a href="{{ route('admin.awardSetting.create')}}" class="btn btn-success-subtle mb-1 float ">Create New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th>Name</th>
                                    <th>Minimum Amount</th>
                                    <th>Maximum Amount</th>
                                    <th>Percentage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($awardSettings as $awardSetting)
                                <tr>
                                    <td>{{ $awardSetting->name }}</td>
                                    <td>{{ $awardSetting->min_amt }}</td>
                                    <td>{!! $awardSetting->max_amt !!}</td>
                                    <td>{!! ($awardSetting->percent) !!}%</td>
                                    <td width="100px" class="actions-gp">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.awardSetting.edit', $awardSetting->id) }}">
                                            Edit
                                        </a>
                                        {{ html()->form('DELETE')->route('admin.awardSetting.destroy', $awardSetting->id)->class('d-inline delete-form')->open() }}
                                            {{ html()->submit('DELETE')->class('btn btn-danger btn-sm delete-button')->attributes(['onclick' => 'return confirm("Are you sure want to delete")']) }}
                                        {{ html()->form()->close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing {{$start}} to {{ $start+count($awardSettings) - 1 }} of {{$awardSettings->total()}} entries</div>
                            @if ($awardSettings)
                                <div class="text-center">{{ $awardSettings->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
