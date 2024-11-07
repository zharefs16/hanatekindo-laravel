@extends('layouts.main', ['title'=>''])

@section('head')
@endsection

@section("content")

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="fw-semibold">{{ session('success') }}</div>
        <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="col-xl-12 col-lg-7 col-md-9">
    <div class="card mx-4">
        <div class="card-body p-4">
            <h1>Settings</h1>
            <!-- <p class="text-body-secondary">Silahkan isi data-data pada form berikut :</p> -->
            <form action="/update/logo" method="post" class="row g-3 needs-validation" id="form2" enctype="multipart/form-data" novalidate="">
                <!-- @method('put') -->
                @csrf
                
                <div class="col-12" id="perorangan">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Logo</strong></div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-1">
                                <div class="avatar avatar-xl"><img class="avatar-img" src="{{ $logos }}"></div>
                                </div>
                                <div class="col-md-5"><label class="form-label" for="file_photo">File Upload</label><input type="file" class="form-control @error('file_photo') is-invalid @enderror" id="file_logo" name="file_logo" value="">
                                <div class="invalid-feedback">Please provide file_Photo.</div>
                                @error('file_photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-warning" type="button" data-coreui-toggle="modal" data-coreui-target="#staticBackdropLive">Update</button>
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
                                <button class="btn btn-success me-md-2" type="submit" name="update_logo" value="update_logo">Ya</button>
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