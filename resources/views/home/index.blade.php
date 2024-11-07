@extends('layouts.main')

@section('head')
@endsection

@section("content")
<div class="col-lg-12">
    <div class="card mb-4">
    <div class="card-header"><strong>Selamat Datang</strong></div>
    <div class="card-body">
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-xl-3 col-xxl-3">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <div class="text-white text-opacity-75 text-end">
                                <svg class="icon icon-xxl">
                                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-people') }}"></use>
                                </svg>
                                </div>
                                <div class="fs-4 fw-semibold">{{ $user['count'] }}</div>
                                <div>{{ $user['title'] }}</div>
                                <div class="progress progress-white progress-thin my-2">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $user['percentage'] }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div><small class="text-white text-opacity-75">{{ $user['desc'] }}</small>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
            <!-- /.row.g-4-->
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section("foot")
@endsection