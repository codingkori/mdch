@extends('admin/layout')

@section('content')


@foreach($sections as $sectionsData)
<x-add-btn-component title="{{ $sectionsData->title }}" route="about/manage/{{ $sectionsData->id }}" icon="fas fa-pencil" type="Edit" />
<div class="row g-0 mb-5">
<div class="col-md-7">
    <div class="card-body p-0">
        {!! nl2br(e($sectionsData->content)) !!}
    </div>
</div>


    <div class="col-md-5">
        <img src="{{ asset('storage/default/about.jpg') }}" class="img-fluid" alt="...">
    </div>

</div>
@endforeach

@endsection