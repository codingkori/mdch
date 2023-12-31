@extends('admin/layout')

@section('content')

<x-back-btn-component title="{{ $sectionsData->id ? 'Edit' : 'Add' }} Facilities" />


<form action="{{ route('sections.process', ['section_key' => 'facilities', 'id' => $sectionsData->id]) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

    @csrf
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="title" class=" form-control-label">Heading<span class="text-danger ml-1">*</span></label>
        </div>
        <div class="col-12 col-md-9">
            <div class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </div>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title of the news..." value="{{ old('title') ? old('title') : $sectionsData->title }}">
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="content" class=" form-control-label">Content</label>
        </div>
        <div class="col-12 col-md-9">
            <div class="text-danger">
                @error('content')
                {{$message}}
                @enderror
            </div>
            <textarea name="content" id="content" rows="9" placeholder="Enter the content of the news..." class="form-control">{{ old('content') ? old('content') : $sectionsData->content }}</textarea>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="attachment" class=" form-control-label">Attachment</label>
        </div>
        <div class="col-12 col-md-9">
            <div class="text-danger">
                @error('attachment')
                {{$message}}
                @enderror
            </div>
            <input type="file" id="attachment" name="attachment" class="form-control-file">
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-info ms-auto">Submit</button>
    </div>

</form>



@endsection