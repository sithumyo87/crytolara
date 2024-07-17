@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-white">
                        Admins
                    </h4>
                    <a href="{{ route('admin.admin.create')}}" class="btn btn-success-subtle mb-1 float ">Create New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    {{-- <th>Username</th> --}}
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                <tr>
                                    <td>
                                        @if($admin->profile != '')
                                        <img src="{{ asset($admin->profile)}}" class="preview-profile">
                                        @else
                                        <img src="{{ asset('storage/admin/profiles/no-preview.png')}}" class="preview-profile">
                                        @endif
                                    </td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    {{-- <td>{{ $admin->username }}</td> --}}
                                    <td>{!! status($admin->status) !!}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.admin.edit', $admin->id) }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.admin.delete', $admin->id) }}" onclick="return confirm('are you sure want to delete?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing {{$start}} to {{ $start+count($admins) - 1 }} of {{$admins->total()}} entries</div>
                            @if ($admins)
                                <div class="text-center">{{ $admins->appends(request()->input())->links() }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
