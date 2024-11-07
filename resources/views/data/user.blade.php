@extends('layouts.main', ['title'=>'HANATEKINDO'])

@section('head')
@endsection

@section("content")
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="fw-semibold">{{ session('success') }}</div>
        <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="d-grid gap-2 d-md-flex">
    <a href="/form" class="btn btn-primary me-md-2">Tambah</a>
</div>
<div class="table-responsive">
<table class="table border mb-0">
    <thead class="fw-semibold text-nowrap">
    <tr class="align-middle">
        <th class="bg-body-secondary">No</th>
        <th class="bg-body-secondary">Email</th>
        <th class="bg-body-secondary">Full Name</th>
        <th class="bg-body-secondary text-center">action</th>
    </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach($users as $user)
        <tr class="align-middle">
            <td>
            <div class="text-nowrap">{{ $no }}</div>
            </td>
            <td>
            <div class="text-nowrap">{{ $user['user_email'] }}</div>
            </td>
            <td>
            <div class="text-nowrap">{{ $user['user_fullname'] }}</div>
            <!-- <div class="small text-body-secondary text-nowrap"><span>New</span> | Registered: Jan 1, 2023</div> -->
            </td>
            <td>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/user/detail/{{ $user['user_id'] }}" class="btn btn-info" type="button"><i class="icon cil-info"></i></a>
                <a href="/user/hapus/{{ $user['user_id'] }}" class="btn btn-danger" type="button"><i class="icon cil-delete"></i></a>
            </div>
            <!-- <div class="dropdown">
                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
            </div> -->
            </td>
    </tr>
    @php $no++ @endphp
    @endforeach
    </tbody>
</table>
</div>

@endsection

@section("foot")
@endsection