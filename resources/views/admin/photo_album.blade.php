@extends('admin/layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Photo Album</h2>
            <div class="d-flex flex-nowrap">

                <input type="text" class="form-control" id="validationTooltip01" value="" placeholder="Create New Album" required>
                <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
<div id="album-container" class="position-relative d-inline-block mb-2 w-100">
    <div class="d-flex align-items-center position-relative">
        <div class="preview-container d-flex justify-content-center position-relative">
            <div class="card m-2 album-card">
                <img class="card-img-top" src="{{ asset('assets/images/teeth.png') }}" alt="Card image cap">
                <div class="card-body p-2">
                    <h5 class="card-title m-0">Students</h5>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection