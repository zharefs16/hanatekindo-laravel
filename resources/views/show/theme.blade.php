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
            <form action="/update/theme" method="post" class="row g-3 needs-validation" id="form1" enctype="multipart/form-data" novalidate="">
                <!-- @method('put') -->
                @csrf
                
                <div class="col-12" id="perorangan">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Theme</strong></div>
                        <div class="card-body">
                            <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="validationCustom05">Colour</label>
                                    <select name="theme" id="validationCustom05" class="form-select" required="">
                                        <option selected value="" disabled="">Choose...</option>
                                        @foreach($colours as $theme)
                                        <option {{ old('theme') == $theme['colour'] ? 'selected' : '' }} value="{{ $theme['colour'] }}">{{ $theme['colour'] }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please provide Skala Usaha.</div>
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
                                <button class="btn btn-success me-md-2" type="submit" name="update_menu" value="update_menu">Ya</button>
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