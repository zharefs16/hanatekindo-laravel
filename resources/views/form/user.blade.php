@extends('layouts.main', ['title'=>'HANATEKINDO'])

@section('head')
@endsection

@section("content")

@if(session()->has('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="fw-semibold">{{ session('failed') }}</div>
        <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="col-xl-12 col-lg-7 col-md-9">
    <div class="card mx-4">
        <div class="card-body p-4">
            <h1>Create User</h1>
            <!-- <p class="text-body-secondary">Silahkan isi data-data pada form berikut :</p> -->
            <form action="/user" method="post" class="row g-3 needs-validation" id="form" enctype="multipart/form-data" novalidate="">
                @csrf
                
                <div class="col-12" id="perorangan">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Form</strong> <small>User</small></div>
                        <div class="card-body">
                            <!-- <div class="text-center">
                                <div class="avatar avatar-xl"><img class="avatar-img" src="{{ URL::asset('dist/assets/img/kkp.png') }}" alt="user@user_email.com') }}"></div>
                            </div> -->
                            <div class="row g-3">
                                <div class="col-md-12"><label class="form-label" for="user_fullname">Full Name</label><input class="form-control @error('name') is-invalid @enderror" id="user_fullname" type="text" name="user_fullname" required value="">
                                <div class="invalid-feedback">Please provide Name.</div>
                                @error('user_fullname')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-12"><label class="form-label" for="user_email">Email</label>
                                    <div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend">@</span><input class="form-control @error('user_email') is-invalid @enderror" id="user_email" type="text" aria-describedby="inputGroupPrepend" name="user_email" required value="">
                                        <div class="invalid-feedback">Please provide Email.</div>
                                        @error('user_email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="form-label" for="password">Password</label><input class="form-control @error('name') is-invalid @enderror" id="password" type="text" name="password" required value="">
                                <div class="invalid-feedback">Please provide Password.</div>
                                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-12"><label class="form-label" for="confirm_password">Konfirmasi password</label><input class="form-control @error('name') is-invalid @enderror" id="confirm_password" type="text" name="confirm_password" required value="">
                                <div class="invalid-feedback">Please provide Password.</div>
                                @error('confirm_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#staticBackdropLive">Submit</button>
                        <!-- <button class="btn btn-primary me-md-2" type="submit" name="submit" value="perorangan">Submit</button> -->
                        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                        <div class="modal fade" id="staticBackdropLive" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLiveLabel">Alert</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Apakah Anda Yakin?</p>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-success me-md-2" type="submit" name="submit" value="add">Ya</button>
                                <button class="btn btn-danger" type="button" data-coreui-dismiss="modal">Tidak</button>
                                <!-- <button class="btn btn-success" type="button">Ya</button> -->
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#staticBackdropLive">Launch static backdrop modal</button> -->
                        </div>
                    </div>
                </div>


                
            </form>
        </div>
    </div>
</div>
@endsection

@section("foot")
@endsection