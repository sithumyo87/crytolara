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
                    <a href="{{ route('admin.helperSetting.create')}}" class="btn btn-success-subtle mb-1 float ">Create New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Sort</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($helperSettings as $helperSetting)
                                <tr>
                                    <td>
                                        @if($helperSetting->image != '')
                                        <img src="{{ asset($helperSetting->image)}}" class="preview-image">
                                        @endif
                                    </td>
                                    <td>{{ $helperSetting->title }}</td>
                                    <td>{!! $helperSetting->description !!}</td>
                                    <td>{!! ($helperSetting->sort) !!}</td>
                                    <td width="100px" class="actions-gp">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.helperSetting.edit', $helperSetting->id) }}">
                                            Edit
                                        </a>
                                        {{ html()->form('DELETE')->route('admin.helperSetting.destroy', $helperSetting->id)->class('d-inline delete-form')->open() }}
                                            {{ html()->submit('DELETE')->class('btn btn-danger btn-sm delete-button')->attributes(['onclick' => 'return confirm("Are you sure want to delete")']) }}
                                        {{ html()->form()->close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing {{$start}} to {{ $start+count($helperSettings) - 1 }} of {{$helperSettings->total()}} entries</div>
                            @if ($helperSettings)
                                <div class="text-center">{{ $helperSettings->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
